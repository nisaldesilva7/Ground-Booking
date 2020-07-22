<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class register_m extends CI_Model {
  // declare private variable
  private $_userID;
  private $_name;
  private $_userName;
  private $_email;
  private $_password;
  private $_number;
  
  public function setUserID($c_id) {
    $this->_userID = $c_id;
  }
  public function setName($name) {
    $this->_name = $name;
  }
  public function setUserName($userName) {
    $this->_userName = $userName;
  }
  public function setEmail($email) {
    $this->_email = $email;
  }
  public function setPassword($password) {
    $this->_password = $password;
  }
  public function setNumber($number) {
    $this->_number = $number;
  } 
    
    public function createUser() {
        $data = array(
            'c_name' => $this->_name,
            'c_email' => $this->_email,
            'username' => $this->_userName,
            'password' => $this->_password,
            'c_number' => $this->_number,
        );
        $this->db->insert('customer', $data);
        return $this->db->insert_id();
    }
}
?>