<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_customer extends CI_Model {
		
	public function get_shopping_history($user)
		{

		// get all invoices identified by $user
			// $get_it =  $this->db->select('i.*,SUM(o.qty * o.price) AS total')
			// 					->from('invoices i, users u,orders o')
							
			// 					->where('u.usr_id',$user)
			// 					->where('o.invoice_id = i.id')
			// 					->where('i.user_id = u.usr_id')
			// 					->group_by('o.invoice_id')
			// 					->get();
								
			$get_it = $this->db->query("select * from invoices where user_id = $user");
			if($get_it->num_rows() > 0 )
			 {
			 	return $get_it->result();
			 }else{
			 		return FALSE; //if there are no matching records
			 	}
			
		}
		
		public function get_invoice($idus)
		{// get all invoices identified by $user
			
			  $query = $this->db->query("SELECT COUNT(*) FROM invoices as cp where user_id=$idus and status = 1 ");
  				return $query->num_rows();

		}
		public function get_invoice_active($idus)
		{// get all invoices identified by $user
			
			  $query = $this->db->query("SELECT COUNT(*) FROM invoices where user_id=$idus  and status = 2 ");
  				return $query->num_rows();

		}
		public function mark_invoice_paid_confirmed($invoice_id,$amount)
		{//check the invoice
			$ret = TRUE ;
			$is_invoice = $this->db->where('id',$invoice_id)->limit(1)->get('invoices');
			if($is_invoice->num_rows() == 0  )
			{
					$ret = $ret && FALSE;
			}else{//check the amount
					$total = $this->db->select('SUM(qty * price) AS total')
									  ->where('invoice_id',$invoice_id)
									  ->get('orders');
									  
					if($total->row()->total > $amount )
					{
							$ret = $ret && FALSE ;
					}else{//mark the invoice to PAID
							$this->db->where('id',$invoice_id)->update('invoices',array('status'=>'3'));
						}
						
				 }
			return $ret;
		}
		
		
	}///end class  ///
	
	
?>
		