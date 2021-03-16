<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply_now_model extends CI_Model{


    public function apply_now_insert($data)
    {   
        $this->db->insert('apply_now', $data);
        return $this->db->insert_id();
    }
	
}

?>