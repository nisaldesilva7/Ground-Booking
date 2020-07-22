<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminreg_c extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('adminreg_m', 'user');
    }
  // Dashboard
  public function index()
  {
  //$data['title'] = 'Dashboard - Tech Arise';
    //    $data['metaDescription'] = 'Dashboard';
    //    $data['metaKeywords'] = 'Dashboard';
        $this->load->view('index.php/admin/register');
  }   
  // Register
  public function register()
  {
  //$data['title'] = 'Register - Tech Arise';
    //    $data['metaDescription'] = 'Register';
    //    $data['metaKeywords'] = 'Register';   
        $this->load->view('admin/register');
  }
  // Action Register
  public function actionRegister()
  {
    $this->load->library('form_validation');
    // field name, error message, validation rules
    $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
    $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');

    if($this->form_validation->run() == FALSE) {
      $this->register();
    } 
    else {
      // post values
      $name = $this->input->post('name');
      $username = $this->input->post('username');
      $password = $this->input->post('password');
      $password = $this->input->post('password');

      // set post values
      $this->user->setUserName($username);
      $this->user->setPassword($password);
      // insert values in database
      $this->user->createUser();
      redirect('welcome/adminlog');
    }
  }
}
?>