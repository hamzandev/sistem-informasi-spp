<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Spp_model extends CI_Model 
{
    public function getAll()
    {
        return $this->db->get('tb_spp')->result();
    }                        
                        
}


/* End of file Spp_model.php and path \application\models\Spp_model.php */
