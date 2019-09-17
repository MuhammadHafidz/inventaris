<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang extends CI_Controller {

  private $data = [
    'title' => 'Admin-Ruang',
    'username' => 'custom',
    'data' => []
  ];

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_ruang');
    
    if (!$this->session->login) {
      
      redirect('auth','refresh');
      
    }
    $this->data['username'] = $this->session->name;    
  }
  
  public function index()
  { 
    $this->data['data'] = $this->M_ruang->getRuang();
    $this->load->view('admin/ruang',$this->data);
    
  }




}

/* End of file Ruang.php */


?>