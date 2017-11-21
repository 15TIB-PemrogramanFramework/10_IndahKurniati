<?php 
 /**
 * 
 */
 class dana extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('dana_model');
 		date_default_timezone_set('asia/jakarta');
 	}


 	function index()
 	{
 		//print_r($this->buku_model->ambil_data());
 		$data['dana']=$this->dana_model->ambil_data();
 		$this->load->view('data_dana',$data);

 	}

 	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('index.php/dana/tambah_aksi'),
 			'jumlah' => set_value('jumlah'),
 			'tanggal' => set_value('tanggal'),
 			'id_dana' => set_value('id_dana'),
 			'button' => 'Tambah'

 		);
 		$this->load->view('dana/dana_form',$data);
 	}

 	function tambah_aksi()
 	{
 		$data=array(
 			'jumlah' => $this->input->post('jumlah'),
 			'tanggal' => $this->input->post('tanggal'),
 			
 			
 		);
 		$this->dana_model->tambah_data($data);
 		redirect(site_url('index.php/dana'));
 	}

 	function delete($id_dana)
 	{
 		$this->dana_model->hapus_data($id_dana);
 		redirect(site_url('index.php/dana'));
 	}

 	function update($id_dana)
 	{
 		$dana=$this->dana_model->ambil_data_id($id_dana);
 		$data=array(
 			'aksi' => site_url('index.php/dana/update_aksi'),
 			'jumlah' => set_value('jumlah',$dana->jumlah),
 			'tanggal' => set_value('tanggal',$dana->tanggal),
 			'id_dana' => set_value('id_dana',$dana->id_dana),
 			'button' => 'edit'

 		);

 		$this->load->view('dana/dana_form',$data);
 		
 	}

 	function update_aksi()
 	{
 		$data=array(
 			'jumlah' => $this->input->post('jumlah'),
 			'tanggal' => $this->input->post('tanggal'),
 			
 			
 		);
 		$id_dana=$this->input->post('id_dana');

 		$this->dana_model->edit_data($id_dana,$data);
 		redirect(site_url('index.php/dana
 			'));
 	}


 }

 ?>