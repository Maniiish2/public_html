<?php defined('BASEPATH') OR exit('No direct script access allowed');


class College_model extends CI_Model{

function add_college($data){
    $this->db->insert('college', $data);
    return true;

}

function view_college(){
    return $this->db->select('*')->from('college')->get()->result();
}

function get_college_by_univ_id($id)
{
    return $this->db->select('*')->from('college')->where('id',$id)->get->result();


}

}



?>