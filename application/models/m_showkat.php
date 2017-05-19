<?php  
	
	class m_showkat extends CI_model{
		
		public function select_all_kategori(){
			return $this->db->get('kategori')->result_object();
		}
		function lookup($keyword){  
	        $this->db->select('*')->from('products');  
	        $this->db->like('pro_name',$keyword,'after');  
	        $query = $this->db->get();      
	           
	        return $query->result();  
    	}  
		public function select_all_barang(){
			// return $this->db->get('products')->result_object();	
			$this->db->select('*');
			$this->db->from('products');
			$this->db->join('kategori', 'products.pro_kategori = kategori.kat_id');
			return $this->db->get()->result_object();
		}

		public function select_all_subkat(){
			return $this->db->query("SELECT subkat_judul, kat_judul FROM subkat s JOIN kategori k ON s.subkat_kat_id = k.kat_id")->result_object();
		}

		public function selected_katsub($id){
			$this->db->select('*');
			$this->db->from('subkat');
			$this->db->join('kategori', 'subkat.subkat_kat_id = kategori.kat_id');
			$this->db->where('kat_slug',$id);
			return $this->db->get()->result();
		}	
		public function selected_kat($id){
			$this->db->select('*');
			$this->db->from('kategori');
			$this->db->where('kat_slug',$id);
			return $this->db->get()->result();
		}
		public function selected_katpriceasc($id){
			$this->db->select('*');
			$this->db->from('kategori');
			$this->db->where('kat_slug',$id);
			return $this->db->get()->result();
		}
		public function selected_katpricedesc($id){
			$this->db->select('*');
			$this->db->from('kategori');
			$this->db->where('kat_slug',$id);
			return $this->db->get()->result();
		}
		
		public function select_produk($id_kat){
			$this->db->select('*');
			$this->db->from('products');
			$this->db->join('kategori', 'products.pro_kategori = kategori.kat_id');
			$this->db->where('kategori.kat_slug', $id_kat);
			return $this->db->get()->result();
		}
		public function search_produk($key){
			$this->db->select('*');
			$this->db->from('products');
			$this->db->join('kategori', 'products.pro_kategori = kategori.kat_id');
			$this->db->like('products.pro_name', $key);
			return $this->db->get()->result();
		}
		public function tag_produk($key){
			$this->db->select('*');
			$this->db->from('products');
			$this->db->join('kategori', 'products.pro_kategori = kategori.kat_id');
			$this->db->like('products.pro_tag', $key);
			return $this->db->get()->result();
		}

		public function selected_sub($id){
			$this->db->select('*');
			$this->db->from('vp_az');
			$this->db->where('subkat_slug',$id);
			return $this->db->get()->result();
		}
		
		public function selected_subpricedesc($id){
			$this->db->select('*');
			$this->db->from('products');
			$this->db->join('kategori', 'products.pro_kategori = kategori.kat_id');
			$this->db->join('subkat', 'subkat.subkat_kat_id = kategori.kat_id');
			$this->db->where('subkat.subkat_slug',$id);
			return $this->db->get()->result();
		}		
		public function selected_subpriceasc($id){
			$this->db->select('*');
			$this->db->from('products');
			$this->db->join('kategori', 'products.pro_kategori = kategori.kat_id');
			$this->db->join('subkat', 'subkat.kat_id = kategori.kat_id');
			$this->db->where('subkat.subkat_slug',$id);
			return $this->db->get()->result();
		}
		public function sort_produk_az(){

			return $this->db->get('vp_az')->result_object();
		

		}
		public function sort_produk_za(){

			return $this->db->get('vp_za')->result_object();
		

		}
		public function sort_price_az(){

			return $this->db->get('vp_price_az')->result_object();
		

		}
		public function sort_price_za(){

			return $this->db->get('vp_price_za')->result_object();
		

		}
		

		public function sort_kategori($id_kategori){
			$this->db->select('*');
			$this->db->from('vp_price_za');
		
			
			$this->db->where('kat_slug',$id_kategori);
			return $this->db->get()->result();	
		}	

	}
/*
$this->db->order_by("title", "desc");
$this->db->order_by("name", "asc"); */