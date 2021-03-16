<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Apply_now_model extends CI_Model{


  public function get_applied_data()
  {
        
        // $query = $this->db->get('apply_now');  
        // return $query; 

        $query=$this->db->query("select * from apply_now");
	       return $query->result();
  }




}

?>