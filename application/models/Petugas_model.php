<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Petugas_model extends CI_Model 
{
    public function getByUsername($username)
    {
        return $this->db->get_where('tb_petugas', ['username' => $username])->row();
    }   
    
    public function getAll()
    {
        $this->db->where('level', 'petugas');
        return $this->db->get('tb_petugas')->result();
    }
    public function getById(String $id)
    {
        $this->db->where('id_petugas', $id);
        return $this->db->get('tb_petugas')->row();
    }

    public function insert(Array $data)
    {
        $this->db->insert('tb_petugas', $data);
    }

    public function update(Array $data, $idPetugas)
    {
        $this->db->where('id_petugas', $idPetugas);
        $this->db->update('tb_petugas', $data);
    }
    
    public function delete($id)
    {
        $this->db->where('id_petugas', $id);
        $this->db->delete('tb_petugas');
    }
                        
}


/* End of file Petugas_model.php and path \application\models\Petugas_model.php */
