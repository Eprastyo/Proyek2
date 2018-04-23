<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_login');
	}
 
	function index(){
		$this->load->view('v_login');
	}
 
	function aksi_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$where = array(
			'email' => $email,
			'password' => md5($password),
			'level'=> 'admin'
			);
		$cek = $this->m_login->cek_login("t_member",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $email,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("Admin/hal_dashboard"));
 
		}else{
			echo "Email dan password salah !";
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}