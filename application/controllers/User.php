<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		auth();
	}

	public function index()
	{
		$data = [
			'view' 	=> 'user/index',
			'title' => 'Dashboard', 
		];

		$this->load->view('layout/content',$data);
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */