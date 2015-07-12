<?php if ( ! defined('BASEPATH')) exit('No direct script auth allowed');

class ListGuru extends CI_Controller{
	private $data;
	function __construct()
	{
		parent::__construct();	 
		$this->load->library('session');
		$this->load->helper('url');
		if (($this->session->userdata('level')=='guru')||($this->session->userdata('level')=='siswa')){
			// $this->load->model(array('user_model','health_certificate_model'));
			   $this->load->library(array('template','form_validation'));			
			// $this->data['not_read'] = $this->health_certificate_model->selectByRead();
			// $data['message_error_left'] = $this->session->flashdata('message_error_left');
			// $data['message_error_right'] = $this->session->flashdata('message_error_right');
			// $this->data['crud_view'] = $this->load->view('user/add',$data,true);
			// $this->data['users'] = $this->user_model->selectAll();
		}
		elseif ($this->session->userdata('status')=='user')
		{
			redirect(base_url("auth/access_denied"));
		}else{
			redirect(base_url("auth/login"));
		}
	}
	
	function index()
	{					
		$this->template->display('list/list_guru',$this->data);
	}
	
	function add()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('confirm_password','confirm_password','required');
		if($this->form_validation->run()==FALSE)
		{
			$this->template->display('user/list',$this->data);
		}else{
			if ($this->input->post('password')===$this->input->post('confirm_password')) {							
				$data= array(
					'username'=>$this->input->post('username'),
					'password'=>md5($this->input->post('password')),
					'status'=>$this->input->post('status')
					);
				if($this->user_model->insert($data)!=true){
					$this->session->set_flashdata('message_error_left','Data tidak berhasil di tambah');
				}
			}else{
				$this->session->set_flashdata('message_error_left','Password yang dimasukkan belum sama.');
			}
			redirect('user');
		}
	}
	
	function delete()
	{
		if($this->uri->segment(3)!="")
		{
			$username = $this->uri->segment(3);
			if(!$this->user_model->delete($username)){
				$this->session->set_flashdata('message_error_right','Data tidak berhasil di hapus');
			}
			
		}
		redirect(base_url('user'));
	}
	
	function update()
	{
		if ($this->uri->segment(3)!="")
		{
			// $this->form_validation->set_rules('username','username','required');
			$this->form_validation->set_rules('password','password','required');
			$this->form_validation->set_rules('password_confirm','password_confirm','required|macthes[password]');
			$username = $this->uri->segment(3);
			if($this->form_validation->run()==FALSE)
			{				
				$result['user'] = $this->user_model->selectById($username);
				// $this->data['crud_view'] = $this->load->view('user/update',$result,true);
				// $this->template->display('user/list',$this->data);
				header('Content-Type: application/json');
				echo json_encode($result);
			}else{
				if ($this->input->post('password')===$this->input->post('password_confirm')) {							
					$data= array(							
						'password'=>md5($this->input->post('password')),
						'status'=>$this->input->post('status')
						);					
					if(!$this->user_model->update($username,$data)){
						$this->session->set_flashdata('message_error_left','Data tidak berhasil di tambah');
					}
				}else{
					$this->session->set_flashdata('message_error_left','Password yang dimasukkan belum sama.');
				}
				redirect('user');
			}
		}
	}

	function updateWithAjax()
	{
		if ($this->uri->segment(3)!="")
		{			
			$username = $this->uri->segment(3);
			$result['user'] = $this->user_model->selectById($username);
			header('Content-Type: application/json');
			echo json_encode($result);					
		}
	}
}