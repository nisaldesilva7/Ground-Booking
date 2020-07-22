<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class booking_m extends CI_Model{

	public function getBlog(){   //view data ascendineg order by created at
		$query = $this->db->get('booking'); 	
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function GetGid($g_id){ //retrive the id
		$this->db->where('g_id', $g_id);
		$query = $this->db->get('grounds');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function submit($field){
		 $this->db->where('g_id', $field['g_id']);
		 $this->db->where('dateb', $field['dateb']);
		$query= $this->db->get('booking');
		$query= $query->result_array();

		if(count($query)==0){
			$this->db->insert('booking', $field);
			if($this->db->affected_rows() > 0){
			  return true;
			}else{
			  return false;
			}


		}
		else {
			
			echo "RECORD ADDED FAILED; GROUND BOOK ALREADY";

		}
			
			
		  

	}

}


	
