<?php


defined('BASEPATH') OR exit('No direct script access allowed');

class auth extends CI_Controller {

  private $data =[
    'title' => 'Login',
    'errors' => FALSE,
    'messages' => null,
    'table' => 'users'
  ];
  
  public function __construct()
  {
    parent::__construct();
    $this->load->library('form_validation');
    $this->load->model('M_auth');
    $this->load->model('M_log');
    
  }
  
  public function index()
  {
    $this->load->view('login',$this->data);
  }

  public function login()
  {
    $username = $this->input->post('username');
    $pass = $this->input->post('password');

    $login = $this->M_auth->getLogin($username);
    // echo json_encode($login);
    $this->M_log->add($username,$this->data['table'],'Login');

    if ( $login != null) {
      if (password_verify($pass,$login->PASSWORD)) {
        $sesi = [
          'login' => TRUE,
          'username' => $login->USERNAME,
          'name' => $login->NAMA,
          'role' => $login->ID_ROLE
        ];
        $this->session->set_userdata($sesi);
        $this->redir($login->ID_ROLE);
      }else {
        $this->data['errors'] = TRUE;
        $this->data['messages'] = "Password Salah";
        $this->load->view('login',$this->data);
      }
    } else {
      $this->data['errors'] = TRUE;
      $this->data['messages'] = "Username Not Found";
      $this->load->view('login',$this->data);
    }
    
  }

  private function redir($data)
  {
    switch($data){
      case 1 :
        redirect('users/dashboard','refresh');
        break;
      case 2 :
        redirect('admin/dashboard','refresh');
        break;
      case 3 :
        redirect('pimpinan/dashboard','refresh');
        break;
      default :
        break;
    }
  }

  public function logout()
  {   
    $this->M_log->add($this->session->username,$this->data['table'],'Logout');
    $this->session->set_userdata('login', FALSE);
    session_destroy();
    redirect('auth');
  }

}

/* End of file auth.php */


?>