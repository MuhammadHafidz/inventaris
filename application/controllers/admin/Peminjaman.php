<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

  private $data = [
    'title' => 'Admin-Peminjaman',
    'username' => 'custom',
    'data' => []
  ];

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pruang'); 
    $this->load->model('M_pbarang'); 
    
    if (!$this->session->login || $this->session->role != 3) {
      
      redirect('auth','refresh');
      
    }
    $this->data['username'] = $this->session->name;    
  }
  
  public function index()
  { 
    $this->data['pruang'] = $this->M_pruang->getPruang();
    $this->data['pbarang'] = $this->M_pbarang->getPbarang();
    // echo json_encode($this->data['ruang']) ;
    $this->load->view('admin/peminjaman',$this->data);
    
  }




}

/* End of file Ruang.php */


?>