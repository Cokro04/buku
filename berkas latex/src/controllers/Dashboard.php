<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	public function index()
	{
		if ($this->session->userdata('user_level') === 'admin') {
			$data['_view'] = 'dashboard';
			$this->load->view('layouts/main', $data);
		} elseif ($this->session->userdata('user_level') === 'user') {
			$data['_view'] = 'dashboard';
			$this->load->view('layouts/main', $data);
		} else {
			echo "Access Denied";
			redirect('login/index');
		}
	}
}
