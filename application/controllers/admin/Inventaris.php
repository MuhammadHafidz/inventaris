<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris extends CI_Controller {

  private $data = [
    'title' => 'Admin-Inventaris',
    'username' => 'custom',
    'table' => 'barang',
    'data' => []
  ];

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_barang'); 

    if (!$this->session->login || $this->session->role != 3) {
      
      redirect('auth','refresh');
      
    }
    $this->data['username'] = $this->session->name;    
  }
  
  public function index()
  { 
    $this->data['data'] = $this->M_barang->getInventaris();
    $this->load->view('admin/barang',$this->data);
    
  }


}

/* End of file Ruang.php */


?>