<?php
Class M_admin extends CI_Model
{

	function tampil_user(){
		return $this->db->get('users')->result();	
	}

	function tampil_airport(){
		$query = $this->db->query('SELECT * from airport A INNER JOIN destination B ON A.id_destination=B.id');
		return $query;
		// return $this->db->get('airport')->result();	
	}

	function tampil_rute(){
		$query = $this->db->query('SELECT A.id,A.depart_at,A.arrival,B.name as rute_from,C.name as maskapai,D.destination as mangkat,(select destination from destination where id=id_destination) as balike,A.price FROM rute A
		INNER JOIN airport B ON A.rute_from = B.id
		INNER JOIN transportation C ON A.id_transportation = C.id
		INNER JOIN destination D ON B.id_destination = D.id');
    	return $query;
    }

	function tampil_transportation(){
		return $this->db->get('transportation')->result();
	}

	function tampil_destination(){
		return $this->db->get('destination')->result();
	}

	function add_destination($data){
    $this->db->insert('destination', $data);
	}

	function add_transportation($data){
    $this->db->insert('transportation', $data);
	}

	function add_rute($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_destination($destination,$where){
		return $this->db->get_where($destination,$where);
	}

	function update_destination($id){
		$data = array('destination' =>$this->input->post('destination'));
		$this->db->where('id', $id);
		$this->db->update('destination', $data);
	}

	function hapus_destination($id){
		$this->db->where('id', $id);
		$this->db->delete('destination');
	}

	function hapus_user($id){
		$this->db->where('id', $id);
		$this->db->delete('users');
	}

	function hapus_rute($id){
		$this->db->where('id', $id);
		$this->db->delete('rute');
	}
}
?>