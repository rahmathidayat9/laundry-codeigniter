<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		auth();
		authorize(['admin']);
	}

	public function index()
	{
		$data = [
			'view' 	=> 'admin/index',
			'title' => 'Dashboard', 
		];

		$this->load->view('layout/content',$data);
	}

}

/* End of file Admin.php */
/* Location: ./application/controllers/Admin.php */