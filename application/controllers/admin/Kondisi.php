<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Kondisi extends CI_Controller {

  private $data = [
    'title' => 'Kondisi',
    'username' => 'custom',
    'data' => []
  ];

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_kondisi'); 
    
    if (!$this->session->login || $this->session->role != 3) {
      
      redirect('auth','refresh');
      
    }
    $this->data['username'] = $this->session->name;    
  }
  
  public function index()
  { 
    $this->data['data'] = $this->M_kondisi->getKondisi();
    $this->load->view('admin/kondisi',$this->data);
    
  }


  public function update()
  {
    $id = $this->input->post('id');
    $name = $this->input->post('name');
    if ($this->M_kondisi->update($id,$name)) {
      redirect('admin/kondisi','refresh');    
    }else {

    }
  }

  public function add()
  {
    $name = $this->input->post('kondisi');
    if ($this->M_kondisi->add($name)) {
      redirect('admin/kondisi','refresh');    
    }else {
    }
  }

  public function delete()
  {
    $id = $this->input->get('id');
    $this->M_kondisi->delete($id);
    redirect('admin/kondisi','refresh');
  }

}

/* End of file Ruang.php */


?>