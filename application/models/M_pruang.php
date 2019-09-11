<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_pruang extends CI_Model {

  public function getPruang()
  { 
    $this->db->select('*');
    $this->db->from('p_ruang');
    $this->db->join('ruang','ruang.ID_RUANG = p_ruang.ID_RUANG');
    return $this->db->get()->result();
  }
  public function add($data)
  {
    return $this->db->insert('p_ruang',$data);    
  }

  public function update($data, $id)
  {
    $this->db->where('ID_PRUANG', $id);
    return $this->db->update('p_ruang', $data);
  }

  public function delete($id)
  {
    $this->db->where('ID_PRUANG', $id);
    return $this->db->delete('p_ruang');
  }

}

/* End of file M_pruang.php */


?>
