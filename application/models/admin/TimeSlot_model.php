<?php defined('BASEPATH') OR exit('No direct script access allowed');


class TimeSlot_model extends CI_Model{



 function add_timeslot($data){
    $this->db->insert('timeSlot', $data);
    return true;

}

function view(){

  return $this->db->query('SELECT timeSlot.col_id,timeSlot.id as time_id,timeSlot.univ_id,timeSlot.time_slot,timeSlot.apply_type,timeSlot.course_webinar_id ,university.university,college.col_name, course.course FROM timeSlot inner JOIN university ON timeSlot.univ_id = university.id INNER JOIN college ON timeSlot.col_id = college.id inner JOIN course ON timeSlot.course_webinar_id = course.id')->result();

}

}



?>