<?php
defined('BASEPATH') OR exit('No direct script access allowed');


 class ground_c extends CI_Controller {  
     
	function __construct(){
		parent:: __construct();
		$this->load->model('ground_m', 'm');   //load model
	}

	function index(){  //home page
		$data['blogs'] = $this->m->getBlog();
		//$this->load->view('ground/layout/header');
		$this->load->view('ground/blog/index', $data);
		$this->load->view('ground/layout/footer');
	}

	public function add(){ 	// add info page
		$this->load->view('ground/layout/header');
		$this->load->view('ground/blog/add');
		$this->load->view('ground/layout/footer');
	}

	public function submit(){
		$result = $this->m->submit();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record added successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to add record');
		}
		redirect(base_url('index.php/ground_c/index'));
	}

	public function edit($g_id){		//modify page
		$data['blog'] = $this->m->getBlogById($g_id);
		$this->load->view('ground/layout/header');
		$this->load->view('ground/blog/edit', $data);
		$this->load->view('ground/layout/footer');
	}

	public function update(){
		$result = $this->m->update();
		if($result){
			$this->session->set_flashdata('success_msg', 'Record updated successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to update record');
		}
		redirect(base_url('index.php/ground_c/index'));
	}

	public function delete($g_id){
		$result = $this->m->delete($g_id);
		if($result){
			$this->session->set_flashdata('success_msg', 'Record deleted successfully');
		}else{
			$this->session->set_flashdata('error_msg', 'Faill to delete record');
		}
		redirect(base_url('index.php/ground_c'));
	}

}