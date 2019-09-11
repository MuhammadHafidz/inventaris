<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_pbarang extends CI_Model {

  public function getPbarang()
  {
    $this->db->select('*');
    $this->db->from('p_barang');
    $this->db->join('barang','barang.ID_BARANG = p_barang.ID_BARANG');
    $this->db->join('ruang','ruang.ID_RUANG = barang.ID_RUANG');
    return $this->db->get()->result();
  }

  public function add($data)
  {
    return $this->db->insert('p_barang',$data);
  }

  public function update($data, $id)
  {
    $this->db->where('ID_PBARANG', $id);
    return $this->db->update('p_barang', $data);
  }

  public function delete($id)
  {
    $this->db->where('ID_PBARANG', $id);
    return $this->db->delete('p_barang');
  }

}

/* End of file M_pbarang.php */


?>