<?php 
 /**
 * 
 */
 class user extends CI_Controller
 {
 	
 	function __construct()
 	{
 		parent::__construct();
 		$this->load->model('user_model');
 		date_default_timezone_set('asia/jakarta');
 	}


 	function index()
 	{
 		//print_r($this->buku_model->ambil_data());
 		$data['user']=$this->user_model->ambil_data();
 		$this->load->view('data_user',$data);

 	}

 	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('index.php/user/tambah_aksi'),
 			'nama_user' => set_value('nama_user'),
 			'username_user' => set_value('username_user'),
 			'password_user' => set_value('password_user'),
 			'id_user' => set_value('id_user'),
 			'button' => 'Tambah'

 		);
 		$this->load->view('user/user_form',$data);
 	}
 	function tambah_aksi()
 	{
 		$data=array(
 			'nama_user' => $this->input->post('nama_user'),
 			'username_user' => $this->input->post('username_user'),
 			'password_user' => $this->input->post('password_user'),
 			
 		);
 		$this->user_model->tambah_data($data);
 		redirect(site_url('index.php/user'));
 	}

 	function delete($id_user)
 	{
 		$this->user_model->hapus_data($id_user);
 		
 		redirect(site_url('index.php/user'));
 	}

 	function update($id_user)
 	{
 		$user=$this->user_model->ambil_data_id($id_user);
 		$data=array(
 			'aksi' => site_url('index.php/user/update_aksi'),
 			'nama_user' => set_value('nama_user',$user->nama_user),
 			'username_user' => set_value('username_user',$user->username_user),
 			'password_user' => set_value('password_user',$user->password_user),
 			'id_user' => set_value('id_user',$user->id_user),
 			'button' => 'edit'

 		);

 		$this->load->view('user/user_form',$data);
 		
 	}

 	function update_aksi()
 	{
 		$data=array(
 			'nama_user' => $this->input->post('nama_user'),
 			'username_user' => $this->input->post('username_user'),
 			'password_user' => $this->input->post('password_user'),
 			
 		);
 		$id_user=$this->input->post('id_user');

 		$this->user_model->edit_data($id_user,$data);
 		redirect(site_url('index.php/user
 			'));
 	}


 }

 ?>