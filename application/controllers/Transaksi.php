<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Tagihan_model');
        $this->load->model('Spp_model');
        $this->load->model('Pembayaran_model');
    }

    public function index()
    {
        $data['title'] = 'Transaksi';
        $data['menu'] = 'transaksi';
        if ($this->input->post('nisn')) {
            $data['data_tagihan'] = $this->Tagihan_model->getByNisnSiswa($this->input->post('nisn'));
            $data['data_tagihan_belum_dibayar'] = $this->Tagihan_model->getByStatus(
                nisn: $this->input->post('nisn'), 
                status: 'Belum Dibayar'
            );
        }
        
        $this->load->view('templates/header', $data);
        $this->load->view('transaksi/index', $data);
        $this->load->view('templates/footer');
    }

     public function bayar($nisn)
    {
        $data['title'] = 'Transaksi';
        $data['menu'] = 'transaksi';
        $data['spp'] = $this->Spp_model->getAll();
        $data['tagihan'] = $this->Tagihan_model->getByStatus(nisn: $nisn, status: 'Belum Dibayar');

        $this->form_validation->set_rules('jumlah_dibayar', 'Jumlah Dibayar', 'numeric', [
            'numeric' => 'Isi Hanya Angka!',
        ]);

        if (!$this->form_validation->run()) {
            $this->load->view('templates/header', $data);
            $this->load->view('tagihan/bayar', $data);
            $this->load->view('templates/footer');
        } else {
            $data = [
                'id_pembayaran' => $this->input->post('id_pembayaran', TRUE),
                'id_petugas' => $this->session->userdata('user_id'),
                'nisn' => $this->input->post('nisn', TRUE),
                'tgl_bayar' => $this->input->post('tgl_bayar', TRUE),
                'bulan_dibayar' => $this->input->post('bulan_dibayar', TRUE),
                'tahun_dibayar' => $this->input->post('tahun_dibayar', TRUE),
                'id_spp' => $this->input->post('id_spp', TRUE),
                'jumlah_bayar' => $this->input->post('jumlah_bayar', TRUE),
            ];

            // Insert ke tb_pembayaran
            $this->Pembayaran_model->insert($data);
           
            // Update status tagihan pada tb_tagihan
            $this->Tagihan_model->updateStatusByNisn(
                nisn: $data['nisn'], 
                bulan_dibayar: $data['bulan_dibayar'],
                data: [
                        'nisn' => $data['nisn'], 
                        'bulan' => $data['bulan_dibayar'], 
                        'status' => 'Dibayar'
                    ]
            );
            // redirect('tagihan');
            header('Location: '.base_url('history?nisn='.$data['nisn']));
        }
    }
}

/* End of file Transaksi.php and path \application\controllers\Transaksi.php */
