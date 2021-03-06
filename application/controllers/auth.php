<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Auth extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->library(array('authentication'));
		$this->load->helper('url');
		$this->load->database();
	}
	
	function index()
	{
		$this->login();
	}
	
	function login()
	{
		if ($this->session->userdata('level')==null){
			$this->load->library('form_validation');
			$this->load->helper('form');
			$this->form_validation->set_rules('username', 'Username','trim|required|strip_tags');
			$this->form_validation->set_rules('password', 'Password','trim|required');			
				
			if ($this->form_validation->run() == FALSE)
			{
				$this->load->view('welcome');
			}
			else
			{
				if ($this->check_login())
				{
					$this->redirect_page();
				}else{
					$data['message'] = "Username atau password belum benar.";
					$this->load->view('welcome',$data);
				}
			}
		}
		else $this->redirect_page();
	}
	
	
	function redirect_page()
	{		
		$level = $this->session->userdata('level');
		log_message('info', $level);
		if($level=='guru'){
			redirect('home');
		}else{
			redirect('home/dashboardSiswa');
		}
	}
	
	function check_login()
	{
		$username   = $this->input->post('username',TRUE);
		$password   = $this->input->post('password',TRUE);
		$login = $this->authentication->login($username, $password);
		if($login)
		{
			return TRUE;
		}
		else
		{
			$this->form_validation->set_message('check_login','Username atau password anda salah.');
			return FALSE;
		}
	}
	 
	function logout(){
		$this->authentication->logout();		
		redirect('/');
	}
	
	function access_denied(){
		$this->load->view('access_denied');
	}
}

/* End of file auth.php */
/* Location: ./application/controllers/auth.php */