<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Owner extends CI_Controller {
	
		public function index()
		{
			$data = [
				'view'  => 'owner/index',
				'title' => 'Owner',
			];

			$this->load->view('layout/content',$data);
		}
	
	}
	
	/* End of file Owner.php */
	/* Location: ./application/controllers/Owner.php */	