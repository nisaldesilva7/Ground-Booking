<?php
defined('BASEPATH') OR exit('No direct script access allowed');


 class filter_c extends CI_Controller {  
     
	function __construct(){
		parent:: __construct();
		$this->load->model('filter_m', 'f');   //load model
	}

	function filtering(){
		$g_category= $this->input->post('g_category');
		$g_light= $this->input->post('g_light');  
		$g_location= $this->input->post('g_location');  
		$g_size= $this->input->post('g_size');  

		$data['blogs']=$this->f->getCategory($g_category,$g_light,$g_location,$g_size);
		$this->load->view('filters/filter', $data); 

	}

}