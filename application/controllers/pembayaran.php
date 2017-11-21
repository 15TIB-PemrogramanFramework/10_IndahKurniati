<?php 

/**
* 
*/
class pembayaran extends CI_Controller
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
		$data['pembayaran'] = $this-> pembayaran_model->ambil_data();
		$this->load->view('data_pembayaran',$data);
	}
	function delete($id)
	{
		$this->pembayaran_model->hapus_data($id);
		redirect(site_url('pembayaran'));
	}

	function tambah()
 	{
 		$data=array(
 			'aksi' => site_url('index.php/pembayaran/tambah_aksi'),
 			 'jumlah_pinjaman' =>set_value('jumlah_pinjaman'),
 			'nama_nasabah' => set_value('nama_nasabah'),
 			'bayar_angsuran' => set_value('bayar_angsuran'),
 			'angsuran_ke' => set_value('angsuran_ke'),
 			'id_pembayaran' => set_value('id_pembayaran'),
 			'button' => 'Tambah'

 		);
 		$this->load->view('pembayaran/pembayaran_form',$data);
 	}

 	function tambah_aksi()
 	{
 		$data=array(
 			'jumlah_pinjaman' => $this->input->post('jumlah_pinjaman'),
 			'bayar_angsuran' => $this->input->post('bayar_angsuran'),
 			'nama_nasabah' => $this->input->post('nama_nasabah'),
 			
 			'angsuran_ke' => $this->input->post('angsuran_ke')
 		);
 		$this->pembayaran_model->tambah_data($data);
 		redirect(site_url('index.php/pembayaran'));
 	}

	function update($id)
	{
		$pembayaran = $this->pembayaran_model->ambil_data_id($id);
		$data = array(
			'aksi' 							=> site_url('index.php/pembayaran/update_aksi'),
			'id_pembayaran' 				=> set_value('id_pembayaran',$pembayaran->id_pembayaran),
			'nama_nasabah' 					=> set_value('nama_nasabah',$pembayaran->nama_nasabah),
			'jumlah_pinjaman' 				=> set_value('jumlah_pinjaman',$pembayaran->jumlah_pinjaman),
			'bayar_angsuran' 				=> set_value('bayar_angsuran',$pembayaran->bayar_angsuran),
			 
			'angsuran_ke' 					=> set_value('angsuran_ke',$pembayaran->angsuran_ke),
			'button' 						=> 'Edit'
			);

		$this->load->view('pembayaran/pembayaran_form',$data);		
	}

	function update_aksi()
	{
		$data = array(
			'id_pembayaran' 				=> $this->input->post('id_pembayaran'),
			'nama_nasabah' 					=> $this->input->post('nama_nasabah'),
			'jumlah_pinjaman' 				=> $this->input->post('jumlah_pinjaman'),	
			'bayar_angsuran' 				=> $this->input->post('bayar_angsuran'),
			'angsuran_ke' 					=> $this->input->post('angsuran_ke'),
			);	

		$id_pembayaran = $this->input->post('id_pembayaran');
		$this->pembayaran_model->edit_data($id_pembayaran,$data);
		redirect(site_url('index.php/welcome/data_pembayaran_admin'));
	}
	function pembayaran_id()
	{
		$id_nasabah = $this->session->userdata('id_nasabah');
		$data['pembayaran'] = $this-> pembayaran_model->ambil_data_idnasabah($id_nasabah);
		$this->load->view('data_nasabah',$data);
	}
		


}


 ?>

