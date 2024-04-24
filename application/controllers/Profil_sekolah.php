<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_sekolah extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'Profil Sekolah';
        $data['menu'] = 'profil_sekolah';
        $this->load->view('templates/header', $data);
        $this->load->view('profil_sekolah/index', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Siswa.php and path \application\controllers\Siswa.php */
