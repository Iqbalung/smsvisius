<?php  
	class M_model_admin extends CI_model{
		PUBLIC function generate_tutorial()
		{
		$query = $this->db->query("SELECT a.idtutorial, a.id_category, a.title, a.slug, a.text, a.image, a.date, a.publish, a.author, a.counter, b.name, (select c.name from login c where c.idlogin=a.author) as idlogin
		FROM tutorial a LEFT OUTER JOIN categorytutorial b ON b.idcategorytutorial = a.id_category WHERE a.idtutorial=idtutorial ");
		return $query;
		}

		public function login($usr,$pass){
			return $this->db->get_where('login',array('username'=>$usr,'password'=>$pass))->row();
		}

		///----------------------SMS GATEWAY------------------------////
		public function select_all_peserta(){
			$this->db->select('idpeserta, peserta_nama, peserta_nohp, peserta_email, peserta_kota, Status');
			$this->db->join('sentitems', 'peserta.idsms = sentitems.id');
			return $this->db->get('peserta')->result_object();
		}
		public function select_all_barang(){
			$this->db->select('pro_id, pro_image, pro_name,pro_feature,barang_habis ,pro_price,pro_stock,kat_judul,	pro_price_wholesale');
			$this->db->join('kategori', 'products.pro_kategori = kategori.kat_id');
			return $this->db->get('products')->result_object();
		}

		public function add_barang($data){
			return $this->db->insert('products',$data);		
		}

		public function add_test($data){
			return $this->db->insert('peserta',$data);	
		}

		public function send_user($data){
			return $this->db->insert('outbox',$data);	
		}



	}
?>