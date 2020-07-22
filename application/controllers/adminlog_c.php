<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class adminlog_c extends CI_Controller {

	function login()  
      {  
           //http://localhost/tutorial/codeigniter/main/login  
           //$data['title'] = 'CodeIgniter Simple Login Form With Sessions';  
           $this->load->view("admin/login");  
      }  
      function login_validation()  
      {  
          // $this->load->library('form_validation');  
           $this->form_validation->set_rules('username', 'Username', 'required');  
           $this->form_validation->set_rules('password', 'Password', 'required');  
           if($this->form_validation->run())  
           {  
                //true  
                $username = $this->input->post('username');  
                $password = $this->input->post('password');  
                //model function  
                $this->load->model('adminlog_m');  
                if($this->adminlog_m->can_login($username, $password))  
                {  
                     $session_data = array(  
                          'username'     =>     $username  
                     );  
                     $this->session->set_userdata($session_data);  
                     redirect(base_url() . 'index.php/adminlog_c/enter');  
                }  
                else  
                {  
                     $this->session->set_flashdata('error', 'Invalid Username and Password');  
                     redirect(base_url() . 'index.php/adminlog_c/login');  
                }  
           }  
           else  
           {  
                //false  
                $this->login();  
           }  
      }  
      function enter(){  
           if($this->session->userdata('username') != '')  
           {  
               
               $this->load->view('admin/adminpage');  

               // echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  
               // echo '<label><a href="'.base_url().'index.php/adminlog_c/logout">Logout</a></label>';
                  
           }  
           else  
           {  
                redirect(base_url() . 'index.php/adminlog_c/login');  
           }  
      }  
      function logout()  
      {  
           $this->session->unset_userdata('username');  
           redirect(base_url() . 'index.php/adminlog_c/login');  
      }  

}

	
	

