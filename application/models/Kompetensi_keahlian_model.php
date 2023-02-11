<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Kompetensi_keahlian_model extends CI_Model 
{
    public function getAll()
    {
        return $this->db->get('tb_komp_keahlian')->result();
    }                        
    
    public function insert($data)
    {
         $this->db->insert('tb_komp_keahlian', $data);
    }                        
                        
    public function delete($id)
    {
        $this->db->where('id_komp_keahlian', $id);
        $this->db->delete('tb_komp_keahlian');
    }                        
                        
    public function getById($id)
    {
        $this->db->where('id_komp_keahlian', $id);
        return $this->db->get('tb_komp_keahlian')->row();
    }        

    public function update($data, $id)
    {
        $this->db->where('id_komp_keahlian', $id);
        $this->db->update('tb_komp_keahlian', $data);
    }                        
                        
}


/* End of file Kompetensi_keahlian_model.php and path \application\models\Kompetensi_keahlian_model.php */
