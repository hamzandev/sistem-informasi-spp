<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        if ($this->session->has_userdata('is_login') == false) {
            redirect('auth');
        }

        if ($this->session->userdata('user_level') != 'admin') {
            redirect('dashboard');
        }
        $this->load->library('form_validation');
        $this->load->model('Petugas_model');
    }

    public function index()
    {
        $data['title'] = 'Petugas';
        $data['menu'] = 'master_data';
        $data['petugas'] = $this->Petugas_model->getAll();

        $this->form_validation->set_rules('nama_petugas', 'Nama Petugas', 'required|min_length[3]', [
            'required' => 'Nama Petugas harus diisi!',
            'max_length' => 'Pastikan anda menginput nama yang benar!',
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[6]|is_unique[tb_petugas.username]', [
            'required' => 'Nama Petugas harus diisi!',
            'is_unique' => 'Username sudah terdaftar. Gunakan username lain!',
            'max_length' => 'Panjang username minimal 6 karakter!',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]', [
            'required' => 'Password harus diisi!',
            'max_length' => 'Panjang password minimal 6 karakter!',
        ]);
        $this->form_validation->set_rules('level', 'Level', 'required', [
            'required' => 'Silahkan pilih Level!',
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view('templates/header', $data);
            $this->load->view('petugas/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'username' => $this->input->post('username'),
                'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                'nama_petugas' => $this->input->post('nama_petugas'),
                'level' => $this->input->post('level'),
            ];

            $this->Petugas_model->insert($data);
            redirect('petugas');
        }

    }

    public function edit($id)
    {
        $data['title'] = 'Petugas';
        $data['menu'] = 'master_data';
        $data['petugas'] = $this->Petugas_model->getById($id);


        
        $this->form_validation->set_rules('nama_petugas', 'Nama Petugas', 'required|min_length[3]', [
            'required' => 'Nama Petugas harus diisi!',
            'max_length' => 'Pastikan anda menginput nama yang benar!',
        ]);
        $this->form_validation->set_rules('username', 'Username', 'required|min_length[6]', [
            'required' => 'Nama Petugas harus diisi!',
            'max_length' => 'Panjang username minimal 6 karakter!',
        ]);
        $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]', [
            'required' => 'Password harus diisi!',
            'max_length' => 'Panjang password minimal 6 karakter!',
        ]);
        $this->form_validation->set_rules('level', 'Level', 'required', [
            'required' => 'Silahkan pilih Level!',
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view('templates/header', $data);
            $this->load->view('petugas/edit', $data);
            $this->load->view('templates/footer');
        } else {
            if (!$this->input->post('password_baru')) {
                $data['password'] = $this->input->post('password');
            } else {
                $data['password'] = password_hash($this->input->post('password_baru'), PASSWORD_DEFAULT);
            }
            $data = [
                'username' => $this->input->post('username'),
                'nama_petugas' => $this->input->post('nama_petugas'),
                'level' => $this->input->post('level'),
            ];

            $id_petugas = $this->input->post('id_petugas');

            // var_dump($data); die;
            $this->Petugas_model->update(data: $data, idPetugas: $id_petugas);
            redirect('petugas');
        }

    }

    public function hapus($id)
    {
        $this->Petugas_model->delete($id);
        redirect('petugas');
    }
}

/* End of file Siswa.php and path \application\controllers\Siswa.php */
