<?php defined('BASEPATH') OR exit('No direct script access allowed');
class TimeSlot extends my_Controller{


	function __construct(){
		parent::__construct();

		auth_check(); // check login auth

		$this->rbac->check_module_access();

		$this->load->model('admin/TimeSlot_model','timeslot');
		$this->load->model('admin/Course_model','course');
		$this->load->model('admin/College_model','College');

	}

    function index (){
    

        $data['title'] = 'timeSlot List';
        $data['result']=$this->timeslot->view();
      
      
              $this->load->view('admin/includes/_header');
              $this->load->view('admin/timeSlot/view', $data);
              $this->load->view('admin/includes/_footer');

	}

	function add_timeSlot(){
	
		if ($this->input->post('time_slot')) {
		
			$this->form_validation->set_rules('time_slot', 'Time-Slot', 'trim|required');
	
	
			if ($this->form_validation->run() == FALSE) {
						$data = array(
							'errors' => validation_errors()
						);
						$this->session->set_flashdata('form_data', $this->input->post());
						$this->session->set_flashdata('errors', $data['errors']);
						redirect(base_url('admin/TimeSlot/add_timeSlot'),'refresh');
					}else{
						//$result=$this->timeslot->add_timeSlot($this->input->post());

					if ($this->timeslot->add_timeSlot($this->input->post())){
							$this->session->set_flashdata('success', 'TimeSlot added successfully');	
							redirect(base_url('admin/TimeSlot/add_timeSlot', 'refresh'));
						}
					}
		}else{
	
		$data['title']        =    'Add TimeSlot';
		$data['university']   =    $this->course->view_university();
		$data['college']      =    $this->College->view_college();
		$data['course']       =    $this->course->view_course();


	
	
		$this->load->view('admin/includes/_header');
		$this->load->view('admin/timeSlot/add_timeslot', $data);
		$this->load->view('admin/includes/_footer');
		}
	}

	function view_College(){

		if(empty($this->input->post('univ_id')))
		{
			redirect(base_url('admin/TimeSlot'));
			exit;

		}
		

		$states = $this->db->select('*')->where('univ_id',$this->input->post('univ_id'))->get('college')->result_array();
		$options = array('' => 'Select Option') + array_column($states,'col_name','id');
		$html = form_dropdown('col_id',$options,'','class="form-control select2" required');
		$error =  array('msg' => $html);
	    //echo json_encode($error);
	    // echo json_encode($states);

		//print_r($states);
		foreach($states as $row){

			echo '<option value="'.$row['id'].'">'.$row['col_name'].'</option>';		}

	}


function delete($id)
{
 
           $this->db->where('id',$id);
    return $ci->db->delete('tmeSlot');


}

	
    
}