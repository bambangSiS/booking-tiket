	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class M_account extends CI_Model{

		function jml_seat(){
			return $this->db->query('SELECT T.id,T.seat_qty FROM transportation T JOIN rute R WHERE R.id_transportation=1')->result();
		}
		
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

		function transportation(){
			return $this->db->get('transportation')->result();
		}

		function cari($rute_from,$rute_to,$depart_at,$seat_qty){
			// return $this->db->query('SELECT * FROM `rute` 
			//   INNER JOIN airport dari ON rute.rute_from=dari.id
			//   INNER JOIN airport ke ON rute.rute_to=ke.id');
			return $this->db->query('SELECT T.code,T.img,T.name as maskapai,rute.id,rute.depart_at,rute.arrival,dari.name as bandarafrom,dari.iso as isofrom,ke.iso as isoto,ke.name as bandarato,darikota.destination as darikota,kekota.destination as kekota, darikota.iso as dariiso,kekota.iso as keiso,price,T.seat_qty
				FROM `rute` 
				INNER JOIN airport dari ON rute.rute_from=dari.id
				INNER JOIN airport ke ON rute.rute_to=ke.id
				INNER JOIN destination darikota ON darikota.id=dari.id_destination
				INNER JOIN destination kekota ON kekota.id=ke.id_destination
				INNER JOIN transportation T On T.id=rute.id_transportation
				WHERE darikota.iso="'.$rute_from.'" AND kekota.iso="'.$rute_to.'" AND depart_at LIKE "'.$depart_at.'%" AND T.seat_qty-(SELECT COUNT(*) FROM reservation WHERE rute_id=rute.id)>='.$seat_qty.'');
		}

		function booking($id){
			return $this->db->query('SELECT T.img,T.name as maskapai,rute.id,rute.depart_at,rute.arrival,dari.name as bandarafrom,dari.iso as isofrom,ke.iso as isoto,ke.name as bandarato,darikota.destination as darikota,kekota.destination as kekota, darikota.iso as dariiso,kekota.iso as keiso,price,T.seat_qty
				FROM `rute` 
				INNER JOIN airport dari ON rute.rute_from=dari.id
				INNER JOIN airport ke ON rute.rute_to=ke.id
				INNER JOIN destination darikota ON darikota.id=dari.id_destination
				INNER JOIN destination kekota ON kekota.id=ke.id_destination
				INNER JOIN transportation T On T.id=rute.id_transportation
				
				WHERE rute.id='.$id.'');
		}

		function add_booking($table, $data){
			$this->db->set($data);
			$this->db->insert($table);
		}

		function getuser($id){
			return $this->db->query('SELECT * FROM users where id = "'.$id.'"')->result();
		}
	}