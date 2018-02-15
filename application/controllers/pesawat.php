<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesawat extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 * github.com/ondol95
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function index(){
	}

	public function cari()
	{
		$rute_from = $this->input->get('rute_from');
		$rute_to = $this->input->get('rute_to');
		$depart_at = $this->input->get('depart_at');
		$seat_qty = $this->input->get('seat_qty');

    	$data['rute']=$this->m_account->cari($rute_from,$rute_to,$depart_at,$seat_qty)->result();
    	$data['seat_qty']=$seat_qty;
    	$this->load->view('cari', $data,$seat_qty);
	}

	function booking()
	{
		$id=$this->input->get('id');
		$seat_qty=$this->input->get('seat_qty');

		$data['user']=$this->m_account->getuser($this->session->userdata('id'));
		$data['rute']=$this->m_account->booking($id)->result();
		$data['seat_qty']=$seat_qty;
		$this->load->view('booking',$data);	
	}

	function add_booking(){
		$id = $this->input->post('id');
		$id_users = $this->input->post('id_users');
		$name = $this->input->post('name');
		$noid = $this->input->post('noid');

		$data = array(
			'id' => $id,
			'id_users' => $id_users,
			'name' => $name,
			'noid' => $noid,
		);
		$this->m_account->add_booking($data,'customer');
	}
}
