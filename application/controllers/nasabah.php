<?php 
 /**
 * 
 */
 class Nasabah extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('nasabah_model');
 		date_default_timezone_set('asia/jakarta');
 	}


 	function index()
 	{
 		//print_r($this->buku_model->ambil_data());
 		$data['nasabah']=$this->nasabah_model->ambil_data();
 		$this->load->view('data_nasabah',$data);

 	}

 	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('index.php/nasabah/tambah_aksi'),
 			'nama_nasabah' => set_value('nama_nasabah'),
 			'alamat_nasabah' => set_value('alamat_nasabah'),
 			'nohp_nasabah' => set_value('nohp_nasabah'),
 			
 			'id_nasabah' => set_value('id_nasabah'),
 			'button' => 'Tambah'

 		);
 		$this->load->view('nasabah/nasabah_form',$data);
 	}

 	function tambah_aksi()
 	{
 		$data=array(
 			'nama_nasabah' => $this->input->post('nama_nasabah'),
 			'alamat_nasabah' => $this->input->post('alamat_nasabah'),
 			'nohp_nasabah' => $this->input->post('nohp_nasabah'),
 			
 		);
 		$this->nasabah_model->tambah_data($data);
 		redirect(site_url('index.php/nasabah'));
 	}

 	function delete($id_nasabah)
 	{
 		$this->nasabah_model->hapus_data($id_nasabah);
 		redirect(site_url('index.php/nasabah'));
 	}

 	function update($id_nasabah)
 	{
 		$nasabah=$this->nasabah_model->ambil_data_id($id_nasabah);
 		$data=array(
 			'aksi' => site_url('index.php/nasabah/update_aksi'),
 			'nama_nasabah' => set_value('nama_nasabah',$nasabah->nama_nasabah),
 			'alamat_nasabah' => set_value('alamat_nasabah',$nasabah->alamat_nasabah),
 			'nohp_nasabah' => set_value('nohp_nasabah',$nasabah->nohp_nasabah),
 			
 			'id_nasabah' => set_value('id_nasabah',$nasabah->id_nasabah),
 			'button' => 'edit'

 		);

 		$this->load->view('nasabah/nasabah_form',$data);
 		
 	}

 	function update_aksi()
 	{
 		$data=array(
 			'nama_nasabah' => $this->input->post('nama_nasabah'),
 			'alamat_nasabah' => $this->input->post('alamat_nasabah'),
 			'nohp_nasabah' => $this->input->post('nohp_nasabah'),
 			
 		);
 		$id_nasabah=$this->input->post('id_nasabah');

 		$this->nasabah_model->edit_data($id_nasabah,$data);
 		redirect(site_url('index.php/nasabah
 			'));
 	}

 	function nasabah_cek($username)
	{
		//print_r($this->Member_model->ambil_data());
		$data['nasabah'] = $this-> nasabah_model->ambil_data();
		$this->load->view('data_nasabah',$data);
	}

	function index_nasabah()
	{
		$username_nasabah = $this->session->userdata('username_nasabah');
		$nasabah = $this->nasabah_model->ambil_data_username($username_admin);
		$data = array(
			'aksi' 				=> site_url('nasabah/update_aksi'),
			'id_nasabah' 		=> set_value('id_nasabah',$nasabah->id_nasabah),
			'nama_nasabah' 		=> set_value('nama_nasabah',$nasabah->nama_nasabah),
			'username_nasabah' 	=> set_value('username_nasabah',$nasabah->username_nasabah),
			'password_nasabah' 	=> set_value('password_nasabah',$nasabah->password_nasabah),
			'alamat_nasabah' 	=> set_value('alamat_nasabah',$nasabah->alamat_nasabah),
			'nohp_nasabah' 		=> set_value('nohp_nasabah',$nasabah->nohp_nasabah),
			
			'button' 			=> 'Edit'
			);

		$this->load->view('data_nasabah',$data);		
	
	}


 }

 ?>