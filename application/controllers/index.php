<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Index extends CI_controller{
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('pagination');
			$this->load->model('model_products');
			$this->load->model('model_orders');
			$this->load->model('m_model_admin');
			$this->load->model('m_showkat');
			$this->load->model('m_service');
			$this->load->model('model_settings');
			$this->load->library('Session/Session');
			//$this->load->library('curl');
		}

		function getCity($province){		
			$curl = curl_init();
			curl_setopt_array($curl, array(
			  CURLOPT_URL => "http://api.rajaongkir.com/starter/city?province=$province",
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "GET",
			  CURLOPT_HTTPHEADER => array(
			    "key: 5f0b2b7dc71dd2bab399fbc0c11eeb43"
			  ),
			));

			$response = curl_exec($curl);
			$err = curl_error($curl);
			curl_close($curl);
			if ($err) {
			  echo "cURL Error #:" . $err;
			} else {
			  //echo $response;
				$data = json_decode($response, true);
			  //echo json_encode($k['rajaongkir']['results']);
			for ($j=0; $j < count($data['rajaongkir']['results']); $j++){
			    	echo "<option value='".$data['rajaongkir']['results'][$j]['city_id']."'>".$data['rajaongkir']['results'][$j]['city_name']."</option>";	  
				}
			}
		}

		function home(){
			$this->load->view('index/home');
		}
		function home_add(){
			$this->load->view('index/ajaxadd');
		}

		function add_peserta(){
			$name = $this->input->post('nama');
			$nohp = $this->input->post('nohp');
			$email = $this->input->post('email');
			$kota = $this->input->post('kota');
			$text = 'Test aja beib';
			$this->db->where('DestinationNumber','$nohp');
			$this->db->where('status','SendingOKNoReport');
    		$query = $this->db->get('sentitems');
    		
			$data = array(	
							'peserta_nama'=>$name,
							'peserta_nohp'=>'+62'.$nohp,
							'peserta_email'=>$email,
							'peserta_kota'=>$kota
						);	
			echo json_encode($data);
			$massage = array(
							'DestinationNumber'=>$nohp,
							'TextDecoded'=>$text.' '.$name,
							'CreatorID'=>"Gammu"
						);
			if ($query->num_rows() > 0){
        		//redirect("http://localhost/smsvisius/index.php/erorsend");
        		echo "test2";
        	}else{
        		$result = $this->m_model_admin->add_test($data);
				$result2 = $this->m_model_admin->send_user($massage);
				if(!$result2 && !$result){
					echo $error;
				}else{
					echo "test1";
				}

        	}	
		}
		function add_peserta_service(){
			$name = $this->input->post('nama');
			$nohp = $this->input->post('nohp');
			$email = $this->input->post('email');
			$kota = $this->input->post('kota');
			$text = 'Test aja beib';
			$this->db->where('DestinationNumber','$nohp');
			$this->db->where('status','SendingOKNoReport');
    		$query = $this->db->get('sentitems');
    		
			$data = array(	
							'peserta_nama'=>$name,
							'peserta_nohp'=>'+62'.$nohp,
							'peserta_email'=>$email,
							'peserta_kota'=>$kota
						);	
			
			$massage = array(
							'DestinationNumber'=>$nohp,
							'TextDecoded'=>$text.' '.$name,
							'CreatorID'=>"Gammu"
						);
			if ($query->num_rows() > 0){
        		//redirect("http://localhost/smsvisius/index.php/erorsend");
        		echo "test2";
        	}else{
        		$result = $this->m_model_admin->add_test($data);
				$result2 = $this->m_model_admin->send_user($massage);
				if(!$result2 && !$result){
					$data = array(
        				'error' => 'false',
        				'error_msg' => 'berhasil'
        				);
        				// 'user' => array(
        				// 			'name' => $this->input->post('name'),
        				// 			'email' => $email

        				// 			),
					echo json_encode($data);
				}else{
						$data = array(
					'error' => 'false',
        				'error_msg' => 'gagal'
        				);
        				echo json_encode($data);
				}

        	}	
		}

		function curl_post(){
			 $this->curl->create('http://localhost/smsvisius/index.php/index/add_peserta');
     
    // Optional, delete this line if your API is open
		  // $this->curl->http_login($username, $password);
		 
		    $this->curl->post(array(
		        'nama' => "1",
		        'email' => "1",
		        'kota' => "2",
		        'nohp' => "3"
		    ));
		     
		    $result = json_decode($this->curl->execute());
		 
		    if(isset($result->status) && $result->status == 'success')
		    {
		        echo 'User has been updated.';
		    }
		     
		    else
		    {
		        echo 'Something has gone wrong';
		    }

		}

		function add_peserta_srvice(){
			
		}

		function erorsend(){
			$this->load->view('index/eror_register');
		}

		function successsend(){
			$this->load->view('index/success_register');
		}

		public function index(){
			$this->load->database();
    		$this->db->query('DELETE FROM invoices WHERE SERVICE =""');
			$this->load->view("index/header");
			$this->load->view("shop/search",$data);
			//$this->load->view("shop/search");
			$this->load->view("index/terbaru",$data);
			$this->load->view("index/featured-produk",$data);
			$this->load->view("index/footer");
		}


	}

?>