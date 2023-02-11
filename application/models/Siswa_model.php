<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Siswa_model extends CI_Model 
{
    public function getAll()
    {
        $this->db->select('tb_siswa.*, tb_komp_keahlian.nama_keahlian, tb_kelas.nama_kelas');
        $this->db->from('tb_siswa');
        $this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_siswa.id_kelas');
        $this->db->join('tb_komp_keahlian', 'tb_komp_keahlian.id_komp_keahlian = tb_siswa.id_komp_keahlian');
        return $this->db->get()->result();
    }    
    public function getByNisn($nisn)
    {
        $this->db->select('tb_siswa.*, tb_komp_keahlian.nama_keahlian, tb_kelas.nama_kelas');
        $this->db->from('tb_siswa');
        $this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_siswa.id_kelas');
        $this->db->join('tb_komp_keahlian', 'tb_komp_keahlian.id_komp_keahlian = tb_siswa.id_komp_keahlian');
        $this->db->where('tb_siswa.nisn', $nisn);
        return $this->db->get()->row();
    }    
    
    public function insert($data)
    {
        $this->db->insert('tb_siswa', $data);
    }
    public function update($nisn, $data)
    {
        $this->db->where('nisn', $nisn);
        $this->db->update('tb_siswa', $data);
    }
                        
}


/* End of file Siswa_model.php and path \application\models\Siswa_model.php */
