<?php 
 /**
 * 
 */
 class staf extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('staf_model');
 		date_default_timezone_set('asia/jakarta');
 	}


 	function index()
 	{
 		
 		$data['staf']=$this->staf_model->ambil_data();
 		$this->load->view('data_staf',$data);

 	}

 	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('index.php/staf/tambah_aksi'),
 			'nama_staf' => set_value('nama_staf'),
 			'alamat_staf' => set_value('alamat_staf'),
 			'nohp_staf' => set_value('nohp_staf'),
 			'jabatan_staf' => set_value('jabatan_staf'),
 			
 			'id_staf' => set_value('id_staf'),
 			'button' => 'Tambah'

 		);
 		$this->load->view('staf/staf_form',$data);
 	}

 	function tambah_aksi()
 	{
 		$data=array(
 			'nama_staf' => $this->input->post('nama_staf'),
 			'alamat_staf' => $this->input->post('alamat_staf'),
 			'nohp_staf' => $this->input->post('nohp_staf'),
 			'jabatan_staf' => $this->input->post('jabatan_staf'),
 			
 		);
 		$this->staf_model->tambah_data($data);
 		redirect(site_url('index.php/staf'));
 	}

 	function delete($id_staf)
 	{
 		$this->staf_model->hapus_data($id_staf);
 		redirect(site_url('index.php/staf'));
 	}

 	function update($id_staf)
 	{
 		$staf=$this->staf_model->ambil_data_id($id_staf);
 		$data=array(
 			'aksi' => site_url('index.php/staf/update_aksi'),
 			'nama_staf' => set_value('nama_staf',$staf->nama_staf),
 			'alamat_staf' => set_value('alamat_staf',$staf->alamat_staf),
 			'nohp_staf' => set_value('nohp_staf',$staf->nohp_staf),
 			'jabatan_staf' => set_value('jabatan_staf',$staf->jabatan_staf),
 			
 			'id_staf' => set_value('id_staf',$staf->id_staf),
 			'button' => 'edit'

 		);

 		$this->load->view('staf/staf_form',$data);
 		
 	}

 	function update_aksi()
 	{
 		$data=array(
 			'nama_staf' => $this->input->post('nama_staf'),
 			'alamat_staf' => $this->input->post('alamat_staf'),
 			'nohp_staf' => $this->input->post('nohp_staf'),
 			'jabatan_staf' => $this->input->post('jabatan_staf'),
 			
 		);
 		$id_staf=$this->input->post('id_staf');

 		$this->staf_model->edit_data($id_staf,$data);
 		redirect(site_url('index.php/staf
 			'));
 	}


 }

 ?>