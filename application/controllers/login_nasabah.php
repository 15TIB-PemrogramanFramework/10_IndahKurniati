<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class login_nasabah extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('nasabah_model');
    }


   function index(){
		$this->load->view('login');
	}

	function aksi_login(){
		$username_nasabah = $this->input->post('username_nasabah');
		$password_nasabah = $this->input->post('password_nasabah');
		$dataLogin = array(
			'username_nasabah' => $username_nasabah,
			'password_nasabah' => $password_nasabah
		);
		$cek = $this->nasabah_model->cek_login_nasabah("nasabah", $dataLogin)->num_rows();
		if($cek > 0 ){
			$data_session = array(
				'username_nasabah' => $username_nasabah,
				'status' => "login"
			);
			
			$this->session->set_userdata($data_session);
			Redirect(base_url().'index.php/peminjamanuser');
		}else{
			Redirect(base_url(). 'index.php/login_nasabah') ;
		}
	}
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('index.php/login_nasabah'));
	}
}
?>
 