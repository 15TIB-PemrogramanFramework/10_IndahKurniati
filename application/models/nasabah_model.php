<?php 
/**
* 

*/
class nasabah_model extends CI_Model
{

	public $nama_table 	= 'nasabah';
	public $id_nasabah 	= 'id_nasabah';
	public $order		= 'ASC';
	public $username	= 'username';
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('nasabah_model');
		
	}


	function tambahAkun($nasabah){
		$this->db->insert($this->nama_table, $nasabah);
	}

	function cek_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->nama_table)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id_nasabah,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	
	function ambil_data_id($id_nasabah)
	{
		$this->db->where($this->id_nasabah,$id_nasabah);
		return $this->db->get($this->nama_table)->row();
	}


	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table,$data);
	
	}

	function hapus_data($id_nasabah)
	{
		$this->db->where($this->id_nasabah,$id_nasabah);
		return $this->db->delete($this->nama_table);
	
	}

	function edit_data($id_nasabah,$data)
	{
		$this->db->where($this->id_nasabah,$id_nasabah);
		return $this->db->update($this->nama_table,$data);
	}
 


	function cek_login_nasabah($table, $data_login){
		return $this->db->get_where($table, $data_login);
	}


function ambil_data_username($username_nasabah)
	{
		$this->db->where('username_nasabah',$username_nasabah);
		return $this->db->get($this->nama_tabel)->row();//1 data
	}

	
}
 ?>