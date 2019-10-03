<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Peminjaman extends CI_Controller {

  private $data = [
    'title' => 'Peminjaman',
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
    
    if (!$this->session->login) {
      
      redirect('auth','refresh');
      
    }
    $this->data['username'] = $this->session->name;    
  }
  
  public function index()
  { 
    $this->data['pruang'] = $this->M_pruang->getPruang();
    $this->data['ruang'] = $this->M_ruang->getRuang();
    $this->data['barang'] = $this->M_barang->getInventaris();
    $this->data['pbarang'] = $this->M_pbarang->getPbarang();
    // echo json_encode($this->data['ruang']) ;
    $this->load->view('karyawan/peminjaman',$this->data);
    
  }

  public function updateRuang()
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
    $id = $this->input->post('id');
    if ($this->M_pruang->update($data,$id)) {
      redirect('users/peminjaman','refresh');    
    }else {

    }
  }

  public function updateBarang()
  {
    $data = [
      'ID_BARANG' => $this->input->post('ruang'),
      'NAMA_PBARANG' => $this->input->post('nama'),
      'EMAIL_PBARANG' => $this->input->post('email'),
      'KETERANGAN_PBARANG' => $this->input->post('keterangan'),
      'PBARANG_IN' => $this->input->post('date_in') ." " .$this->input->post('time_in'),
      'PBARANG_OUT' => $this->input->post('date_out') ." " .$this->input->post('time_out'), 
      'STATUS_PBARANG' => 0
    ];
    $id = $this->input->post('id');
    if ($this->M_pbarang->update($data,$id)) {
      redirect('users/peminjaman','refresh');    
    }else {

    }
  }

  public function deleteRuang()
  {
    $id = $this->input->get('id');
    $this->M_pruang->delete($id);
    redirect('users/peminjaman','refresh');
  }

  public function deleteBarang()
  {
    $id = $this->input->get('id');
    $this->M_pbarang->delete($id);
    redirect('users/peminjaman','refresh');
  }
}

/* End of file Ruang.php */
?>