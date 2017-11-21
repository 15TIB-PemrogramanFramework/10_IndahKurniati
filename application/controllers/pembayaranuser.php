<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class pembayaranuser extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('pembayaran_model');
	}
	//Tampilan Awal Daftar Akun
	function index(){
		 
		$this->load->view('pembayaran' );



	}

//--------------------------------------------------
	 
	function tambah_Akun_Aksi(){
		$data = array(
		
			
			'nama_nasabah' 					=> $this->input->post('nama_nasabah'),
			
			 
			'bayar_angsuran' 			=> $this->input->post('bayar_angsuran'),
			 
			'angsuran_ke' 				=> $this->input->post('angsuran_ke')
			
 
		);

		$this->pembayaran_model->tambah_data($data);
		$this->load->view('pembayaran_sukses',$data);
		
 	}
	}
//------------------------------------

?>