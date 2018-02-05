  <?php
  defined('BASEPATH') OR exit('No direct script access allowed');

  class M_account extends CI_Model{

  	function daftar($data)
  	{
  		$this->db->insert('users',$data);
  	}

    function rute(){
      $this->db->select('rute_from,rute_to');
      $this->db->distinct('rute_from,rute_to');
      return $this->db->get('rute')->result();
    }

    function destination(){
      return $this->db->get('destination')->result();
    }

  	function cari(){
  		$this->db->where('rute_from', $this->input->get('rute_from'));
  		$this->db->where('rute_to', $this->input->get('rute_to'));
  		$this->db->like('depart_at', $this->input->get('depart_at'));
  		return $this->db->get('rute')->result();
  	}
  }