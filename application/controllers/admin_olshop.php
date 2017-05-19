 <?php
	 class admin_olshop extends CI_controller{
		
		function __construct(){
			parent::__construct();
			$this->load->helper('url');
			$this->load->library('Session/Session');
			$this->load->database();
			$this->load->model('m_model_admin');
			$this->load->helper('date');
			$this->load->library('cart');
			$this->load->library('PHPExcel');
			$this->load->helper('date');

		}

		public function dashboard(){
			if( $this->session->userdata('log_admin') == TRUE ){
				$data = array(
						'menu'=> 'dashboard'
					);
				$this->load->view('admin-dashboard/header');
				$this->load->view('admin-dashboard/left-menu',$data);
				$this->load->view('admin-dashboard/konten');				
			}else{
				$this->load->view('admin-dashboard/log-in');
			}
		}
	
		function user(){
			if( $this->session->userdata('log_admin') == TRUE ){								
				$data = array(
						'menu'=> 'user',
						'user_wholesale' =>$this->m_model_admin->select_all_wholesale()
					);
				$this->load->view('admin-dashboard/header');
				$this->load->view('admin-dashboard/left-menu',$data);
				$this->load->view('admin-dashboard/user/lihat-user',$data);
			}else{
				$this->load->view('admin-dashboard/log-in');
			}
		}

		function activate_user($id){
			$data = array(
					'reseler_status'=>1
				);
			$res = $this->m_model_admin->update_wholsesale($id,$data);
			if($res){
				redirect(base_url('index.php/admin_olshop/user'));
			}
		}

		function deactivate_user($id){
			$data = array(
					'reseler_status'=>0
				);
			
			$res = $this->m_model_admin->update_wholsesale($id,$data);
			if($res){
				redirect(base_url('index.php/admin_olshop/user'));
			}
		}


		function set_featured($id){
			$res = $this->m_model_admin->set_featured($id);
			if($res){
				redirect(base_url('index.php/admin_olshop/barang'));
			}
		}

		function unset_featured($id){
			$res = $this->m_model_admin->unset_featured($id);
			if($res){
				redirect(base_url('index.php/admin_olshop/barang'));
			}
		}
		function set_habis($id){
			$res = $this->m_model_admin->set_habis($id);
			if($res){
				redirect(base_url('index.php/admin_olshop/barang'));
			}
		}

		function unset_habis($id){
			$res = $this->m_model_admin->unset_habis($id);
			if($res){
				redirect(base_url('index.php/admin_olshop/barang'));
			}
		}

		public function index(){
			$this->load->view('admin-dashboard/log-in');
		}

		public function logout(){
			$this->session->sess_destroy();
			$this->load->view('admin-dashboard/log-in');
		}

		public function login(){
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$result = $this->m_model_admin->login($user,$pass);
			if(count($result) > 0) {
				$set_session =  array(
						'nama'=>$result->name,
						'log_admin'=>TRUE
					);
				$this->session->set_userdata($set_session);
				redirect(base_url('index.php/admin_olshop/dashboard'));
			}else{
				$this->load->view('/admin-dashboard/log-in');
			}
		}
		public function admin(){
		
			$data = array(
							'menu'=> 'tambah_user',
							'admin'=> $this->m_model_admin->select_all_user()
						);
			$this->load->view('admin-dashboard/header');
			$this->load->view('admin-dashboard/left-menu',$data);
			$this->load->view('admin-dashboard/add_user/add_user',$data);

		}
		public function add_user(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			$data = array(
							
							'username'=>$username,
							'password'=>$password


						);
			$result = $this->m_model_admin->add_user($data);
				if($result){
					$this->session->set_flashdata('info','saved');	
					redirect(base_url('index.php/admin_olshop/admin'));
				}
			 

			$this->load->view('admin-dashboard/header');
			$this->load->view('admin-dashboard/left-menu',$data);
			$this->load->view('admin-dashboard/add_user/add_user',$data);

		}
		public function updated_user($id){

			$data = array(
							'menu'=> 'brand',
							'user'=>$this->m_model_admin->select_user($id)
						);
			$this->load->view('admin-dashboard/header');
			$this->load->view('admin-dashboard/left-menu',$data);
			$this->load->view('admin-dashboard/add_user/update_user',$data);

		}

		public function update_user_act($id){
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$pass_baru = $this->input->post('password_baru');
			$user_baru = $this->input->post('username_baru');
			$data = array(
				'username'=>$user_baru,
				'password'=>$pass_baru
				
			);

			$result = $this->m_model_admin->login($user,$pass);
			
			if(count($result) > 0) {				
				$result2 = $this->m_model_admin->update_user($id,$data);
				if($result2){
					$this->session->set_flashdata('info','updated');
					redirect(base_url('index.php/admin_olshop/admin'));
				}
			}
			
		}
		
		public function get_all_peserta(){
			if( $this->session->userdata('log_admin') == TRUE ){								
				$data = array(
						'menu'=> 'inbox',
						'peserta' =>$this->m_model_admin->select_all_peserta()
					);
				$this->load->view('admin-dashboard/header');
				$this->load->view('admin-dashboard/left-menu',$data);
				$this->load->view('admin-dashboard/peserta/lihat-produk',$data);
			}else{
				$this->load->view('admin-dashboard/log-in');
			}
		}

		public function test(){
			if( $this->session->userdata('log_admin') == TRUE ){								
				$data = array(
						'menu'=> 'test',
					);
				$this->load->view('admin-dashboard/header');
				$this->load->view('admin-dashboard/left-menu',$data);
				$this->load->view('admin-dashboard/peserta/tambah-produk',$data);
			}else{
				$this->load->view('admin-dashboard/log-in');
			}
		}

		public function add_test(){
			
			$name = $this->input->post('nama');
			$nohp = $this->input->post('nohp');
			$email = $this->input->post('email');
			$kota = $this->input->post('kota');
			$text = 'Test aja beib';
			$data = array(	
							'peserta_nama'=>$name,
							'peserta_nohp'=>$nohp,
							'peserta_email'=>$email,
							'peserta_kota'=>$kota
						);	
			$massage = array(
							'DestinationNumber'=>$nohp,
							'TextDecoded'=>$text.' '.$name,
							'CreatorID'=>"Gammu"
						);
			$result = $this->m_model_admin->add_test($data);
			$result2 = $this->m_model_admin->send_user($massage);

				if(!$result2 && !result){
					echo $error;
				}else{
					echo "success";
				}
			
		}



		


	}
?>