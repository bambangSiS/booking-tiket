<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Members extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('m_admin');
		$this->m_admin->sesiku();
	}

	public function index()
	{
		$data['users']=$this->m_admin->tampil_user();
		$this->load->view('admin/member/member',$data);
	}

	public function hapus_user($id)
	{
		$this->m_admin->hapus_user($id);
		redirect('admin/member/member','refresh');
	}

}

/* End of file penjualan.php */
/* Location: ./application/controllers/penjualan.php */