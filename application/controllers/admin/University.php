<?php defined('BASEPATH') OR exit('No direct script access allowed');
class University extends my_Controller{


	function __construct(){
		parent::__construct();
		auth_check(); // check login auth

		$this->rbac->check_module_access();
		$this->load->model('admin/Course_model','add_university');

	}

    function index (){

		
        $data['title'] = 'University List';
        $data['result']=$this->add_university->view_university();
      
      
              $this->load->view('admin/includes/_header');
              $this->load->view('admin/course/view_university', $data);
              $this->load->view('admin/includes/_footer');

  }
    
      
function add_university(){

	if ($this->input->post('university')) {
	   
		$this->form_validation->set_rules('university', 'University', 'trim|is_unique[university.university]|required');
  
  
  
		if ($this->form_validation->run() == FALSE) {
					  $data = array(
						  'errors' => validation_errors()
					  );
					  $this->session->set_flashdata('form_data', $this->input->post());
					  $this->session->set_flashdata('errors', $data['errors']);
					  redirect(base_url('admin/Course/add_courses'),'refresh');
				  }else{
					  $result=$this->add_university->add_university($this->input->post());
  
					  if ($result) {
						  $this->session->set_flashdata('success', 'University added successfully');	
						  redirect(base_url('admin/Course/add_university', 'refresh'));
					  }
				  }
	}else{
  
	  $data['title'] = 'Add University';
  
	$data['university']= $this->add_university->view_university();
  
	$this->load->view('admin/includes/_header');
	$this->load->view('admin/course/add_university', $data);
	$this->load->view('admin/includes/_footer');
	}
  }



function delete($id)
 {
   
	   $this->db->where('id',$id);
	  
	   return $ci->db->delete('university');
  
  
  }
  

    }

    
