<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Auth extends CI_Model {

	public function doLogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$user = $this->db->get_where('tb_user',['username' => $username])->row_array();

		if ($user) {
			if (password_verify($password,$user['password'])) {
				$this->session->set_userdata([
					'id_user' => $user['id'],
					'role'	  => $user['role'],
				]);
				redirect('User');
			}else{
				$this->session->set_flashdata('error','Password salah !');
				redirect('Auth');	
			}
		}else{
			$this->session->set_flashdata('error','Username tidak ditemukan !');
			redirect('Auth');
		}
	}

}

/* End of file M_Auth.php */
/* Location: ./application/models/M_Auth.php */