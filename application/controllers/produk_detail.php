<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class produk_detail extends CI_controller{
		
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('M_produk_detail');
			$this->load->database();
		}

		public function index($id_kat,$id){
			// $result_single =$this->M_produk_detail->select_produk($id);
			$data = array(
					'single_produk'=>$this->M_produk_detail->select_produk($id),
					'related_produk'=>$this->M_produk_detail->select_related($id_kat)
				);

			$this->load->view("index/header");
			$this->load->view("single-produk/left-side",$data);
			$this->load->view("single-produk/right-side",$data);
			$this->load->view("single-produk/tab");
		

			$this->load->view("index/footer");
		}
	}

?>