<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kasir extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		auth();
		authorize(['kasir']);
	}

	public function index()
	{
		$data = [
			'view'  => 'kasir/index',
			'title' => 'Dashboard Kasir',
		];	

		$this->load->view('layout/content',$data);
	}

}

/* End of file Kasir.php */
/* Location: ./application/controllers/Kasir.php */