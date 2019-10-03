<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_auth extends CI_Model {
  
  public function __construct()
  {
    parent::__construct();
  }

  public function getLogin($username)
  {
    return $this->db->from('users')->where('username',$username)->get()->row();
  }
}
?>
