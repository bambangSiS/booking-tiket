<?php
Class M_admin extends CI_Model
{

	function sesiku(){
		$this->session->set_flashdata('alert', '<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                
                Login Pak
              </div>');
		if($this->session->status != "online"){
			redirect('admin/login','refresh');
		}
	}

	function tampil_user(){
		return $this->db->get('users')->result();	
	}

	function tampil_airport($id=''){
		if($id!=''){
			$where = ' AND A.id = "'.$id.'"';
		} else {
			$where = '';
		}
		$query = $this->db->query('SELECT A.id,A.name,A.iso, B.destination,B.id as idkota FROM airport A,destination B WHERE A.id_destination=B.id' . $where);
		return $query;
		// return $this->db->get('airport')->result();	
	}

	function get_airport($id=''){
		if($id!=''){
			$where = ' AND id_destination = "'.$id.'"';
		} else {
			$where = '';
		}
		$query = $this->db->query('SELECT * FROM airport WHERE 1=1 ' . $where);
		return $query;
	}

	function tampil_rute($id=''){
		if($id!=''){
			$where = ' AND A.id = "'.$id.'"';
		} else {
			$where = '';
		}
		$query= $this->db->query('SELECT A.*,B.name as maskapai FROM rute A, transportation B WHERE A.id_transportation=B.id '.$where.' ORDER BY creat_date DESC');
    	return $query->result();

		$hasilquery=$this->db->get('rute',$config['per_page'],$this->uri->segment(3));
		if ($hasilquery->num_rows()>0) {
			foreach ($hasilquery->result() as $value) {
				$data[]=$value;
			}
			return $data;
		}
		
    }

	function tampil_transportation(){
		return $this->db->get('transportation')->result();
	}

	function tampil_destination(){
		// $hasilquery=$this->db->get('destination',$config['per_page'],$this->uri->segment(3));
		// if ($hasilquery->num_rows()>0) {
		// 	foreach ($hasilquery->result() as $value) {
		// 		$data[]=$value;
		// 	}
		// 	return $data;
		// }
		// $jumlahbandara->$this->db->query('SELECT COUNT(name) FROM airport,destination WHERE airport.id_destination=4 AND destination.id=4');

		return $this->db->get('destination')->result();
	}

	function add_destination($data){
    $this->db->insert('destination', $data);
	}

	function add_transportation($data){
    $this->db->insert('transportation', $data);
	}

	function add_airport($data){
    $this->db->insert('airport', $data);
	}

	function add_rute($data,$table){
		$this->db->insert($table,$data);
	}

	function edit_destination($destination,$where){
		return $this->db->get_where($destination,$where);
	}


	function edit_airport($id){
		$this->db->where('id', $id);
		return $this->db->get('airport',$id);
		// return $this->db->get_where($id);
	}

	function edit_transportation($table,$id){
		$this->db->where('id', $id);
		return $this->db->get($table,$id);
	}

	function update_destination($id){
		$data = array('destination' =>$this->input->post('destination'));
		$this->db->where('id', $id);
		$this->db->update('destination', $data);
	}

	function update_rute($id,$data){
		$this->db->where('id', $id);
		$this->db->update('rute', $data);
	}

	function update_transportation($id,$data){
		$this->db->where('id', $id);
		$this->db->update('transportation', $data);
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

	function hapus_transportation($id){
		$this->db->where('id', $id);
		$this->db->delete('transportation');
	}

	function hapus_airport($id){
		$this->db->where('id', $id);
		$this->db->delete('airport');
	}
}
?>