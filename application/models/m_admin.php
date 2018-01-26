<?php
Class M_admin extends CI_Model
{

	function tampil_user()
	{
		return $this->db->get('users')->result();	
	}

	function hapus_user($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('users');
	}

	function tampil_destination()
	{
		return $this->db->get('destination')->result();
	}

	function tambah_destination()
	{
		
	}
}
?>