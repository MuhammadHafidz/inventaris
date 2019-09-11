<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

  private $data = [
    'title' => 'Barang',
    'username' => 'custom',
    'table' => 'barang',
    'data' => []
  ];

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_ruang'); 
    $this->load->model('M_barang'); 
    $this->load->model('M_jenis'); 
    $this->load->model('M_kondisi'); 
    $this->load->model('M_log'); 
    
    if (!$this->session->login) {
      
      redirect('auth','refresh');
      
    }
    $this->data['username'] = $this->session->name;    
  }
  
  public function index()
  { 
    $this->data['ruang'] = $this->M_ruang->getRuang();
    $this->data['data'] = $this->M_barang->getInventaris();
    $this->data['jenis'] = $this->M_jenis->getJenis();
    $this->data['kondisi'] = $this->M_kondisi->getKondisi();
    $this->load->view('karyawan/barang',$this->data);
    
  }


  public function update()
  {
    $data = [
      'KODE_BARANG' => $this->input->post('kode_barang'),
      'ID_KONDISI' => $this->input->post('kondisi'),
      'ID_JENIS' => $this->input->post('jenis'),
      'ID_RUANG' => $this->input->post('ruang'),
      'NAMA_BARANG' => $this->input->post('name'),
      'KETERANGAN' => $this->input->post('keterangan'),
      'JUMLAH' => $this->input->post('jumlah'),
      'SATUAN' => $this->input->post('satuan')
    ];
    if ($this->M_barang->update($data)) {
      $this->M_log->add($this->session->username,$this->data['table'],'update '.$data['KODE_BARANG']);
      redirect('users/barang','refresh');    
    }else {

    }
  }

  public function add()
  {
    $data = [
      'KODE_BARANG' => $this->input->post('kode_barang'),
      'ID_KONDISI' => $this->input->post('kondisi'),
      'ID_JENIS' => $this->input->post('jenis'),
      'ID_RUANG' => $this->input->post('ruang'),
      'NAMA_BARANG' => $this->input->post('name'),
      'KETERANGAN' => $this->input->post('keterangan'),
      'JUMLAH' => $this->input->post('jumlah'),
      'SATUAN' => $this->input->post('satuan')
    ];
    

    if ($this->M_barang->add($data)) {
      $this->M_log->add($this->session->username, $this->data['table'],'add '.$data['KODE_BARANG']);
      redirect('users/barang','refresh');    
    }else {
    }
  }

  public function delete()
  {
    $id = $this->input->get('id');
    $this->M_barang->delete($id);
    $this->M_log->add($this->session->username, $this->data['table'],'delete '.$data['KODE_BARANG']);
    redirect('users/barang','refresh');
    
  }

}

/* End of file Ruang.php */


?>