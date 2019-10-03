<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class M_gedung extends CI_Model {
  public function __construct()
  {
    parent::__construct();
  }

  public function getGedung()
  {
    return $this->db->get('gedung')->result();
  }

  public function add($name)
  {
    $data = [
      'ID_GEDUNG' => null,
      'NAMA_GEDUNG' => $name
    ];

    return $this->db->insert('gedung',$data);
  }

  public function delete($id)
  {
    $this->db->set('ID_GEDUNG', null);
    $this->db->where('ID_GEDUNG', $id);
    $this->db->update('ruang');
    $this->db->where('ID_GEDUNG', $id);
    return $this->db->delete('gedung');
  }

  public function update($id, $nama)
  {
    $data = [
      'NAMA_GEDUNG' => $nama
    ];
    $this->db->where('ID_GEDUNG', $id);
    return $this->db->update('gedung', $data);
  }
  

}
?>