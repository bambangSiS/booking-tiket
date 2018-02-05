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

	function add()
	{
		$this->load->view('admin/destination/add');
	}

	function add_destination()
	{
		$data['destination'] = $this->input->post('destination');
		$this->m_admin->add_destination($data,'destination');
		$this->load->view('admin/destination/add', $data);
		redirect('admin/destinations','refresh');
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['destination'] = $this->m_admin->edit_destination('destination',$where)->result();
		$this->load->view('admin/destination/edit',$data);
	}

	function update($id){
		$this->m_admin->update_destination($id);
		redirect('admin/destinations','refresh');
	}

	function del($id)
	{
		$this->m_admin->hapus_destination($id);
		$this->session->set_flashdata('notif','<div class="alert alert-success" role="alert"> Data Berhasil diubah <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('admin/destinations','refresh');
	}

}

/* End of file dashboard.php */
/* Location: ./application/controllers/dashboard.php */