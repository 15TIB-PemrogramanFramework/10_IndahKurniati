<?php 
/**
* 

*/
class dana_model extends CI_Model
{

	public $nama_table 	= 'dana';
	public $id_dana 	= 'id_dana';
	public $order		= 'ASC';
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('dana_model');
	}

	function ambil_data()
	{
		$this->db->order_by($this->id_dana,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	

	function ambil_data_id($id_dana)
	{
		$this->db->where($this->id_dana,$id_dana);
		return $this->db->get($this->nama_table)->row();
	}


	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table,$data);
	
	}

	function hapus_data($id_dana)
	{
		$this->db->where($this->id_dana,$id_dana);
		return $this->db->delete($this->nama_table);
	
	}

	function edit_data($id_dana,$data)
	{
		$this->db->where($this->id_dana,$id_dana);
		return $this->db->update($this->nama_table,$data);
	}

	
}
 ?>