<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun extends CI_Controller {

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
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent::__construct();
		$this->load->library(array('form_validation'));
		$this->load->helper(array('url','form'));
        $this->load->model('m_account'); //call model
     }

     public function index()
     {
     	$this->load->view('akun/index');
     }

     public function login()
     {
          // Fungsi Login
         $valid = $this->form_validation;
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $valid->set_rules('username','Username','required');
         $valid->set_rules('password','Password','required');
 
         if($valid->run()) {
             $this->ndol_login->login($username,$password, base_url('akun'), base_url('akun/login'));
         }
         // End fungsi login
         $this->load->view('akun/login');
     }

     public function register()
     {
     	$this->form_validation->set_rules('name', 'NAME','required');
     	$this->form_validation->set_rules('username', 'USERNAME','required');
     	$this->form_validation->set_rules('email','EMAIL','required|valid_email');
     	$this->form_validation->set_rules('password','PASSWORD','required');
     	$this->form_validation->set_rules('password_conf','PASSWORD','required|matches[password]');
     	if($this->form_validation->run() == FALSE) {
     		$this->load->view('akun/register');
     	}else{

     		$data['nama']   =    $this->input->post('name');
     		$data['username'] =    $this->input->post('username');
     		$data['email']  =    $this->input->post('email');
     		$data['password'] =    md5($this->input->post('password'));
     		$this->m_account->daftar($data);

     		$pesan['message'] ="Pendaftaran berhasil";

     		$this->load->view('akun/success',$pesan);
     	}
     }

     public function logout()
     {
         $this->ndol_login->logout();
     }
 }