<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Shop extends CI_controller{
		
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('m_showkat');
			$this->load->model('model_products');
			$this->load->database();
			$this->load->library("pagination");
			$this->load->helper('html');
			$this->load->library('table'); 
			$this->load->helper('form');
		}

		

		public function index(){
			$config = array();
			$config["base_url"] = base_url() . "index.php/shop/index/";
			$config["total_rows"] = $this->db->count_all('products');
			$config["per_page"] = 6;
			$config['use_page_numbers'] = TRUE;
			$choice = $config["total_rows"] / $config["per_page"];
        	$config["num_links"] = floor($choice);
	        $config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = TRUE;
	        $config['last_link'] = TRUE;
	        $config['first_tag_open'] = '<li>';
	        $config['first_tag_close'] = '</li>';
	        $config['prev_link'] = '&laquo';
	        $config['prev_tag_open'] = '<li class="prev">';
	        $config['prev_tag_close'] = '</li>';
	        $config['next_link'] = '&raquo';
	        $config['next_tag_open'] = '<li>';
	        $config['next_tag_close'] = '</li>';
	        $config['last_tag_open'] = '<li>';
	        $config['last_tag_close'] = '</li>';
	        $config['cur_tag_open'] = '<li class="active"><a href="#">';
	        $config['cur_tag_close'] = '</a></li>';
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['pagination'] = $this->pagination->create_links();
			$this->load->view("index/header");
			$data['kategori'] = $this->m_showkat->select_all_kategori();
			$this->load->view("shop/search",$data);
			$data['subkat'] = $this->m_showkat->select_all_subkat();
			$data['kategori'] = $this->m_showkat->select_all_kategori();
			$this->load->view("shop/left-bar",$data);
			$data["links"] =$this->pagination->create_links();
			$data['produk'] = $this->model_products->all_products($config["per_page"],  $data['page']);
			$this->load->view("shop/produk",$data);
			
			
			$this->load->view("index/footer");
		}
		public function lookup(){  
        // process posted form data  
        		
        // process posted form data  
        		$keyword = $this->input->post('term');  
       			$data['response'] = 'false'; //Set default response  
        		$query = $this->m_showkat->lookup($keyword); //Search DB  
        		if( ! empty($query) )  
        		{  
            		$data['response'] = 'true'; //Set response  
            		$data['message'] = array(); //Create array  
            
            		foreach( $query as $row )  
            		{  
                		$data['message'][] = array(   
                        'id'=>$row->pro_id,  
                        'value' => $row->pro_name,  
                         '');  //Add a row to array  
            		}  
        		}

		        if('IS_AJAX')  
		        {  
		            	echo json_encode($data); //echo json string if ajax request  
		               
		        }  
		        else  
		        {  
		            $this->load->view('autocomplete/index',$data); //Load html view of search results  
		        }  
		
		}  

	


		// public function count(){
		// 	echo $this->db->count_all_results('products');
		// }

		public function fast_order(){
			$id = $this->input->post('printable_name');

			$data['kategori'] = $this->m_showkat->select_all_kategori();
			$data['produk'] = $this->m_showkat->search_produk($id);
			$this->load->view("index/header");
			$this->load->view("shop/search_fast");
			$this->load->view("shop/produk_fast",$data);
			$this->load->view("index/footer");	
		}
		public function selected_kategori($id){
			$config = array();
			$config["base_url"] = base_url() . "index.php/shop/index/";
			$query = $this->db->query("SELECT * from vp_az where kat_slug = '".$id."'");
			$cnt = $query->num_rows();
			$config["total_rows"] = $cnt; 
			$config["per_page"] = 3;
			$config['use_page_numbers'] = TRUE;
			$choice = $config["total_rows"] / $config["per_page"];
        	$config["num_links"] = floor($choice);
	        $config['full_tag_open'] = '<ul class="pagination">';
	        $config['full_tag_close'] = '</ul>';
	        $config['first_link'] = TRUE;
	        $config['last_link'] = TRUE;
	        $config['first_tag_open'] = '<li>';
	        $config['first_tag_close'] = '</li>';
	        $config['prev_link'] = '&laquo';
	        $config['prev_tag_open'] = '<li class="prev">';
	        $config['prev_tag_close'] = '</li>';
	        $config['next_link'] = '&raquo';
	        $config['next_tag_open'] = '<li>';
	        $config['next_tag_close'] = '</li>';
	        $config['last_tag_open'] = '<li>';
	        $config['last_tag_close'] = '</li>';
	        $config['cur_tag_open'] = '<li class="active"><a href="#">';
	        $config['cur_tag_close'] = '</a></li>';
	        $config['num_tag_open'] = '<li>';
	        $config['num_tag_close'] = '</li>';
			$config["uri_segment"] = 3;
			$this->pagination->initialize($config);
			$data['page'] = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
			$data['pagination'] = $this->pagination->create_links();
			// $result_single =$this->M_produk_detail->select_produk($id);
			$data['kategori'] = $this->m_showkat->selected_kat($id);
			$data['subkat']= $this->m_showkat->selected_katsub($id);
			$data['produk'] = $this->m_showkat->select_produk($id);
			$this->load->view("index/header");
			$this->load->view("shop/search",$data);
			$this->load->view("shop/left-bar-sub",$data);
			$this->load->view("shop/produk",$data);
			$this->load->view("index/footer");
			
		}
		public function search(){
		 	$id = $this->input->post('printable_name');
			// $result_single =$this->M_produk_detail->select_produk($id);
			$data['kategori'] = $this->m_showkat->select_all_kategori();
			$data['produk'] = $this->m_showkat->search_produk($id);
			

	
			
			$this->load->view("index/header");
			
			$this->load->view("shop/search",$data);

			$this->load->view("shop/left-bar",$data);
			$this->load->view("shop/produk",$data);
			$this->load->view("index/footer");
			
			


			
		}
		public function tag($key){
		 				// $result_single =$this->M_produk_detail->select_produk($id);
			$data['kategori'] = $this->m_showkat->select_all_kategori();
			$data['produk'] = $this->m_showkat->tag_produk($key);
			$this->load->view("index/header");
			$this->load->view("shop/search",$data);
			$this->load->view("shop/left-bar",$data);
			$this->load->view("shop/produk",$data);
			
		}
		public function selected_sub($id_kat,$id){
			// $result_single =$this->M_produk_detail->select_produk($id);

			$data['kategori'] = $this->m_showkat->selected_kat($id_kat);
			$data['subkat']=$this->m_showkat->selected_katsub($id_kat);
			$data['produk']=$this->m_showkat->selected_sub($id);
			$this->load->view("index/header");
			$this->load->view("shop/left-bar",$data);
			$this->load->view("shop/produk",$data);

	}
	public function selected_kat($id_kat){
			// $result_single =$this->M_produk_detail->select_produk($id);
			$data['kategori'] = $this->M_showkat->selected_kat($id_kat);
			$data['subkat']=$this->M_showkat->selected_katsub($id_kat);
			$data['produk']=$this->M_showkat->selected_sub($id);
			$this->load->view("index/header");
			$this->load->view("shop/left-bar",$data);
			$this->load->view("shop/produk",$data);


	}
	public function sort_product(){
			$id = $this->input->post('sort');
			if($id=="za"){
			 	$data['produk'] = $this->m_showkat->sort_produk_za();
			}elseif($id=="az"){
				$data['produk'] = $this->m_showkat->sort_produk_az();

			}elseif($id=="price_az"){
				$data['produk'] = $this->m_showkat->sort_price_az();

			}
			elseif($id=="price_za"){
				$data['produk'] = $this->m_showkat->sort_price_za();

			}

			
			
			$data['kategori'] = $this->m_showkat->select_all_kategori();
			
			$this->load->view("index/header");
			
			$this->load->view("shop/search",$data);

			$this->load->view("shop/left-bar",$data);
			$this->load->view("shop/produk",$data);
			
		}
	


	// public function selected_sub($id_kat,$id){
	// 		// $result_single =$this->M_produk_detail->select_produk($id);
	// 		$data['kategori'] = $this->M_showkat->selected_kat($id_kat);
	// 			$data['subkat']=$this->M_showkat->selected_katsub($id_kat);
	// 				$data['produk']=$this->M_showkat->selected_sub($id);
			
			
	// 		$this->load->view("index/header");
	// 		$this->load->view("shop/left-bar",$data);
	// 		$this->load->view("shop/produk",$data);
			
	// }


}

?>