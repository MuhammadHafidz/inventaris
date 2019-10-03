<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ruang extends CI_Controller {

  private $data = [
    'title' => 'Ruang',
    'username' => 'custom',
    'data' => []
  ];

  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_ruang'); 
    $this->load->model('M_gedung'); 
    
    if (!$this->session->login) {
      
      redirect('auth','refresh');
      
    }
    $this->data['username'] = $this->session->name;    
  }
  
  public function index()
  { 
    $this->data['gedung'] = $this->M_gedung->getGedung();
    $this->data['data'] = $this->M_ruang->getRuang();
    $this->load->view('karyawan/ruang',$this->data);
    
  }

  public function update()
  {
    $id = $this->input->post('id');
    $gedung = $this->input->post('gedung');
    $name = $this->input->post('name');
    if ($this->M_ruang->update($id,$gedung,$name)) {
      redirect('users/ruang','refresh');    
    }else {

    }
  }

  public function add()
  {
    $name = $this->input->post('name');
    $gedung = $this->input->post('gedung');
    if ($this->M_ruang->add($gedung,$name)) {
      redirect('users/ruang','refresh');    
    }else {
    }
  }

  public function delete()
  {
    $id = $this->input->get('id');
    $this->M_ruang->delete($id);
    redirect('users/ruang','refresh');
    
  }

}
/* End of file Ruang.php */
?>