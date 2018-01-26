<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Destinations extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function index()
	{
		$data['destination']=$this->m_admin->tampil_destination();
		$this->load->view('admin/destination/destination',$data);
	}

	public function add()
	{
		$data['destination']=$this->m_admin->tambah_destination();
		$this->load->view('admin/destination/add', $data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */