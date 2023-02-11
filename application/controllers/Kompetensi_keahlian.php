<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Kompetensi_keahlian extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Kompetensi_keahlian_model');
    }

    public function index()
    {
        $data['title'] = 'Kompetensi Keahlian';
        $data['menu'] = 'master_data';
        $this->load->view('templates/header', $data);
        $this->load->view('kompetensi_keahlian/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data = [
            'nama_keahlian' => $this->input->post('nama_keahlian'),
            'keterangan_keahlian' => $this->input->post('keterangan_keahlian'),
        ];
        $this->Kompetensi_keahlian_model->insert($data);
        redirect('kelas');
    }

    public function hapus($id)
    {
        $this->Kompetensi_keahlian_model->delete($id);
        redirect('kelas');
    }
    
    public function edit($id)
    {
        $data['jurusan'] = $this->Kompetensi_keahlian_model->getById($id);
        $data['title'] = 'Kompetensi Keahlian';
        $data['menu'] = 'master_data';

        $this->form_validation->set_rules('nama_keahlian', "Nama Keahlain", 'required|is_unique[tb_komp_keahlian.nama_keahlian]', [
            'required' => 'Nama kompetensi Keahlian harus diisi!',
            'is_unique' => 'Keahlian dengan nama tersebut sudah ada!',
        ]);

        $this->form_validation->set_rules('keterangan_keahlian', "Ket Keahlain", 'required', [
            'required' => 'Keterangan kompetensi Keahlian harus diisi!',
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view('templates/header', $data);
            $this->load->view('kompetensi_keahlian/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nama_keahlian' => $this->input->post('nama_keahlian'),
                'keterangan_keahlian' => $this->input->post('keterangan_keahlian'),
            ];
    
            $this->Kompetensi_keahlian_model->update(id: $id, data: $data);
            redirect('kelas');
        }

    }
}

/* End of file Kompetensi_keahlian.php and path \application\controllers\Kompetensi_keahlian.php */
