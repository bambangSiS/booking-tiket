<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rute extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('m_admin');

	}

	function index(){
		$data['rute'] = $this->m_admin->tampil_rute()->result();
		$this->load->view('admin/rute/rute',$data);
	}

	function add(){
		$data['transportation']=$this->m_admin->tampil_transportation();
		$data['destination']=$this->m_admin->tampil_destination();
		$data['rute'] = $this->m_admin->tampil_rute()->result();
		$this->load->view('admin/rute/add',$data);
	}

	function add_rute(){
		$id = $this->input->post('id');
		$id_transportation = $this->input->post('id_transportation');
		$rute_from = $this->input->post('rute_from');
		$rute_to = $this->input->post('rute_to');
		$depart_at = $this->input->post('depart_at');
		$arrival = $this->input->post('arrival');
		$price = $this->input->post('price');

		$data = array(
			'id' => $id,
			'id_transportation' => $id_transportation,
			'rute_from' => $rute_from,
			'rute_to' => $rute_to,
			'depart_at' => $depart_at,
			'arrival' => $arrival,
			'price' => $price,
			);
		$this->m_admin->add_rute($data,'rute');
		redirect('admin/rute');
	}

	function del($id){
		$this->m_admin->hapus_rute($id);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/rute','refresh');
	}

}