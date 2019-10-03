<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CheckRuang extends CI_Controller {
  private $data = [
    'title' => 'Check Ruang',
    'username' => 'custom',
    'data' => []
  ];
  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_pruang');     
  }
    
  public function index()
  {
    $this->data['data'] = $this->M_pruang->getPruangNext();
    $this->load->view('check_ruang', $this->data);
    // echo json_encode($this->M_pruang->getPruangNext());
    
  }

}
/* End of file CheckRuang.php */
?>