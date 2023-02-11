<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class User_profil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = 'User Profil';
        $data['menu'] = 'user_profil';
        $this->load->view('templates/header', $data);
        $this->load->view('user_profil/index', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file UserProfil.php and path \application\controllers\UserProfil.php */
