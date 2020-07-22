
<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class model_m extends CI_Model{
    public function getBlog(){   //view data ascendineg order by created at
		$this->db->order_by('g_id', 'asc');		
		$query = $this->db->get('grounds'); 	
		if($query->num_rows() > 0){
			return $query->result();
		}else{
			return false;
		}
	}

	
	

}