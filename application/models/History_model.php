<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class History_model extends CI_Model 
{
    public function getAll()
    {
        $this->db->select('tb_pembayaran.*, tb_siswa.nama, tb_petugas.nama_petugas');
        $this->db->from('tb_pembayaran');
        $this->db->join('tb_siswa', 'tb_siswa.nisn = tb_pembayaran.nisn');
        $this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_pembayaran.id_petugas');
        return $this->db->get()->result();
    }  

    public function getByPetugasAndNisn($idPetugas, $nisn)
    {
        $this->db->select('tb_pembayaran.*, tb_siswa.nama, tb_petugas.nama_petugas');
        $this->db->from('tb_pembayaran');
        $this->db->join('tb_siswa', 'tb_siswa.nisn = tb_pembayaran.nisn');
        $this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_pembayaran.id_petugas');
        $this->db->where('tb_pembayaran.id_petugas', $idPetugas);
        $this->db->where('tb_pembayaran.nisn', $nisn);
        return $this->db->get()->result();
    }                        

    public function getByPetugas($idPetugas)
    {
        $this->db->select('tb_pembayaran.*, tb_siswa.nama, tb_petugas.nama_petugas');
        $this->db->from('tb_pembayaran');
        $this->db->join('tb_siswa', 'tb_siswa.nisn = tb_pembayaran.nisn');
        $this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_pembayaran.id_petugas');
        $this->db->where('tb_pembayaran.id_petugas', $idPetugas);
        return $this->db->get()->result();

    }                        
   
    public function getByNisn($nisn)
    {
        $this->db->select('tb_pembayaran.*, tb_siswa.nama, tb_petugas.nama_petugas');
        $this->db->from('tb_pembayaran');
        $this->db->join('tb_siswa', 'tb_siswa.nisn = tb_pembayaran.nisn');
        $this->db->join('tb_petugas', 'tb_petugas.id_petugas = tb_pembayaran.id_petugas');
        $this->db->where('tb_pembayaran.nisn', $nisn);
        return $this->db->get()->result();

    }                        
                        
}


/* End of file History_model.php and path \application\models\History_model.php */
