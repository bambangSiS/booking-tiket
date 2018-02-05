<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Airport extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');
	}

	public function index()
	{
		$data['airport']=$this->m_admin->tampil_airport();
		$this->load->view('admin/airport/airport',$data);
	}

	function add()
	{
		$this->load->view('admin/airport/add');
	}

	function add_airport()
	{
		$data['airport'] = $this->input->post('airport');
		$this->m_admin->add_airport($data,'airport');
		$this->load->view('admin/airport/add', $data);
		redirect('admin/airport','refresh');
	}

	function edit($id)
	{
		$where = array('id' => $id);
		$data['airport'] = $this->m_admin->edit_airport('airport',$where)->result();
		$this->load->view('admin/airport/edit',$data);
	}

	function update($id){
		$this->m_admin->update_airport($id);
		redirect('admin/airport','refresh');
	}

	function del($id)
	{
		$this->m_admin->hapus_airport($id);
		redirect('admin/airport','refresh');
	}

}

/* End of file airport.php */
/* Location: ./application/controllers/airport.php */