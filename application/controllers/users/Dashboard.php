<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

  private $data = [
    'title' => 'Dashboard',
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
    $this->data['ct_gedung'] = $this->M_dashboard->getCountGedung();
    $this->data['ct_ruang'] = $this->M_dashboard->getCountRuang();
    $this->data['ct_invent'] = $this->M_dashboard->getCountInventaris();
    $this->data['username'] = $this->session->name;
    $this->data['ct_badinv'] = $this->M_dashboard->getCountBadInventaris();
    $this->data['ruang'] = $this->M_ruang->getRuang();
    $this->data['invent'] = $this->M_barang->getInventaris();
    
    $this->load->view('karyawan/dashboard',$this->data);
  }

  public function addPruang()
  {
    $data = [
      'ID_RUANG' => $this->input->post('ruang'),
      'NAMA_PRUANG' => $this->input->post('nama'),
      'EMAIL_PRUANG' => $this->input->post('email'),
      'KETERANGAN_PRUANG' => $this->input->post('keterangan'),
      'PRUANG_IN' => $this->input->post('date_in') ." " .$this->input->post('time_in'),
      'PRUANG_OUT' => $this->input->post('date_out') ." " .$this->input->post('time_out'), 
      'STATUS_PRUANG' => 0
    ];
    if ($this->M_pruang->add($data)) {
      echo "<script>alert('Peminjaman Ruang Sukses')</script>";
      redirect('users/dashboard','refresh');    
    }
  }

  public function addPbarang()
  {
    $data = [
      'ID_BARANG' => $this->input->post('invent'),
      'NAMA_PBARANG' => $this->input->post('nama'),
      'EMAIL_PBARANG' => $this->input->post('email'),
      'KETERANGAN_PBARANG' => $this->input->post('keterangan'),
      'PBARANG_IN' => $this->input->post('date_in') ." " .$this->input->post('time_in'),
      'PBARANG_OUT' => $this->input->post('date_out') ." " .$this->input->post('time_out'), 
      'STATUS_PBARANG' => 0
    ];
    if ($this->M_pbarang->add($data)) {
      echo "<script>alert('Peminjaman Barang Sukses')</script>";
      redirect('users/dashboard','refresh');    
    }
  }

}

/* End of file Dashboard.php */



?>