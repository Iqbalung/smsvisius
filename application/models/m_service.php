<?php
	class m_service extends CI_controller{
		function get_all_majalah(){
			$res =  $this->db->query("SELECT * FROM majalah   ")->result_object();
			return $res;
		}
		function get_a_majalah($id){
			$res =  $this->db->query("SELECT * FROM page_majalah where id_majalah = '$id'")->result_object();
			return $res;
		}
		function storeInvoice($data) {
    		return $this->db->insert('invoicemajalah',$data);
    	}
	}

?>