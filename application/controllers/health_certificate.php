<?php
if(!defined('BASEPATH')) exit('No direct script access allowed');
class Health_certificate extends CI_Controller{
	private $data;
	function __construct(){
		parent::__construct();
		$this->load->model(array(
				'health_certificate_model',
				'species_model',
				'package_model',
				'country_model'
		));
		$this->load->library(array(
				'template',
				'form_validation',
				'session'
		));
		$this->load->helper('url');
		$this->data['not_read'] = $this->health_certificate_model->selectByRead();
		$this->data['message'] = $this->session->flashdata('message');
	}

	function index(){
		if ($this->session->userdata('status')=='admin')
		$this->inbox();
		else redirect(base_url("auth/login"));
	}
	
	function inbox(){
		if ($this->session->userdata('status')=='admin'){			
			$this->data['health_certificate']=$this->health_certificate_model->selectAll();
			$this->template->display('health_certificate/inbox',$this->data);
		}
		elseif ($this->session->userdata('status')=='user')
		{
		  	redirect(base_url("auth/access_denied"));
		}else{
		  	redirect(base_url("auth/login"));
		}
	}
	
	function approve(){
		$user = $this->session->userdata('status');
		if ($user =='admin' || $user =='user' ){
			if($this->uri->segment(3)!=""){
				$id=$this->uri->segment(3);
				$this->form_validation->set_rules('approved','approved','required');
				
				if($this->form_validation->run()==FALSE){					
					$this->data['species']=$this->species_model->selectAll();
					$this->data['package']=$this->package_model->selectAll();
					$this->data['country']=$this->country_model->selectAll();
					$this->data['health_certificate']=$this->health_certificate_model->selectById($id);					
					$data['read'] = '1';
					$this->health_certificate_model->updateRead($id,$data);
					$this->data['not_read'] = $this->health_certificate_model->selectByRead();
					if ($this->session->userdata('status')=='admin'){
						$this->template->display('health_certificate/approval',$this->data);
					}else{		
						$this->load->view('health_certificate/inform',$this->data);							
					}	
				}else{
					$data['approve'] = $this->input->post('approved');				
					if($this->health_certificate_model->update($id,$data)) {
						$this->session->set_flashdata('message','Perubahan data tidak berhasil di simpan');					
					}

					redirect('health_certificate');
				}
			}
		}else{
			redirect(base_url("auth/login"));	
		}		
	}
	function request(){
		$user = $this->session->userdata('status');
		if ($user =='admin' || $user =='user' ){	
			$this->form_validation->set_rules('product_name','ProductName','required');
			$this->form_validation->set_rules('species_id','NamaSpecies','required');
			$this->form_validation->set_rules('type_processed','JenisOlahan','required');
			$this->form_validation->set_rules('total_packaging','JumlahKemasan','required');
			$this->form_validation->set_rules('packaging_id','TypeKemasan','required');
			$this->form_validation->set_rules('total_tonnage','JumlahTonase(Kg)','required');
			$this->form_validation->set_rules('production_date','TanggalProduksi','required');
			$this->form_validation->set_rules('name_upi','NamaUPI','required');
			$this->form_validation->set_rules('address_upi','AlamatUPI','required');
			$this->form_validation->set_rules('haccp_number','NomorHACPP','required');
			$this->form_validation->set_rules('country_id','Negaratujuan','required');
			$this->form_validation->set_rules('name_importer','NamaImportir','required');
			$this->form_validation->set_rules('address_importer','NamaImportir','required');
			$this->form_validation->set_rules('load_port_name','NamaPelabuhanMuat','required');
			$this->form_validation->set_rules('arrived_port_name','NamaPelabuhanTiba','required');
			$this->form_validation->set_rules('transportation','AlatTransportasi','required');
			$this->form_validation->set_rules('container_number','NomorKontainer','required');
			$this->form_validation->set_rules('delivery_date','TanggalPengiriman','required');
			
			if($this->form_validation->run()==FALSE){
				$data['species']=$this->species_model->selectAll();
				$data['package']=$this->package_model->selectAll();
				$data['country']=$this->country_model->selectAll();				
				$username = $this->session->userdata('username');
				$this->load->view('health_certificate/request',$data);
			}else{
				$data=array(
						'health_certificate_id'=>null,
						'product_name'=>$this->input->post('product_name'),
						'species_id'=>$this->input->post('species_id'),
						'type_processed'=>$this->input->post('type_processed'),
						'total_packaging'=>$this->input->post('total_packaging'),
						'packaging_id'=>$this->input->post('packaging_id'),
						'total_tonnage'=>$this->input->post('total_tonnage'),
						'production_date'=>$this->input->post('production_date'),
						'name_upi'=>$this->input->post('name_upi'),
						'address_upi'=>$this->input->post('address_upi'),
						'haccp_number'=>$this->input->post('haccp_number'),
						'register_number'=>$this->input->post('register_number'),
						'country_id'=>$this->input->post('country_id'),
						'name_importer'=>$this->input->post('name_importer'),
						'address_importer'=>$this->input->post('address_importer'),
						'load_port_name'=>$this->input->post('load_port_name'),
						'arrived_port_name'=>$this->input->post('arrived_port_name'),
						'transportation'=>$this->input->post('transportation'),
						'container_number'=>$this->input->post('container_number'),
						'fishing_vessels'=>$this->input->post('fishing_vessels'),
						'area'=>$this->input->post('area'),
						'delivery_date'=>$this->input->post('delivery_date'),
						'publish_date_begin'=>$this->input->post('publish_date_begin'),
						'publish_date_end'=>$this->input->post('publish_date_end'),
						'approve'=>'0',
						'read'=>'0',
						'username'=>$this->session->userdata('username')					
				);
				$this->health_certificate_model->insert($data);
				redirect('health_certificate/history');
			}
		}else{
			redirect(base_url("auth/login"));	
		}
	}	

	function history(){
		$user = $this->session->userdata('status');
		if ($user =='admin' || $user =='user' ){
			$this->data['health_certificate']=$this->health_certificate_model->selectByUsername($this->session->userdata('username'));
			$this->load->view('health_certificate/history',$this->data);		
		}else{
			redirect(base_url("auth/login"));	
		}
	}
}