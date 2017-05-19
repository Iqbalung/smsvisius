 <?php 
	class notif_payment extends CI_controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->helper('form');
			$this->load->helper('url_helper');
			$this->load->library('Session/Session');

			
			
		}
		function pay(){
			$data = array(
                'status' => '2'
               
            );
            include('Veritrans/Config.php');
			$order=$this->input->get('order_id');
 			$status=$this->input->get('status_code');
 			if($status==200){
		 		$this->db->where('id', $order);
       			$this->db->update('invoice', $data);
       			
       			
		 	}
		 	$this->load->view('index/header');
		 	$this->load->view('finish');
		 	header('Location: ' . base_url('index.php/customer/shopping_history/'));
		 	
			

		}

	}


 ?>
