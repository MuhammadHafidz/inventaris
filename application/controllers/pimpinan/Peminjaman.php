<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

  private $data = [
    'title' => 'Head-Peminjaman',
    'username' => 'custom',
    'data' => []
  ];

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_jenis'); 
    $this->load->model('M_ruang'); 
    $this->load->model('M_barang'); 
    $this->load->model('M_pruang'); 
    $this->load->model('M_pbarang'); 
    echo "<script>alert(".$this->session->role.")</script>";
    if (!$this->session->login || $this->session->role != 3) {
      
      redirect('auth','refresh');
      
    }
    $this->data['username'] = $this->session->name;    
  }
  
  public function index()
  { 
    $this->data['pruang'] = $this->M_pruang->getPruang();
    $this->data['pbarang'] = $this->M_pbarang->getPbarang();
    $this->data['ruang'] = $this->M_ruang->getRuang();
    $this->data['barang'] = $this->M_barang->getInventaris();
    // echo json_encode($this->data['ruang']) ;
    $this->load->view('pimpinan/peminjaman',$this->data);
    
  }

  public function updateRuang()
  {
    $data = [
      'STATUS_PRUANG' => $this->input->post('acceptment')
    ];
    $id = $this->input->post('id');
    if ($this->M_pruang->update($data,$id)) {
      redirect('pimpinan/peminjaman','refresh');    
    }else {

    }
  }

  public function updateBarang()
  {
    $data = [
      'STATUS_PBARANG' => $this->input->post('acceptment')
    ];
    $id = $this->input->post('id');
    if ($this->M_pbarang->update($data,$id)) {
      redirect('pimpinan/peminjaman','refresh');    
    }else {

    }
  }




}

/* End of file Ruang.php */


?>