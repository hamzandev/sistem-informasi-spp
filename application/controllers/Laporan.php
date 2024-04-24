<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

// import dulu 
require_once APPPATH."third_party/dompdf/autoload.inc.php";
use Dompdf\Dompdf;

class Laporan extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        
        if ($this->session->has_userdata('is_login') == false) {
            redirect('auth');
        }

        if ($this->session->userdata('user_level') != 'admin') {
            redirect('dashboard');
        }

        $this->load->model('Pembayaran_model');
        $this->load->model('Siswa_model');
        $this->load->model('Kompetensi_keahlian_model');
        $this->load->model('Kelas_model');
        $this->load->model('Petugas_model');
    }

    public function index()
    {
        $data['title'] = 'Laporan';
        $data['menu'] = 'laporan';
        $data['siswa'] = $this->Siswa_model->getAll();
        $data['petugas'] = $this->Petugas_model->getAll();
        $data['kelas'] = $this->Kelas_model->getAll();
        $data['jurusan'] = $this->Kompetensi_keahlian_model->getAll();
        $data['pembayaran'] = $this->Pembayaran_model->getAll();
        $this->load->view('templates/header', $data);
        $this->load->view('laporan/index', $data);
        $this->load->view('templates/footer');
    }

    public function pembayaran()
    {
        if ($this->input->get('idpembayaran')) {
            $data['pembayaran'] = $this->Pembayaran_model->getById($this->input->get('idpembayaran'));
        } else {
            $data['pembayaran'] = $this->Pembayaran_model->getAll();
        }

        $this->load->view('laporan/pembayaran', $data);

        // init DOMPDF object
        $pdf = new Dompdf();
        $pdf->loadHtml($this->output->get_output());
        $pdf->setPaper('A4', 'potrait');
        // render html as PDF
        $pdf->render();
        // set filename
        if ($this->input->get('idpembayaran')) {
            $pdf->stream('LAPORAN-PEMBAYARAN-'.$this->input->get('idpembayaran').'.pdf');
        }else {
            $pdf->stream('LAPORAN-PEMBAYARAN-'.date('d-m-Y').'.pdf');
        }


    }

    public function siswa()
    {
        $data['siswa'] = $this->Siswa_model->getAll();
        $this->load->view('laporan/siswa',$data);
        $pdf = new Dompdf();
        $pdf->loadHtml($this->output->get_output());
        $pdf->setPaper('A4', 'potrait');
        $pdf->render();
        $pdf->stream('DATA-SISWA-'.date('d-m-Y').'.pdf');

    }

    public function kelas()
    {
        $data['kelas'] = $this->Kelas_model->getAll();
        $this->load->view('laporan/kelas',$data);
        $pdf = new Dompdf();
        $pdf->loadHtml($this->output->get_output());
        $pdf->setPaper('A4', 'potrait');
        $pdf->render();
        $pdf->stream('DATA-KELAS-'.date('d-m-Y').'.pdf');
    }

    public function jurusan()
    {
        $data['jurusan'] = $this->Kompetensi_keahlian_model->getAll();
        $this->load->view('laporan/jurusan',$data);
        $pdf = new Dompdf();
        $pdf->loadHtml($this->output->get_output());
        $pdf->setPaper('A4', 'potrait');
        $pdf->render();
        $pdf->stream('DATA-KOMPETENSI-KEAHLIAN-'.date('d-m-Y').'.pdf');
    }
  
    public function petugas()
    {
        $data['petugas'] = $this->Petugas_model-->getAll();
        $this->load->view('laporan/petugas', $data);
        $pdf = new Dompdf();
        $pdf->loadHtml($this->output->get_output());
        $pdf->setPaper('A4', 'potrait');
        $pdf->render();
        $pdf->stream('DATA-PETUGAS-'.date('d-m-Y').'.pdf');
    }

}

/* End of file Siswa.php and path \application\controllers\Siswa.php */
