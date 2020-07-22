<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class customer_m extends CI_Model{

	public function getBlog(){   //view data ascendineg order by created at
		$this->db->order_by('c_id', 'asc');		
		$query = $this->db->get('customer'); 	
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function getBlogById($c_id){ //retrive the id
		$this->db->where('c_id', $c_id);
		$query = $this->db->get('customer');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}


	
}