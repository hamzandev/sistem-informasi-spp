<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class History extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('History_model');
    }

    public function index()
    {
        $data['title'] = 'History';
        $data['menu'] = 'history';
        
        if ($this->input->get('nisn')) {
            $data['history'] = $this->History_model->getByPetugasAndNisn(
                idPetugas: $this->session->userdata('user_id'),
                nisn:  $this->input->get('nisn')
            );
        } else {
            if ($this->session->userdata('user_level') == 'admin') {
                $data['history'] = $this->History_model->getAll();   
            } else if ($this->session->userdata('user_level') == 'petugas') {
                $data['history'] = $this->History_model->getByPetugas($this->session->userdata('user_id'));
            } else {
                $data['history'] = $this->History_model->getByNisn($this->session->userdata('nisn'));
            }
        }
        $this->load->view('templates/header', $data);
        $this->load->view('history/index', $data);
        $this->load->view('templates/footer');
    }
}

/* End of file Siswa.php and path \application\controllers\Siswa.php */
