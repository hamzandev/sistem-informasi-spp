<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Pembayaran_model extends CI_Model 
{
    public function insert($data)
    {
        $this->db->insert('tb_pembayaran', $data);
    }    
    
    public function getById($id)
    {
        $this->db->select("tb_pembayaran.*, tb_siswa.nama, tb_petugas.nama_petugas");
        $this->db->from('tb_pembayaran');
        $this->db->join('tb_siswa','tb_siswa.nisn = tb_pembayaran.nisn');
        $this->db->join('tb_petugas','tb_petugas.id_petugas = tb_pembayaran.id_petugas');
        $this->db->where('tb_pembayaran.id_pembayaran', $id);
        return $this->db->get()->row();
    }
    
    public function getAll()
    {
        $this->db->select("tb_pembayaran.*, tb_siswa.nama, tb_petugas.nama_petugas");
        $this->db->from('tb_pembayaran');
        $this->db->join('tb_siswa','tb_siswa.nisn = tb_pembayaran.nisn');
        $this->db->join('tb_petugas','tb_petugas.id_petugas = tb_pembayaran.id_petugas');
        return $this->db->get()->result();
    }
                        
}


/* End of file Pembayaran_model.php and path \application\models\Pembayaran_model.php */
