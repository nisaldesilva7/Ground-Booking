<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminreg_m extends CI_Model {
  // declare private variable
 // private $_userID;
  private $_userName;
  private $_password;
  
  public function setUserID($a_id) {
    $this->_userID = $a_id;
  }
  public function setUserName($userName) {
    $this->_userName = $userName;
  }
  public function setPassword($password) {
    $this->_password = $password;
  }
    public function createUser() {
        $data = array(
            'username' => $this->_userName,
            'password' => $this->_password,
        );
        $this->db->insert('admin', $data);
        return $this->db->insert_id();
    }
}
?>