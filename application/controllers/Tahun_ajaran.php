<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Tahun_ajaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Tahun Ajaran';
        $data['menu'] = 'master_data';
        $this->load->view('templates/header', $data);
        $this->load->view('tahun_ajaran/index', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Siswa.php and path \application\controllers\Siswa.php */
