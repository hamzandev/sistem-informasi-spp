<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if ($this->session->has_userdata('is_login') == false) {
			redirect('auth');
		}
	}

	
	public function index()
	{
		$data['title'] = 'Dashboard';
		$data['menu'] = 'dashboard';
		$this->load->view('templates/header', $data);
		$this->load->view('dashboard/index', $data);
		$this->load->view('templates/footer');
	}


	public function logout()
    {
        // unset($_SESSION);
		$this->session->unset_userdata('is_login');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('user_name');
		$this->session->unset_userdata('user_id');
		$this->session->unset_userdata('user_level');
		session_destroy();
        redirect('auth');
    }
}
