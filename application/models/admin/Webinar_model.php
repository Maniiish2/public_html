<?php defined('BASEPATH') OR exit('No direct script access allowed');


class Webinar_model extends CI_Model{



 function add_webinar($data){
    $this->db->insert('Webinar', $data);
    return true;

}

function view(){
    return $this->db->select('*')->from('Webinar')->get()->result();
}

}



?>