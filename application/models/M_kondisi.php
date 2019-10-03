<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kondisi extends CI_Model {

  public function getKondisi()
  {
    return $this->db->get('kondisi')->result();
  }

  public function add($name)
  {
    $data = [
      'KONDISI' => $name
    ];
    return $this->db->insert('kondisi',$data);
  }

  public function update($id, $nama)
  {
    $data = [
      'KONDISI' => $nama
    ];
    $this->db->where('ID_KONDISI', $id);
    return $this->db->update('kondisi', $data);
  }
  public function delete($id)
  {
    $this->db->set('ID_KONDISI', null);
    $this->db->where('ID_KONDISI', $id);
    $this->db->update('barang');
    $this->db->where('ID_KONDISI', $id);
    return $this->db->delete('kondisi');
  }

}
?>
