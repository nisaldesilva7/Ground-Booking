<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ground_m extends CI_Model{

	public function getBlog(){   //view data ascendineg order by created at
		$this->db->order_by('g_id','asc');
		$this->db->limit(15); 			
		$query = $this->db->get('grounds');
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}
	public function getoneBlog($g_id){   //view data ascendineg order by created at
		$this->db->where('g_id', $g_id);
		$query = $this->db->get('grounds');	
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	public function submit(){ // create record 
		$field = array(
			'g_name'=>$this->input->post('g_name'),
			'g_size'=>$this->input->post('g_size'),
			'g_location'=>$this->input->post('g_location'),
			'g_prize'=>$this->input->post('g_prize'),
			'g_category'=>$this->input->post('g_category'),
			'g_light'=>$this->input->post('g_light')

			);
		$this->db->insert('grounds', $field);
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function getBlogById($g_id){ //retrive the id
		$this->db->where('g_id', $g_id);
		$query = $this->db->get('grounds');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function update(){	// update record function
		$id = $this->input->post('txt_hidden');
		
		$field = array(
			'g_name'=>$this->input->post('g_name'),
			'g_size'=>$this->input->post('g_size'),
			'g_location'=>$this->input->post('g_location'),
			'g_prize'=>$this->input->post('g_prize'),
			'g_category'=>$this->input->post('g_category'),
			'g_light'=>$this->input->post('g_light')
			);
		$this->db->where('g_id', $g_id);
		$this->db->update('grounds', $field);
		echo $this->db->last_query();extit;

		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

	public function delete($g_id){	// delete function
		$this->db->where('g_id', $g_id);
		$this->db->delete('grounds');
		if($this->db->affected_rows() > 0){
			return true;
		}else{
			return false;
		}
	}

}