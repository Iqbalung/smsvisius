<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_orders extends CI_Model {
	
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
	
	
public function process()
	{ 	

		$invoice_id = date('Ymdhis');
		//here for create new invoice
		$invoice = array(
						'id' => $invoice_id,
						'data'		=>	date('Y-m-d H:i:s'),
						'due_date'	=>	date('Y-m-d H:i:s',mktime(date('H'),date('i'),date('s'),date('m'),date('d') + 1,date('Y'))),
						'user_id'	=> $this->get_user_id_by_session(),
						'status'	=>	'1',
						'kurir'		=> $this->input->post('kurir'),
						'service'	=> $this->input->post('layanan'),
						'biaya_kirim' => $this->input->post('ongkir'),
						'total_harga' => $this->input->post('total'),
						
						'kabupaten' => $this->input->post('kota'),
					

						);

		$this->db->insert('invoices',$invoice);
		// $invoice_id = $this->db->insert_id();
		//here for put ordered items in orders table
		
		foreach ($this->cart->contents() as $item)
		{
			$data = array(
						'invoice_id'		=> $invoice_id,
						'product_id'		=> $item['id'],
						'product_type'		=> $item['size'],
						'product_title'		=> $item['title'],
						'qty'				=> $item['qty'],
						'price'				=> $item['price'],
						'size'				=> $item['size']
						
						 );
			$this->db->insert('orders',$data);
		}
		
		return TRUE;
	}
	
	public function all_invoices()
	{ // get all orders from orders tble
		$get_orders = $this->db->get('invoices');
			if($get_orders->num_rows() > 0 ) {
					return $get_orders->result();
			} else {
					 return array();
			}
	}
	public function get_invoice_by_id($invoice_id)
	{
		$get_invoice_by = $this->db->where('id',$invoice_id)->limit(1)->get('invoices');
		if($get_invoice_by->num_rows() > 0 ) {
					return $get_invoice_by->result();
			} else {
					 return FALSE;
					}
	}
	
	public function get_orders_by_invoice($invoice_id)
	{
		$get_orders_by = $this->db->where('invoice_id',$invoice_id)->get('orders');
		if($get_orders_by->num_rows() > 0 ) {
					return $get_orders_by->result();
			} else {
					 return FALSE;
					}
	}
	public function diskon(){
			// return $this->db->get('products')->result_object();	
			$this->db->select('*');
			$this->db->from('diskon_total');
			return $this->db->get()->result_object();
	}
	public function diskon_volume(){
			// return $this->db->get('products')->result_object();	
			$this->db->select('*');
			$this->db->from('diskon_volume_transaksi');
			$this->db->join('diskon_volume','diskon_volume.id_disk_volume=diskon_volume_transaksi.id_disk_volume');
			return $this->db->get()->result_object();
	}

	
	function checkout($id, $data)
    {
    	$this->db->where('id', $id);
		$this->db->update('invoices', $data);

	    
	}

	
}//end class