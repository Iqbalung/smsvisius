<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Curl extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper(array('form','url','ongkir')); // Load Helper : Form, URL, Dan File Helper Yang Dibuat Sendiri
		$this->load->library(array('form_validation','user_agent','session')); // Load Library : Validasi Form, User Agent, dan session
	}
	public function index() {
		$this->load->view('welcome_message'); // => Index Default
	}
	public function get_ongkir() {
		// Validasi Form Terlebih Dahulu //
		$this->form_validation->set_rules('weight','weight','required|numeric');
		$this->form_validation->set_rules('prov_origin','prov_origin','required');
		$this->form_validation->set_rules('city_origin','city_origin','required');
		$this->form_validation->set_rules('prov_destination','prov_destination','required');
		$this->form_validation->set_rules('city_destination','city_destination','required');
		// End Validasi Form //
		if ($this->form_validation->run() == TRUE ) {
			/* 	
				GetCost() -> Memanggil Function Dari Helper ongkir dan mengirimkan parameter dengan 
				$this->input->post('city_origin'), $this->input->post('city_destination'), $this->input->post('weight')
				dan ditampilkan pada file view get_ongkir 
			*/
			$data['query'] = json_decode(GetCost($this->input->post('city_origin'), $this->input->post('city_destination'), $this->input->post('weight')), TRUE );
			$this->load->view('get_ongkir', $data);
		} else {
			$this->session->set_flashdata('message', '
				<div class="alert alert-warning alert-dismissible fade in" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<strong>Hallo Guys..!</strong> Follow Rulles, Its Okay...!!!
				</div>');
			redirect($this->agent->referrer());
		}
	}
}