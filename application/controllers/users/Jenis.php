<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Jenis extends CI_Controller {

  private $data = [
    'title' => 'Jenis Barang',
    'username' => 'custom',
    'data' => []
  ];

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_jenis'); 
    
    if (!$this->session->login) {
      
      redirect('auth','refresh');
      
    }
    $this->data['username'] = $this->session->name;    
  }
  
  public function index()
  { 
    $this->data['data'] = $this->M_jenis->getJenis();
    $this->load->view('karyawan/jenis_barang',$this->data);
    
  }


  public function update()
  {
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    if ($this->M_jenis->update($id,$name)) {
      redirect('users/jenis','refresh');    
    }else {

    }
  }

  public function add()
  {
    $name = $this->input->post('name');
    $kode = $this->input->post('kode');
    if ($this->M_jenis->add($kode,$name)) {
      redirect('users/jenis','refresh');    
    }else {
    }
  }

  public function delete()
  {
    $id = $this->input->get('id');
    $this->M_jenis->delete($id);
    redirect('users/jenis','refresh');
  }

}

/* End of file Ruang.php */


?>