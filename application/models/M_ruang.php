<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_ruang extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function getRuang()
  { 
    $this->db->select('*');
    $this->db->from('ruang');
    $this->db->join('gedung','gedung.ID_GEDUNG = ruang.ID_GEDUNG' );
    $result = $this->db->get()->result();
    return $result;
  }

  public function add($gedung,$name)
  {
    $data = [
      'ID_GEDUNG' => $gedung,
      'ID_RUANG' => null,
      'NAMA_RUANG' => $name
    ];
    return $this->db->insert('ruang',$data);
  }

  public function delete($id)
  {
    $this->db->set('ID_RUANG', null);
    $this->db->where('ID_RUANG', $id);
    $this->db->update('p_ruang');
    $this->db->set('ID_RUANG', null);
    $this->db->where('ID_RUANG', $id);
    $this->db->update('barang');
    $this->db->where('ID_RUANG', $id);
    return $this->db->delete('ruang');
  }

  public function update($id, $gedung, $nama)
  {
    $data = [
      'ID_GEDUNG' => $gedung,
      'NAMA_RUANG' => $nama
    ];
    $this->db->where('ID_RUANG', $id);
    return $this->db->update('ruang', $data);
  }

}
?>