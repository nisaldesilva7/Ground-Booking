<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
	parent:: __construct();
		$this->load->helper('url');
		$this->load->model('model_m','m');
		$this->load->model('ground_m');


	}

	public function index()
	{
		$data['blogs'] = $this->ground_m->getBlog();
		$this->load->view('home',$data);
	}

	public function reg()
	{
		//$data['blogs'] = $this->m->getBlog();
		$this->load->view('reg/register');
	}
	
	public function login()
	{
		$this->load->view('reg/login');

	}

	public function ground()
	{
		$data['blogs'] = $this->m->getBlog();
		$this->load->view('ground', $data);

	}

	public function contact()
	{
		$this->load->view('contact');
		
	}

	public function about()
	{
		$this->load->view('about');

	}

	public function adminlog(){
		$this->load->view('admin/login');
	}

	public function adminreg(){
		$this->load->view('admin/register');
	}

	public function viewcus(){
		$this->load->model('customer_m','c');
		$data['blogs'] = $this->c->getBlog();
		$this->load->view('reg/cuspage', $data);
	}



	public function viewbookings(){
		$this->load->model('booking_m','b');
		$data['blogs'] = $this->b->getBlog();
		$this->load->view('admin/viewbooks', $data);
	}



	public function testing(){
		$this->load->view('test/about');
	}


	
	





}
