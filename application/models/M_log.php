<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class M_log extends CI_Model {

  public function add($users, $tabel, $do)
  {
    $data = [
      'users' => $users,
      'table_do' => $tabel,
      'do' => $do
    ];
    return $this->db->insert('log',$data);
  }

}

/* End of file M_log.php */


?>