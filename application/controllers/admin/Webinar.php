<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Webinar extends my_Controller{


	function __construct(){
		parent::__construct();
		auth_check(); // check login auth

		$this->rbac->check_module_access();

        $this->load->model('admin/Webinar_model','webinar');
	}

    function index (){
    

        $data['title'] = 'Webinar List';
        $data['result']=$this->webinar->view();
      
      
              $this->load->view('admin/includes/_header');
              $this->load->view('admin/webinar/view', $data);
              $this->load->view('admin/includes/_footer');

    }
    function add_webinar()
    {

        if ($this->input->post('webinar')) {
     
            
            $this->form_validation->set_rules('webinar', 'webinar', 'trim|required');
      
      
      
            if ($this->form_validation->run() == FALSE) {
                          $data = array(
                              'errors' => validation_errors()
                          );
                          $this->session->set_flashdata('form_data', $this->input->post());
                          $this->session->set_flashdata('errors', $data['errors']);
                          redirect(base_url('admin/Webinar/add_webinar'),'refresh');
                      }else{
                          $result=$this->webinar->add_webinar($this->input->post());
      
                          if ($result) {
                              $this->session->set_flashdata('success', 'Webinar added successfully');	
                              redirect(base_url('admin/Webinar/add_webinar', 'refresh'));
                          }
                      }
        }else{
      
            $data['title'] = 'Admin List';

            $this->load->view('admin/includes/_header');
            $this->load->view('admin/webinar/add_webinar', $data);
            $this->load->view('admin/includes/_footer');
        }
       
    }

    function delete()
    {
        $this->db->where('id',$id);
        return $ci->db->delete('webinar');
    
    
    }

    
}