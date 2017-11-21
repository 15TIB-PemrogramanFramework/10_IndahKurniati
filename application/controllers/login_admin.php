<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login_admin extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('admin_model');
    }


   function index(){
		$this->load->view('login_admin');
	}

	function aksi_login(){
		$username_admin = $this->input->post('username_admin');
		$password_admin = $this->input->post('password_admin');
		$dataLogin = array(
			'username_admin' => $username_admin,
			'password_admin' => $password_admin
		);
		$cek = $this->admin_model->cek_login_admin("admin", $dataLogin)->num_rows();
		if($cek > 0 ){
			$data_session = array(
				'username_admin' => $username_admin,
				'status' => "login"
			);
			
			$this->session->set_userdata($data_session);
			Redirect(base_url().'index.php/welcome/beranda_admin');
		}else{
			Redirect(base_url(). 'index.php/login_admin') ;
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login_admin'));
	}
}
?>
 