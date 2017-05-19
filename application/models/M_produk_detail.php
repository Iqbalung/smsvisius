<?php  
	defined('BASEPATH') OR exit('No direct script access allowed');
	class m_produk_detail extends CI_Model{
		
		public function select_produk($id){
			$this->db->select('*');
			$this->db->from('products');
			$this->db->join('kategori', 'products.pro_kategori = kategori.kat_id');
			$this->db->where('pro_slug', $id);
			return $this->db->get()->row();
		}

		public function select_related($id_kategori){
			$this->db->select('*');
			$this->db->from('products');
			$this->db->limit(4);
			$this->db->join('kategori', 'products.pro_kategori = kategori.kat_id');
			$this->db->where('kat_slug',$id_kategori);
			return $this->db->get()->result();	
		}	
	}
?>