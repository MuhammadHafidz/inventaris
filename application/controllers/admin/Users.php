<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

  private $data = [
    'title' => 'Admin-Users',
    'username' => 'custom',
    'data' => []
  ];

  
  public function __construct()
  {
    parent::__construct();
    $this->load->model('M_users'); 
    
    if (!$this->session->login || $this->session->role != 2) {
      
      redirect('auth','refresh');
      
    }
    $this->data['username'] = $this->session->name;    
  }
  
  public function index()
  { 
    $this->data['data'] = $this->M_users->getUsers();
    $this->data['role'] = $this->db->get('role')->result();
    $this->load->view('admin/users',$this->data);
    // echo json_encode($this->data['data']);
    
  }


  public function update()
  {
    $data = [
      'ID_ROLE' => $this->input->post('role'),
      'ID_USERS' => $this->input->post('id'),
      'NAMA' => $this->input->post('name'),
      'USERNAME' => $this->input->post('username')
    ];
    if ($this->M_users->update($data)) {
      redirect('admin/users','refresh');    
    }else {

    }
  }

  public function updatepassword()
  {
    $id = $this->input->post('id');
    // $chck = $this->M_users->getIdUsers($id);
    // if (!$chck) {
    //   if (password_verify($this->input->post('oldpassword'),$chck->PASSWORD)) {
    //   }else {
    //     echo "<script>alert('Password Salah')</script>";        # code...
    //   }
    // }
    $data = [
      'ID_USERS' => $id,
      'PASSWORD' => password_hash($this->input->post('password'),PASSWORD_BCRYPT)
    ];
    if ($this->M_users->update($data)) {
      redirect('admin/users','refresh');    
    }
  }

  public function add()
  {
    $data= [
      'USERNAME' => $this->input->post('username'),
      'ID_ROLE' => $this->input->post('role'),
      'NAMA' => $this->input->post('name'),
      'PASSWORD' => password_hash($this->input->post('name'),PASSWORD_BCRYPT)
    ];
    if ($this->M_users->add($data)) {
      redirect('admin/users','refresh');    
    }else {
    }
  }

  public function delete()
  {
    $id = $this->input->get('id');
    $this->M_users->delete($id);
    redirect('admin/users','refresh');
  }

}

/* End of file Ruang.php */


?>