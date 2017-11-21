<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class welcome extends CI_Controller {


	function __construct()
	{
		parent::__construct();
		$this->load->model('nasabah_model');
		$this->load->model('peminjaman_model');
	}

	 
	public function beranda()
	{
		$this->load->view('beranda');
	}

	public function staf()
	{
		$this->load->view('staf');
	}

	public function ketentuan()
	{
		$this->load->view('ketentuan');
	}

	public function login()
	{
		$this->load->view('login');
	}

	public function registrasi(){
	
 		$this->load->view('registrasi');
	}

		public function tambah_nasabah(){
		$data = array(
			'action' 			=> site_url('index.php/welcome/tambah_Akun_Aksi'),
			'nama_nasabah' 	=> set_value('nama_nasabah'),
			'nohp_nasabah' 	=> set_value('nohp_nasabah'),
			'alamat_nasabah'	=> set_value('alamat_nasabah'),
			'username_nasabah'	=> set_value('username_username'),
			'password_nasabah' 	=> set_value('password_nasabah')
		);
		$this->load->view('registrasi', $data);
	}
	function tambah_Akun_Aksi(){
		$data = array(
			'nama_nasabah'  => $this->input->post('nama_nasabah'),
			'nohp_nasabah' => $this->input->post('nohp_nasabah'),
			'alamat_nasabah' => $this->input->post('alamat_nasabah'),
			'username_nasabah' => $this->input->post('username_nasabah'),
			'password_nasabah'  => $this->input->post('password_nasabah')
			 
		);
		$this->nasabah_model->tambahAkun($data);Redirect(base_url(). 'index.php/login_nasabah') ;
		redirect(site_url('loginuser'));
	}
//------------------------------------

 

	//adminn
	public function beranda_admin()
	{
		$this->load->view('beranda_admin');
	}

	public function data_dana_admin()
	{
		$this->load->model('dana_model');
		$data['dana']=$this->dana_model->ambil_data();
 		$this->load->view('data_dana',$data);
	}

	public function data_nasabah_admin()
	{
		$this->load->model('nasabah_model');
		$data['nasabah']=$this->nasabah_model->ambil_data();
 		$this->load->view('data_nasabah',$data);
 		
	}

	public function data_pembayaran_admin()
	{
		$this->load->model('pembayaran_model');
		$data['pembayaran']=$this->pembayaran_model->ambil_data();
 		$this->load->view('data_pembayaran',$data);
	}

	public function data_peminjaman_admin()
	{
		$data['pinjam']=$this->peminjaman_model->tampil_data_pinjam();
		 
 		$this->load->view('data_peminjaman',$data);
	}

	public function data_staf_admin()
	{
		$this->load->model('staf_model');
		$data['staf']=$this->staf_model->ambil_data();
 		$this->load->view('data_staf',$data);
	}

	public function data_user_admin()
	{
		$this->load->model('user_model');
		$data['user']=$this->user_model->ambil_data();
 		$this->load->view('data_user',$data);
	}

	public function login_admin()
	{
		$this->load->view('login_admin');
	}

	//untuk sisi user
	 public function peminjaman()
	{
		$this->load->view('peminjaman');
	}

	 public function pembayaran()
	{
		$this->load->view('pembayaran');
	}

	}
