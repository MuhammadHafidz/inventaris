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

  public function getwherePbarang($id)
  { 
    $this->db->select('*');
    $this->db->from('p_barang');
    $this->db->where('ID_PBARANG', $id);
    $this->db->join('barang','barang.ID_BARANG = p_barang.ID_BARANG');
    $this->db->join('ruang','ruang.ID_RUANG = barang.ID_RUANG');
    $this->db->join('gedung','gedung.ID_GEDUNG = ruang.ID_GEDUNG');
    return $this->db->get()->row();
  }

  public function chkPbarang($data)
  {
    $query = $this->db->query("SELECT * FROM p_barang WHERE ID_BARANG = ".$data['ID_BARANG']." and (PBARANG_IN <= '".$data['PBARANG_IN']."' and PBARANG_OUT >= '".$data['PBARANG_IN']."') OR (PBARANG_IN <= '".$data['PBARANG_OUT']."' and PBARANG_OUT >= '".$data['PBARANG_OUT']."')");
    return $query->row();
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
?>