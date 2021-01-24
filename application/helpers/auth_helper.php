<?php 

function auth()
{
	$ci = get_instance();

	if (!$ci->session->userdata('id_user')) {
		redirect('Auth');
	}
}

function guest()
{
	$ci = get_instance();

	if ($ci->session->userdata('id_user')) {
		redirect('User');
	}	
}

function user()
{
	$ci = get_instance();

	return $ci->db->get_where('tb_user',['id' => $ci->session->userdata('id_user')])->row();
}

function authorize($role)
{
	$ci = get_instance(); 

	if ($role != user()->role){
		redirect('Redirect/forbiden');
	}
}