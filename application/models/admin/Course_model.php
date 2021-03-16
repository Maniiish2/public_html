<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Course_model extends CI_Model{

    function checkuniversity(){

        return $this->db->select('university')->from('university')->get()->result();
    }

 function add_university($data){
    $this->db->insert('university', $data);
    return true;

}

 function add_course($data){
    $this->db->insert('course', $data);
    return true;

}

function view_university(){
    return $this->db->select('*')->from('university')->get()->result();
}

function view_course(){
    return $this->db->select('*')->from('course')->get()->result();
}
function view_webinar(){
    return $this->db->select('*')->from('Webinar')->get()->result();
}
function view_college(){

    return $this->db->query('SELECT college.col_name,college.id as colz_id,university.university FROM college inner JOIN university ON college.univ_id = university.id ')->result();//('colz.id,univ_id,university,university.id,col_name')->from('college colz')->join('colz', 'colz.univ_id = university.id')->get()->result();
}

}




?>