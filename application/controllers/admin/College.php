<?php defined('BASEPATH') OR exit('No direct script access allowed');

class College extends My_Controller
{
    public function __construct()
    {
        parent::__construct();

        $this->load->model('admin/College_model','College');
        $this->load->model('admin/Course_model','university');

    }

    public function index(){



        $data['title'] = 'College List';
        $data['result']=$this->university->view_college();
      
      
              $this->load->view('admin/includes/_header');
              $this->load->view('admin/college/view', $data);
              $this->load->view('admin/includes/_footer');

    }

     function add_college(){
    

            if ($this->input->post('col_name')) {
               
                $this->form_validation->set_rules('col_name', 'College', 'trim|required');
          
          
          
                if ($this->form_validation->run() == FALSE) {
                              $data = array(
                                  'errors' => validation_errors()
                              );
                              $this->session->set_flashdata('form_data', $this->input->post());
                              $this->session->set_flashdata('errors', $data['errors']);
                              redirect(base_url('admin/College/add_college'),'refresh');
                          }else{
                              $result=$this->College->add_college($this->input->post());
          
                              if ($result) {
                                  $this->session->set_flashdata('success', 'College added successfully');	
                                  redirect(base_url('admin/College/add_college'),'refresh');
                                }
                          }
            }else{
          
              $data['title'] = 'Add College';
          
            $data['university']= $this->university->view_university();
          
            $this->load->view('admin/includes/_header');
            $this->load->view('admin/college/add_college', $data);
            $this->load->view('admin/includes/_footer');
          
        }
          
          
        
    }


function delete($id)
{


           $this->db->where('id',$id);
    return $ci->db->delete('college');


}



}
