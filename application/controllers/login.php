<?php ob_start(); ?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');



class Login extends CI_Controller {
	public function __construct ()
	{
		parent::__construct();
		
		$this->load->library('cart');
		$this->load->helper('html');




$this->load->model('model_users');	
$this->load->library ('Form_validation');            // Loading form validation library
    $this->load->helper(array('form', 'url')); 
	}
		
	public function index()
	{
		$this->load->model('model_settings');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric|md5');
		
		if($this->form_validation->run()	==	FALSE)
		{
			$data['get_sitename'] = $this->model_settings->sitename_settings();
			$data['get_footer'] = $this->model_settings->footer_settings();	
			$this->load->view('index/header'); 	
			$this->load->view('login_checkout',$data); 	
		}else{
			$this->load->model('model_users');	
			$valid_user	= $this->model_users->check_usr();
			$check_user_is_active = $this->model_users->check_user_is_active();
			if($valid_user	==	FALSE)
			{
				if ($check_user_is_active == FALSE)
				{
				}else{
						
					 }
				
				redirect('login');
			}else{
				$this->session->set_userdata('username',$valid_user->usr_name);
				$this->session->set_userdata('group',$valid_user->usr_group);
				$this->session->set_userdata('alamat',$valid_user->alamat);
					$this->session->set_userdata('alamat',$valid_user->alamat);				
				$this->session->set_userdata('provinsi',$valid_user->provinsi);
				$this->session->set_userdata('kabupaten',$valid_user->kabupaten);
				$this->session->set_userdata('id',$valid_user->usr_id);
					$this->session->set_userdata('id',$valid_user->usr_id);

				switch($valid_user->usr_group)
				{
					case 1 ://for admin
							$this->load->helper('html');
					break;
					
					case 2 ://for c-resseler
					if(($valid_user->reseler_status)=="1"){
							$url = 'index/fast_order';
					echo'
						<script>
						window.location.href = "'.base_url().'index.php/'.$url.'";
						</script>;
						';
					}else{
						echo  'tunggu aktif';
					}
					break;
						case 3 ://for member
						$url = 'customer/shopping_history';
					echo'
<		        script>
window.location.href = "'.base_url().'index.php/'.$url.'";
</script>
';
					break;
					
					default: break;
				}
			}//end if valid_user 
			
		}//end if validation
		
		
	
		
	}
	public function login_checkout()
	{
		$this->load->model('model_settings');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required|alpha_numeric|md5');
		
		if($this->form_validation->run()	==	FALSE)
		{
			$data['get_sitename'] = $this->model_settings->sitename_settings();
			$data['get_footer'] = $this->model_settings->footer_settings();	
			$this->load->view('index/header'); 	
			$this->load->view('login_checkout',$data); 	
		}else{
			$this->load->model('model_users');	
			$valid_user	= $this->model_users->check_usr();
			$check_user_is_active = $this->model_users->check_user_is_active();
			if($valid_user	==	FALSE)
			{
				if ($check_user_is_active == FALSE)
				{
				}else{
						
					 }
				
				redirect('login');
			}else{
				$this->session->set_userdata('username',$valid_user->usr_name);
				$this->session->set_userdata('group',$valid_user->usr_group);
				$this->session->set_userdata('alamat',$valid_user->alamat);
				$this->session->set_userdata('provinsi',$valid_user->provinsi);
				$this->session->set_userdata('kabupaten',$valid_user->kabupaten);
				$this->session->set_userdata('id',$valid_user->usr_id);
					$this->session->set_userdata('id',$valid_user->usr_id);

				switch($valid_user->usr_group)
				{
					case 1 ://for admin
							$this->load->helper('html');
					break;
					
					case 2 ://for c-admin
							$url = 'index/fast_order';
echo'
<script>
window.location.href = "'.base_url().'index.php/'.$url.'";
</script>
';
					break;
					
					case 3 ://for member
							$url = 'index/delivery';
echo'
<script>
window.location.href = "'.base_url().'index.php/'.$url.'";
</script>
';
					break;
					
					default: break;
				}
			}//end if valid_user 
			
		}//end if validation
		
		
		
		
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('login');
	}
	
		
	
	
}