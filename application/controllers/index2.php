<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Index extends CI_controller{
		
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			
			$this->load->library('Session/Session');
			$this->load->library('googlemaps');
			if ($this->session->userdata('username')==""){
				echo $this->load->view('index/register');
			}
		}
	}

	?>