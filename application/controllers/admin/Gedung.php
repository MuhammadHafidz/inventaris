<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung extends CI_Controller {
  private $data = [
    'title' => 'Admin-Gedung',
    'username' => 'custom',
    'data' => []
  ];

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_gedung'); 
    if (!$this->session->login || $this->session->role != 2) {
      redirect('auth','refresh');
    }
    $this->data['username'] = $this->session->name;
  }
  
  public function index()
  { 
    $this->data['data'] = $this->M_gedung->getGedung();
    $this->load->view('admin/gedung',$this->data);
  }
}

/* End of file Gedung.php */
?>