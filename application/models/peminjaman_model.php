<?php 

/**
* 
*/
class peminjaman_model extends CI_Model
{
	public $Ascen				= 'ASCEN';

	public $nama_tabel 			= 'peminjaman';
	public $id 					= 'id_peminjaman';
	public $id_nasabah 			= 'id_nasabah';


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

	function ambil_data_idmember($id_member)
	{

		$this->db->where($this->id_nasabah,$id_nasabah);
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

	function edit_data($id_peminjaman,$data)
	{
		$this->db->where($this->id,$id_peminjaman);
		return $this->db->update($this->nama_tabel,$data);
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		return $this->db->get($this->nama_tabel)->row();//1 data
	}


	function ambil_data_id_pesanan_akhir()
	{	
		$this->db->order_by($this->id,$this->desc);
		return $this->db->get($this->nama_tabel)->row();
	}	

	function selectdana(){
		$this->db->order_by($this->id_dana, $this->Ascen);
		return $this->db->get($this->tabeldana)->result();
	}


function tampil_data_pinjam(){
		$this->db->select('p.*, l.jumlah');
 		$this->db->from('peminjaman p');
 		$this->db->join('dana l ','l.id_dana = p.id_dana');
 		
 		$this->db->distinct();
 		$hasil=$this->db->get()->result();
                 
                 return $hasil;
	}
}

function selectdana(){
		$this->db->order_by($this->id_dana, $this->Ascen);
		return $this->db->get($this->table_dana)->result();
	}

 ?>