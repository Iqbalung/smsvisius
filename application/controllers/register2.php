p<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	
	public function __construct ()
	{
		parent::__construct();
		$this->load->model('model_users');
		$this->load->model('model_settings');
		$this->load->helper('form');

	}
		
	public function index()
	{
		
		
		
			$data['get_sitename'] = $this->model_settings->sitename_settings();
			$data['get_footer'] = $this->model_settings->footer_settings();	
			$this->load->view('index/header'); 
			$this->load->view('register/form_register',$data); 
			
	
				$data_register_new = array
				 (
					'usr_name'			=> $this->input->post('rusername'),
					'usr_password'		=> $this->input->post('rpassword'),
					'stuts'				=> '1',
					'usr_group'				=>'3p',
					'alamat'			=> $this->input->post('alamat'),
					'reseler_status'    -> $this->input->post('alamat')
					'provinsi'			=> $this->input->post('provinsi'),
					'kodepos'			=> $this->input->post('kodepos'),
					'no_hp'			=> $this->input->post('no_hp')
				 );
				 if($this->model_users->is_usr() == FALSE)
				 {
					 $this->model_users->register_new($data_register_new);
						 $this->form_validation->set_rules('rusername');
						 $this->form_validation->set_rules('rpassword');
						 
								$this->load->view('login/form_login'); 	
						
								$valid_user	= $this->model_users->check();
								 
									 $this->session->set_flashdata('error','Username / Password Not Correct !' );
									 redirect('login');
								 
										 $this->session->set_userdata('username',$valid_user->usr_name);
										 $this->session->set_userdata('group',$valid_user->usr_group);
										 switch($valid_user->usr_group)
										 {
											 case 3 ://for member
											 redirect(base_url());
											 break;
											 
											 default: break;
										 }
								 }
						 
					 
					 redirect(base_url());
				
						$this->session->set_flashdata('error','Please Write Other User Name !' );
						redirect('register');
				 }
		}
	

