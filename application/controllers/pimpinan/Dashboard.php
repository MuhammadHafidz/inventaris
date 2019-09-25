<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  private $data = [
    'title' => 'Head-Dashboard',
    'error' => NULL,
    'messages' => NULL,
    'username' => 'custom',
    'ct_a' => NULL,
    'ct_b' => NULL,
    'ct_c' => NULL,
    'ct_d' => NULL
  ];

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_dashboard'); 

    if (!$this->session->login || $this->session->role != 3) {
      
      redirect('auth','refresh');
      
    }
    $this->data['username'] = $this->session->name;
  }
  

  public function index()
  {
    $this->data['c_pruang'] = $this->M_dashboard->getCountPRuangTime();
    $this->data['c_pbarang'] = $this->M_dashboard->getCountPBarangTime();
    $this->data['c_barang'] = $this->M_dashboard->getCountBarangByRuang();
    $this->data['c_kbarang'] = $this->M_dashboard->getCountBarangByKondisi();
    $this->load->view('pimpinan/dashboard',$this->data);
  }

}

/* End of file Dashboard.php */


?>
