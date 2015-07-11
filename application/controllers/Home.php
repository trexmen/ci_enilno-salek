<?php
	
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	* 
	*/
	class Home extends CI_Controller
	{

		function __construct(){
			parent::__construct();
			// $this->load->model(array(
			// 		'health_certificate_model',
			// 		'species_model',
			// 		'package_model',
			// 		'country_model'
			// ));
			$this->load->library(array(
					// 'template',
					'form_validation',
					'session'
			));
			$this->load->helper('url');
			//$this->data['not_read'] = $this->health_certificate_model->selectByRead();
			$this->data['message'] = $this->session->flashdata('message');
		}
		
		function index(){
			if ($this->session->userdata('status')=='Y'){
				$this->load->view('home');
			}
			else redirect(base_url("auth/login"));
		}		
	
	}