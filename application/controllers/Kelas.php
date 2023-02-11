<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelas extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Kelas_model');
        $this->load->model('Kompetensi_keahlian_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['kelas'] = $this->Kelas_model->getAllWithJoin();
        $data['jurusan'] = $this->Kompetensi_keahlian_model->getAll();
        $data['title'] = 'Kelas';
        $data['menu'] = 'master_data';

        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required', [
            'required' => 'Kelas harus diisi!'
        ]);
        $this->form_validation->set_rules('id_komp_keahlian', 'ID Komp Keahlian', 'required|is_natural_no_zero', [
            'required' => 'Kelas harus diisi!',
            'is_natural_no_zero' => 'Silahkan pilih Kompetensi Keahlian'
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view('templates/header', $data);
            $this->load->view('kelas/index', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_kelas' => $this->input->post('nama_kelas'),
                'id_komp_keahlian' => $this->input->post('id_komp_keahlian'),
            ];

            $this->kelas_model->insert($data);
            redirect('kelas');
        }

    }

    public function edit($id)
    {
        $data['jurusan'] = $this->Kompetensi_keahlian_model->getAll();
        $data['kelas'] = $this->Kelas_model->getById($id);
        $data['title'] = 'Kelas';
        $data['menu'] = 'master_data';

        $this->form_validation->set_rules('nama_kelas', 'Nama Kelas', 'required', [
            'required' => 'Kelas harus diisi!'
        ]);
        $this->form_validation->set_rules('id_komp_keahlian', 'ID Komp Keahlian', 'required|is_natural_no_zero', [
            'required' => 'Kelas harus diisi!',
            'is_natural_no_zero' => 'Silahkan pilih Kompetensi Keahlian'
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view('templates/header', $data);
            $this->load->view('kelas/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_kelas' => $this->input->post('nama_kelas'),
                'id_komp_keahlian' => $this->input->post('id_komp_keahlian'),
            ];

            $this->Kelas_model->update(data: $data, id: $id);
            redirect('kelas');
        }

    }
   
   
}

/* End of file Siswa.php and path \application\controllers\Siswa.php */
