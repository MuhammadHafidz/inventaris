<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class M_users extends CI_Model {

  public function getUsers()
  {
    $this->db->select('*');
    $this->db->from('users');
    $this->db->join('role', 'role.ID_ROLE = users.ID_ROLE');
    return $this->db->get()->result();
  }

  public function getIdUsers($id)
  {
    return $this->db->from('users')->where('ID_USERS',$id)->get()->row();

  }

  public function add($data)
  { 
    return $this->db->insert('users',$data);
  }

  public function delete($id)
  {
    $this->db->where('ID_USERS', $id);
    return $this->db->delete('users');
  }

  public function update($data)
  {
    $this->db->where('ID_USERS', $data['ID_USERS']);
    return $this->db->update('users', $data);
  }


}

/* End of file Users.php */


?>