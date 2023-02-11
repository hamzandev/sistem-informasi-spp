<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Pembayaran_model extends CI_Model 
{
    public function insert($data)
    {
        $this->db->insert('tb_pembayaran', $data);
    }                        
                        
}


/* End of file Pembayaran_model.php and path \application\models\Pembayaran_model.php */
