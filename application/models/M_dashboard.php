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
}

/* End of file dashboard.php */


?>