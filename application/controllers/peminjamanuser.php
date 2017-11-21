<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
* 
*/
class peminjamanuser extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('peminjaman_model');
	}
	//Tampilan Awal Daftar Akun
	function index(){
		$data['dana'] =$this->peminjaman_model->selectdana();
		$this->load->view('peminjaman',$data);



	}

//--------------------------------------------------
	 
	function tambah_Akun_Aksi(){
		$data = array(
			'nama_nasabah' 					=> $this->input->post('nama_nasabah'),
			'id_dana' 						=> $this->input->post('id_dana'),
			 
			'tanggal_peminjaman' 			=> $this->input->post('tanggal_peminjaman'),
			 
			'lama_peminjaman' 				=> $this->input->post('lama_peminjaman')
			
 
		);

		$this->peminjaman_model->tambah_data($data);
		$this->load->view('peminjaman_sukses',$data);
		
 	}
	}
//------------------------------------

?>