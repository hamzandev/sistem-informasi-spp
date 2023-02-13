<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        if ($this->session->has_userdata('is_login') == false) {
            redirect('auth');
        }

        if ($this->session->userdata('user_level') != 'admin') {
            redirect('dashboard');
        }
    }

    public function index()
    {
        $data['title'] = 'Laporan';
        $data['menu'] = 'laporan';
        $this->load->view('templates/header', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Siswa.php and path \application\controllers\Siswa.php */
