<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  private $data = [
    'title' => 'Admin-Dashboard',
    'error' => NULL,
    'messages' => NULL,
    'username' => 'custom',
    'ct_gedung' => 0,
    'ct_ruang' => 0,
    'ct_invent' => 0,
    'ct_badinv' => 0
  ];

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_dashboard'); 
    $this->load->model('M_pruang'); 
    $this->load->model('M_pbarang'); 
    $this->load->model('M_ruang'); 
    $this->load->model('M_barang'); 
    
    if (!$this->session->login) {
      
      redirect('auth','refresh');
      
    }
  }

  public function index()
  {
    
  }

}

/* End of file Dashboard.php */


?>