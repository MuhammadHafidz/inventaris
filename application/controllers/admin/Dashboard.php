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
    'ct_users' => 0
  ];

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_dashboard'); 

    if (!$this->session->login) {
      
      redirect('auth','refresh');
      
    }
  }

  public function index()
  {
    $this->data['ct_gedung'] = $this->M_dashboard->getCountGedung();
    $this->data['ct_ruang'] = $this->M_dashboard->getCountRuang();
    $this->data['ct_invent'] = $this->M_dashboard->getCountInventaris();
    $this->data['username'] = $this->session->name;
    $this->data['ct_users'] = $this->M_dashboard->getCountUsers() - 1;
    $this->load->view('admin/dashboard', $this->data);
  }

}

/* End of file Dashboard.php */


?>