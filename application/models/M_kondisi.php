<?php 


defined('BASEPATH') OR exit('No direct script access allowed');

class M_kondisi extends CI_Model {

  public function getKondisi()
  {
    return $this->db->get('kondisi')->result();
  }

}

/* End of file M_kondisi.php */


?>
