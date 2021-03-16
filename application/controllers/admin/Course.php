<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Course extends My_Controller{

function __construct() {

  parent::__construct();
 $this->load->model('admin/Course_model','course');
 $this->load->helper('common_helper');
}

function index() {


  $data['title'] = 'Course List';
  $data['course']=$this->course->view_course();


		$this->load->view('admin/includes/_header');
		$this->load->view('admin/course/view_course', $data);
		$this->load->view('admin/includes/_footer');
}

public function datatable_json(){

    
  $records['data']=$this->course->view_course();

     $data = array();

     $i=0;
     foreach ($records['data']   as $row) 
     {  
      
       $data[]= array(
         ++$i,
         $row->course,		
       );
     }
     $records['data']=$data;
     echo json_encode($records);	


}

function add_courses(){  

    if($this->input->post('course')) {

      $this->form_validation->set_rules('course', 'Course', 'trim|required');

      if ($this->form_validation->run() == FALSE) {
          $data = array(
            'errors' => validation_errors()
          );
          $this->session->set_flashdata('form_data', $this->input->post());
          $this->session->set_flashdata('errors', $data['errors']);
          redirect(base_url('admin/Course/add_courses'),'refresh');
        }else{
                    $result=$this->course->add_course($this->input->post());

                    if ($result) {
                        $this->session->set_flashdata('success', 'Course added successfully');	
                        redirect(base_url('admin/Course/add_courses', 'refresh'));
                    }
                }
  }else{


    $data['title'] = 'Add Course';

    $data['university']= $this->course->view_university();

    $this->load->view('admin/includes/_header');
    $this->load->view('admin/course/add_course', $data);
    $this->load->view('admin/includes/_footer');
    
  }

}
function delete_course($id)
{
 
           $this->db->where('id',$id);
    return $ci->db->delete('course');


}


}



?>
