<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Redirect extends CI_Controller {

	public function forbiden()
	{
		$data = [
			'view' 	=> 'page/forbiden',
			'title' => 'Access Forbiden', 
		];

		$this->load->view('layout/content',$data);
	}

}

/* End of file Redirect.php */
/* Location: ./application/controllers/Redirect.php */