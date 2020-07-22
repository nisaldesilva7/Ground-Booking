<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class booking_c extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }
  // Dashboard
  public function bookGID($g_id)
  {
    $this->load->model('booking_m');
    $data['gid'] = $g_id;
    $data['blogs'] = $this->booking_m->GetGid($g_id);
		$this->load->view('book/book',$data);
  }   

  public function submitBook(){
    $field = array(
      'g_id'=>$this->input->post('gid'),
      'username'=>$this->input->post('username'),
      'dateb'=>$this->input->post('dateb'),
      );

      print_r($field['g_id']);
    $this->load->model('booking_m');
    $result = $this->booking_m->submit($field);
    
		if($result){
      $this->session->set_flashdata('success_msg', 'Record added successfully');
      redirect(base_url('index.php/welcome/ground'));
    }
    else{
      $this->session->set_flashdata('error_msg', 'Faill to add record');
      redirect(base_url('index.php/booking_c/failedBook'));

		}
	}


  // Action Register
  public function actionRegister()
  {
    $this->load->library('form_validation');
    // field name, error message, validation rules
    $this->form_validation->set_rules('username', 'User Name', 'trim|required|min_length[4]');
    $this->form_validation->set_rules('email', 'Your Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[4]|max_length[32]');
    $this->form_validation->set_rules('number', 'Number', 'trim|required|min_length[10]|max_length[10]');
    $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');

    if($this->form_validation->run() == FALSE) {
      $this->register();
    } 
    else {
      // post values
      $name = $this->input->post('name');
      $username = $this->input->post('username');
      $email = $this->input->post('email');
      $number = $this->input->post('number');
      $password = $this->input->post('password');
      $password = $this->input->post('password');

      // set post values
      $this->user->setName($name);
      $this->user->setUserName($username);
      $this->user->setEmail($email);
      $this->user->setPassword($password);
      $this->user->setNumber($number);
      // insert values in database
      $this->user->createUser();
      redirect('welcome/login');
    }
  }

  public function failedBook()
  {
   
		$this->load->view('book/bookfail');
  }   
}
?>