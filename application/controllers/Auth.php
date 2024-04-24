<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Petugas_model');
        $this->load->model('Siswa_model');
        if ($this->session->has_userdata('is_login') == true) {
			redirect('dashboard');
		}
    }

    public function index()
    {
        $data['title'] = 'Login';

        $this->form_validation->set_rules('username', 'Username', 'required|min_length[6]', [
            'required' => 'Silakan isi kolom Username!',
            'min_length' => 'Panjang username minimal 6 karakter!',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]', [
            'required' => 'Silakan isi kolom Password!',
            'min_length' => 'Panjang password minimal 6 karakter!',
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view('auth_templates/header', $data);
            $this->load->view('auth/index', $data);
            $this->load->view('auth_templates/footer');
        } else {
            // cek jenis identifier
            if (is_numeric($this->input->post('username'))) {
                // cek NISN is exsist
                $cek = $this->Siswa_model->getByNisn($this->input->post('username'));
            } else {
                // cek username is exsist
                $cek = $this->Petugas_model->getByUsername($this->input->post('username'));
            }

            if (!$cek) {
                $this->session->set_flashdata('message', '<div class="alert alert-sm alert-danger">Username / NISN belum terdaftar!</div>');
                redirect('auth');
            } else {
                // cek validasi password
                if (password_verify($this->input->post('password', true), $cek?->password)) {
                    $this->session->set_userdata([
                        'is_login' => true,
                        'username' => $cek->username,
                        'user_id' => $cek->id_petugas,
                        'user_name' => $cek->nama_petugas,
                        'user_level' => $cek->level,
                        'nisn' => $cek->nisn,
                        'nama_siswa' => $cek->nama,
                    ]);
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('message', '<div class="alert alert-sm alert-danger">Password salah!</div>');
                    redirect('auth');
                }
            }
        }
        
    }

}

/* End of file Auth.php and path \application\controllers\Auth.php */
