<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Kelas_model extends CI_Model 
{
    public function getAll()
    {
        return $this->db->get('tb_kelas')->result();
    }                        
    public function getAllWithJoin()
    {
        $this->db->select('*');
        $this->db->from('tb_kelas');
        $this->db->join('tb_komp_keahlian', 'tb_komp_keahlian.id_komp_keahlian = tb_kelas.id_komp_keahlian');
        return $this->db->get()->result();
    }
    public function getById($idKelas)
    {
        $this->db->select('*');
        $this->db->from('tb_kelas');
        $this->db->join('tb_komp_keahlian', 'tb_komp_keahlian.id_komp_keahlian = tb_kelas.id_komp_keahlian');
        $this->db->where('tb_kelas.id_kelas', $idKelas);
        return $this->db->get()->row();
    }
    
    public function insert(Array $data)
    {
        $this->db->insert('tb_kelas', $data);
    }
   
    public function update(Array $data, $id)
    {
        $this->db->where('id_kelas', $id);
        $this->db->update('tb_kelas', $data);
    }
                        
}


/* End of file Kelas_model.php and path \application\models\Kelas_model.php */
