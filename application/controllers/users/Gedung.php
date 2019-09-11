<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Gedung extends CI_Controller {
  private $data = [
    'title' => 'Gedung',
    'username' => 'custom',
    'data' => []
  ];

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_gedung'); 
    if (!$this->session->login) {
      redirect('auth','refresh');
    }
    $this->data['username'] = $this->session->name;
  }
  
  public function index()
  { 
    $this->data['data'] = $this->M_gedung->getGedung();
    $this->load->view('karyawan/gedung',$this->data);
    
  }


  public function update()
  {
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    if ($this->M_gedung->update($id,$name)) {
      redirect('users/gedung','refresh');    
    }else {

    }
  }

  public function add()
  {
    $name = $this->input->post('name');
    if ($this->M_gedung->add($name)) {
      redirect('users/gedung','refresh');    
    }else {
    }
  }

  public function delete()
  {
    $id = $this->input->get('id');
    $this->M_gedung->delete($id);
    redirect('users/gedung','refresh');
    
  }

}

/* End of file Gedung.php */


?>