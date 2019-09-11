<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class M_barang extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    
  }

  public function getInventaris()
  { 
    $this->db->select('*');
    $this->db->from('barang');
    $this->db->join('ruang','ruang.ID_RUANG = barang.ID_RUANG');
    $this->db->join('kondisi','kondisi.ID_KONDISI = barang.ID_KONDISI');
    $this->db->join('jenis_barang','jenis_barang.ID_JENIS = barang.ID_JENIS');
    $result = $this->db->get()->result();
    // $gedung = $this->db->get('gedung')->result();

    return $result;
  }


  public function add($data)
  {
    return $this->db->insert('barang',$data);
  }

  public function delete($id)
  {
    $this->db->where('KODE_BARANG', $id);
    return $this->db->delete('barang');
  }

  public function update($data)
  {
    $this->db->where('KODE_BARANG', $data['KODE_BARANG']);
    return $this->db->update('barang', $data);
  }

}

/* End of file M_barang.php */


?>