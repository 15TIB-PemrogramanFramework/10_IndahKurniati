<?php 
/**
* 

*/
class user_model extends CI_Model
{

	public $user 		= 'user';
	public $id_user 	= 'id_user';
	public $order		= 'ASC';
	public $username	= 'username';
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
		
	}


	function cek_login($username,$password)
	{
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		return $this->db->get($this->user)->row();
	}

	function ambil_data()
	{
		$this->db->order_by($this->id_user,$this->order);
		return $this->db->get($this->user)->result();
	}

	
	function ambil_data_id($id_user)
	{
		$this->db->where($this->id_user,$id_user);
		return $this->db->get($this->user)->row();
	}


	function tambah_data($data)
	{
		return $this->db->insert($this->user,$data);
	
	}

	function hapus_data($id_user)
	{
		$this->db->where($this->id_user,$id_user);
		return $this->db->delete($this->user);
	
	}

	function edit_data($id_user,$data)
	{
		$this->db->where($this->id_user,$id_user);
		return $this->db->update($this->user,$data);
	}
	

	
}
 ?>