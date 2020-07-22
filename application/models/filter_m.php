<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class filter_m extends CI_Model{

	function getCategory($g_category,$g_light,$g_location,$g_size){  
		$this->db->where('g_category', $g_category);
		$this->db->where('g_light', $g_light);

		//$this->db->select('g_id');    
		$query = $this->db->get('grounds');  
		//SELECT g_id * FROM grounds WHERE  g_category = '$g_category'  
		if($query->num_rows() > 0)  
		{  
			return $query->result();
		}  
		else  
		{  
			 return false;       
		}  
 }

}