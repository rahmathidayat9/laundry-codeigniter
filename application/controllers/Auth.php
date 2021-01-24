<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();	
		$this->load->library('form_validation');
		$this->load->model('M_Auth');
	}

	public function index()
	{
		guest();
		if ($this->form_validation->run($this->validateLogin()) == TRUE) {
			$this->M_Auth->doLogin();
		}else{
			$this->load->view('auth/login');
		}
	}

	protected function validateLogin()
	{
		$this->form_validation->set_rules('username','U','required',[
			'required' => 'Email harus diisi',
		]);
		$this->form_validation->set_rules('password','P','required',[
			'required' => 'Password harus diisi',
		]);
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Auth');
	}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */