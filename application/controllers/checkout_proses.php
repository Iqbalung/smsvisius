<?php

	/**
	* 
	*/
	class checkout_proses extends Ci_controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('url');
			
			$this->load->model('model_orders');
			$this->load->model('model_settings');
			$this->load->model('model_products');
			$this->load->model('m_model_admin');
			$this->load->model('m_showkat');
			$this->load->model('model_settings');
			$this->load->library('Session/Session');
					
		}
		public function get_user_id_by_session()
		{ 
		$usr_name = $this->session->userdata('username');
		$gry = $this->db->where('usr_name',$usr_name)
						->select('usr_id')
						->limit(1)
						->get('users');
				if($gry->num_rows() > 0 )
					{
							return $gry->row()->usr_id;
					}else{
						
							return 0;
						 }	
		}
		function pembayaran(){
			$email = $this->session->userdata('nama');
			$nama = $this->input->post('email');
			$nohp = $this->session->set_userdata('no_hp');
			$id = $this->input->post('id');
			$kota = $this->input->post('kota');
			$biaya = $this->input->post('ongkir');
			$kurir = $this->input->post('kurir');
			$layanan = $this->input->post('layanan');
			$kurir = $this->input->post('kurir');
			
			$lengkap = $this->input->post('lengkap');
			$tot = $this->cart->total()+$biaya;
				$idinvoice = date('YmdHis');
				$invoice = array(
						'id'		=> $idinvoice,
						'data'		=>	date('Y-m-d H:i:s'),
						'due_date'	=>	date('Y-m-d H:i:s',mktime(date('H'),date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
						'user_id'	=> $this->get_user_id_by_session(),
						'status'	=>	'1',
						'service'	=> $layanan,
						'total_harga'=> $tot,
						'lengkap'	=> $lengkap
						);
			$this->db->insert('invoices',$invoice);
			//here for put ordered items in orders table
			foreach ($this->cart->contents() as $item)
			{
				$data2 = array(
							'invoice_id'		=> $idinvoice,
							'product_id'		=> $item['id'],
							'product_type'		=> $item['name']." Ukuran ".$item['size'],
							'product_title'		=> $item['title']." Ukuran ".$item['size'],
							'qty'				=> $item['qty'],
							'price'				=> $item['price'],
							 );
				$this->db->insert('orders',$data2);

			}

			
				

			
			if($this->input->post('alamat')!=""){
				$alamat = $this->input->post('alamat');
			}else{
				$alamat = $this->session->userdata('alamat');	
			}
			

			$this->load->view('index/header');
			// $this->model_orders->process($data);
			$this->load->view('order_success');
			$this->cart->destroy();

			

			}
			public function finish(){
				$this->load->view('index/header');
		 		$this->load->view('finish');
			} 










		}

	












?>