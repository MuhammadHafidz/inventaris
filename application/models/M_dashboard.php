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
    $this->db->where('PRUANG_IN >', 'date_sub(now(), interval 20 day)');
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
}

/* End of file dashboard.php */


?>