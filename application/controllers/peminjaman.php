<?php 

/**
* 
*/class peminjaman extends CI_Controller
{


	var $limit=10;
	var $offset=10;
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('pembayaran_model');
		$this->load->model('peminjaman_model');
		$this->load->helper(array('url'));
	}
	function index()
	{
		//print_r($this->barang_model->ambil_data());
		$data['peminjaman'] = $this-> peminjaman_model->ambil_data();
		$this->load->view('data_peminjaman',$data);
	}
	function delete($id)
	{
		$this->peminjaman_model->hapus_data($id);
		redirect(site_url('index.php/welcome/data_peminjaman_admin'));
	}
	function update($id)
	{
		$peminjaman = $this->peminjaman_model->ambil_data_id($id);
		$data = array(
			'aksi' 							=> site_url('index.php/peminjaman/update_aksi'),
			'id_peminjaman' 				=> set_value('id_peminjaman',$peminjaman->id_peminjaman),
			
			'nama_nasabah' 					=> set_value('nama_nasabah',$peminjaman->nama_nasabah),
			'tanggal_peminjaman' 			=> set_value('tanggal_peminjaman',$peminjaman->tanggal_peminjaman),
			'dana'				=> $this->peminjaman_model->selectdana(),
			'lama_peminjaman' 				=> set_value('lama_peminjaman',$peminjaman->lama_peminjaman),
			'button' 						=> 'Edit'
			);

		$this->load->view('peminjaman/peminjaman_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'id_peminjaman' 				=> $this->input->post('id_peminjaman'),
			'nama_nasabah' 					=> $this->input->post('nama_nasabah'),	
			'tanggal_peminjaman' 			=> $this->input->post('tanggal_peminjaman'),
			'id_dana' 						=> $this->input->post('id_dana'),
			'lama_peminjaman' 				=> $this->input->post('lama_peminjaman'),
			);	

		$id_peminjaman = $this->input->post('id_peminjaman');
		$this->peminjaman_model->edit_data($id_peminjaman,$data);
		redirect(site_url('index.php/welcome/data_peminjaman_admin'));
	}

	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('index.php/peminjaman/tambah_aksi'),
 			'nama_nasabah' => set_value('nama_nasabah'),
 			'tanggal_peminjaman' => set_value('tanggal_peminjaman'),
 			'dana'				=> $this->peminjaman_model->selectdana(),
 			'lama_peminjaman' => set_value('lama_peminjaman'),
 			'id_peminjaman' => set_value('id_peminjaman'),
 			
 			'button' => 'Tambah'

 		);
 		$this->load->view('peminjaman/peminjaman_form',$data);
 	}

 	function tambah_aksi()
 	{
 		$data = array(
			'nama_nasabah' 					=> $this->input->post('nama_nasabah'),

			'id_dana' 						=> $this->input->post('id_dana'),
			'tanggal_peminjaman' 			=> $this->input->post('tanggal_peminjaman'),
			'lama_peminjaman' 				=> $this->input->post('lama_peminjaman')
			
 
		);
		$this->peminjaman_model->tambah_data($data);
 		
 		redirect(site_url('index.php/welcome/data_peminjaman_admin'));
 	}

	
	function peminjaman_id()
	{
		$id_nasabah = $this->session->userdata('id_nasabah');
		$data['peminjaman'] = $this-> peminjaman_model->ambil_data_idnasabah($id_nasabah);
		$this->load->view('data_peminjaman',$data);
	}
		

		function pinjam(){
			$this->load->view('data_peminjaman');
		}
	}





 ?>

