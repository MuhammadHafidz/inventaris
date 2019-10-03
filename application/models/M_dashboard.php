<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dashboard extends CI_Model {

  public function __construct()
  {
    parent::__construct();
  }

  public function getCountGedung()
  {
    return $this->db->count_all('gedung');
  }

  public function getCountUsers()
  {
    return $this->db->count_all('users');
  }

  public function getCountRuang()
  {
    return $this->db->count_all('ruang');    
  }

  public function getCountInventaris()
  {
    return $this->db->count_all('barang');    
  }

  public function getCountBadInventaris()
  {
    $this->db->from('barang');
    $this->db->where('ID_KONDISI>','1');
    return $this->db->count_all_results();
  }

  public function getCountPRuangTime()
  {
    $this->db->select('count(ID_PRUANG) as cnt, DAY(PRUANG_IN) as day');
    $this->db->from('p_ruang');
    $this->db->where('PRUANG_IN >', 'date_sub(now(), interval 10 day)');
    $this->db->group_by('PRUANG_IN');
    return $this->db->get()->result();
  }
  public function getCountPBarangTime()
  {
    $this->db->select('count(ID_PBARANG) as count, DAY(PBARANG_IN) as day');
    $this->db->from('p_barang');
    $this->db->where('PBARANG_IN >', 'date_sub(now(), interval 10 day)');
    $this->db->group_by('PBARANG_IN');
    return $this->db->get()->result();
  }

  public function getCountBarangByRuang()
  {
    $this->db->select('count(barang.ID_BARANG) as count, NAMA_RUANG');
    $this->db->from('barang');
    $this->db->join('ruang','ruang.ID_RUANG = barang.ID_RUANG' );    
    return $this->db->get()->result();
  }

  public function getCountBarangByKondisi()
  {
    $this->db->select('count(barang.ID_BARANG) as count, Kondisi');
    $this->db->from('barang');
    $this->db->join('kondisi','kondisi.ID_KONDISI = barang.ID_KONDISI' );    
    return $this->db->get()->result();
  }
}

?>