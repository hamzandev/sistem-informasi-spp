<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Tagihan_model extends CI_Model 
{
    public function insert($nisn, $bulan, $status)
    {
        $this->db->insert('tb_tagihan', [
            'nisn' => $nisn, 
            'bulan' => $bulan, 
            'status' => $status
        ]);
    } 
    
    public function getByNisnSiswa($nisn)
    {
        $this->db->where('nisn', $nisn);
        return $this->db->get('tb_tagihan')->result();
    }
    
    
    public function getByStatus($nisn, $status)
    {
        $this->db->where('nisn', $nisn);
        $this->db->where('status', $status);
        return $this->db->get('tb_tagihan')->result();
    }

    public function updateStatusByNisn($nisn, $bulan_dibayar, $data)
    {
        $this->db->where('nisn', $nisn);
        $this->db->where('bulan', $bulan_dibayar);
        $this->db->update('tb_tagihan', $data);
    }
                        
}


/* End of file Tagihan_model.php and path \application\models\Tagihan_model.php */
