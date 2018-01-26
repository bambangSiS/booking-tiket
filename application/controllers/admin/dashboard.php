<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->model('m_admin');
		$data['destination']=$this->m_admin->tampil_destination();
		$this->load->view('admin/destination/destination',$data);
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */