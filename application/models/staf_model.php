<?php 
/**
* 

*/
class staf_model extends CI_Model
{

	public $nama_table 	= 'staf';
	public $id_staf 	= 'id_staf';
	public $order		= 'ASC';
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('staf_model');
	}

	function ambil_data()
	{
		$this->db->order_by($this->id_staf,$this->order);
		return $this->db->get($this->nama_table)->result();
	}

	

	function ambil_data_id($id_staf)
	{
		$this->db->where($this->id_staf,$id_staf);
		return $this->db->get($this->nama_table)->row();
	}


	function tambah_data($data)
	{
		return $this->db->insert($this->nama_table,$data);
	
	}

	function hapus_data($id_staf)
	{
		$this->db->where($this->id_staf,$id_staf);
		return $this->db->delete($this->nama_table);
	
	}

	function edit_data($id_staf,$data)
	{
		$this->db->where($this->id_staf,$id_staf);
		return $this->db->update($this->nama_table,$data);
	}

	
}
 ?>