<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if ($this->session->has_userdata('is_login') == false) {
            redirect('auth');
        }

        if ($this->session->userdata('user_level') != 'admin') {
            redirect('dashboard');
        }

        $this->load->model('Siswa_model');
        $this->load->model('Kelas_model');
        $this->load->model('Kompetensi_keahlian_model');
        $this->load->model('Spp_model');
        $this->load->model('Tagihan_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data['title'] = 'Siswa';
        $data['menu'] = 'master_data';
        $data['siswa'] = $this->Siswa_model->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('siswa/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Siswa';
        $data['menu'] = 'master_data';
        $data['kelas'] = $this->Kelas_model->getAll();
        $data['komp_keahlian'] = $this->Kompetensi_keahlian_model->getAll();
        $data['spp'] = $this->Spp_model->getAll();

        $this->form_validation->set_rules('nisn', 'Nisn', 'required|numeric|min_length[10]', [
            'required' => 'NISN Wajib diiisi!',
            'numeric' => 'Masukkan NISN dengan benar!',
            'min_length' => 'Masukkan NISN dengan benar!',
        ]);
        $this->form_validation->set_rules('nis', 'Nis', 'required|numeric|min_length[10]', [
            'required' => 'NISN Wajib diiisi!',
            'numeric' => 'Masukkan NISN dengan benar!',
            'min_length' => 'Masukkan NISN dengan benar!',
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'NISN Wajib diiisi!',
        ]);
        $this->form_validation->set_rules('id_kelas', 'ID Kelas', 'required|is_natural_no_zero', [
            'required' => 'Silahkan pilih kelas!',
        ]);
        $this->form_validation->set_rules('id_komp_keahlian', 'ID Komp Keahlian', 'required|is_natural_no_zero', [
            'required' => 'Silahkan pilih Jurusan!',
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view('templates/header', $data);
            $this->load->view('siswa/tambah', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nisn' => $this->input->post('nisn'),
                'nis' => $this->input->post('nis'),
                'nama' => $this->input->post('nama'),
                'id_kelas' => $this->input->post('id_kelas'),
                'id_komp_keahlian' => $this->input->post('id_komp_keahlian'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'id_spp' => $this->input->post('id_spp'),
            ];
            // var_dump($data); diw;
            if (!$this->input->post('password')) {
                $data['password'] = password_hash(123456, PASSWORD_DEFAULT);
            } else {
                $data['password'] = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
            }

            $bulan = [
                'Juli',
                'Agustus', 'September',
                'Oktober', 'November',
                'Desember', 'Januari',
                'Februari', 'Maret',
                'April', 'Mei',
                'Juni',
            ];

            foreach ($bulan as $b) {
                $this->Tagihan_model->insert(
                    nisn: $data['nisn'], 
                    bulan: $b, 
                    status: 'Belum Dibayar'
                );
            }

            $this->Siswa_model->insert($data);
            redirect('siswa');
        }
    }

    public function edit($nisn)
    {
        $data['title'] = 'Siswa';
        $data['menu'] = 'master_data';
        $data['siswa'] = $this->Siswa_model->getByNisn($nisn);
        $data['kelas'] = $this->Kelas_model->getAll();
        $data['komp_keahlian'] = $this->Kompetensi_keahlian_model->getAll();
        $data['spp'] = $this->Spp_model->getAll();

        $this->form_validation->set_rules('nisn', 'Nisn', 'required|numeric|min_length[10]', [
            'required' => 'NISN Wajib diiisi!',
            'numeric' => 'Masukkan NISN dengan benar!',
            'min_length' => 'Masukkan NISN dengan benar!',
        ]);
        $this->form_validation->set_rules('nis', 'Nis', 'required|numeric|min_length[10]', [
            'required' => 'NISN Wajib diiisi!',
            'numeric' => 'Masukkan NISN dengan benar!',
            'min_length' => 'Masukkan NISN dengan benar!',
        ]);
        $this->form_validation->set_rules('nama', 'Nama', 'required', [
            'required' => 'NISN Wajib diiisi!',
        ]);
        $this->form_validation->set_rules('id_kelas', 'ID Kelas', 'required|is_natural_no_zero', [
            'required' => 'Silahkan pilih kelas!',
        ]);
        $this->form_validation->set_rules('id_komp_keahlian', 'ID Komp Keahlian', 'required|is_natural_no_zero', [
            'required' => 'Silahkan pilih Jurusan!',
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view('templates/header', $data);
            $this->load->view('siswa/edit', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'nisn' => $this->input->post('nisn'),
                'nis' => $this->input->post('nis'),
                'nama' => $this->input->post('nama'),
                'id_kelas' => $this->input->post('id_kelas'),
                'id_komp_keahlian' => $this->input->post('id_komp_keahlian'),
                'alamat' => $this->input->post('alamat'),
                'no_telp' => $this->input->post('no_telp'),
                'id_spp' => $this->input->post('id_spp'),
            ];
            // var_dump($data); die;

            $this->Siswa_model->update(nisn: $data['nisn'], data: $data);
            redirect('siswa');
        }
    }

    public function hapus($nisn)
    {
        $this->db->where('nisn', $nisn);
        $this->db->delete('tb_siswa');
        redirect('siswa');
    }
}

/* End of file Siswa.php and path \application\controllers\Siswa.php */
