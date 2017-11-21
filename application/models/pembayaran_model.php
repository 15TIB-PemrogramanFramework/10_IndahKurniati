<?php 

/**
* 
*/
class pembayaran_model extends CI_Model
{
	public $Ascen				= 'ASCEN';
	public $nama_tabel = 'pembayaran';
	public $id = 'id_pembayaran';
	public $id_nasabah = 'id_nasabah';
	


	public $tabeldana 			= 'dana';
	public $id_dana 			= 'id_dana';
	public $jumlah				= 'jumlah';

	public $order = 'ASC';
	public $desc = 'DESC';

	function __construct()
	{
		parent::__construct();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id,$this->order);
		return $this->db->get($this->nama_tabel)->result();
	}	

	function hapus_data($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->delete($this->nama_tabel);
	}

	function tambah_data($data)//array
	{
		return $this->db->insert($this->nama_tabel,$data);
	}

	function edit_data($id_pembayaran,$data)
	{
		$this->db->where($this->id,$id_pembayaran);
		return $this->db->update($this->nama_tabel,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_tabel)->row();//1 data
	}

	function ambil_data_idpesanan($id_nasabah)
	{	
		 $this->db->where ( 'id_nasabah', $id_nasabahr);
		return $this->db->get($this->nama_tabel)->result();//1 data
	}
function selectdana(){
		$this->db->order_by($this->id_dana, $this->Ascen);
		return $this->db->get($this->table_dana)->result();
	}

	

}


 ?>
