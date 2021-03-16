<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Apply_now extends CI_Controller {

	function __construct() {
        parent::__construct();
        $this->load->model('Apply_now_model');
        $this->load->model('admin/Course_model','Course_model');


	}




	public function index()
    {


        $captcha_response = trim($this->input->post('g-recaptcha-response'));
    
           // if($captcha_response != '')
           if($this->input->post('universitys'))
            { 
            
           
                $this->form_validation->set_rules('courses','Course-Name', 'trim|required');
				$this->form_validation->set_rules('universitys', 'University', 'trim|required');
				$this->form_validation->set_rules('name', 'Name', 'trim|required');
				$this->form_validation->set_rules('phone', 'Phone', 'trim|required');
				$this->form_validation->set_rules('standard', 'Standard', 'trim|required');
				$this->form_validation->set_rules('college', ' Name of College ', 'trim|required');
				$this->form_validation->set_rules('sex', 'Gender', 'trim|required');
				$this->form_validation->set_rules('dob', 'Date of Birth', 'trim|required');
				$this->form_validation->set_rules('payment', 'Payment', 'trim|required');
				$this->form_validation->set_rules('scholarship', 'Scholarship', 'trim|required');
				$this->form_validation->set_rules('message', 'Message', 'trim|required');
				$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');

				if ($this->form_validation->run() == FALSE) {
					$data = array(
						'errors' => validation_errors()
					);
					$this->session->set_flashdata('form_data', $this->input->post());
					$this->session->set_flashdata('errors', $data['errors']);
                   redirect(base_url('Apply_now/index','refresh'));
				}else{

                    if ($captcha_response != '') {
                        $keySecret = '6LeHo3kaAAAAADms4C8Ra3oMhRdUSP8Qdz0zh0xZ';
    
                        $check = array(
                        'secret'		=>	$keySecret,
                        'response'		=>	$this->input->post('g-recaptcha-response')
                    );
    
                        $startProcess = curl_init();
    
                        curl_setopt($startProcess, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
    
                        curl_setopt($startProcess, CURLOPT_POST, true);
    
                        curl_setopt($startProcess, CURLOPT_POSTFIELDS, http_build_query($check));
    
                        curl_setopt($startProcess, CURLOPT_SSL_VERIFYPEER, false);
    
                        curl_setopt($startProcess, CURLOPT_RETURNTRANSFER, true);
    
                        $receiveData = curl_exec($startProcess);
    
                        $finalResponse = json_decode($receiveData, true);

                        if ($finalResponse['success']) {
                            $contactData = array(
                        'course'                => $this->input->post('courses', true),
                        'university'            => $this->input->post('universitys', true),
                        'name'                  => $this->input->post('name', true),
                        'email'                 => $this->input->post('email', true),
                        'phone'                 => $this->input->post('phone', true),
                        'standard'              => $this->input->post('standard', true),
                        'college'               => $this->input->post('college', true),
                        'sex'                   => $this->input->post('sex', true),
                        'dob'                   => $this->input->post('dob', true),
                        'payment'               => $this->input->post('payment', true),
                        'scholarship'           => $this->input->post('scholarship', true),
                        'message'               => $this->input->post('message', true)
                    );


                            $result  = $this->Apply_now_model->apply_now_insert($contactData);
                            if ($result) {
                                $this->session->set_flashdata('success', 'Thank you! We Will Contact You Soon!!!!');
                                redirect(base_url('Apply_now', 'refresh'));
                            }
                        } else {
                            $this->session->set_flashdata('success', 'Validation Fail Try Again');
                            redirect(base_url('Apply_now', 'refresh'));
                        }
                    }else{
                        $this->session->set_flashdata('success', 'Validation Fail Try Again');
                        redirect(base_url('Apply_now', 'refresh'));

                    }


            }

        }else{        


            $data['view_uni']=$this->Course_model->view_university();
            $data['view_course']=$this->Course_model->view_course();
            $data['view_Webinar']=$this->Course_model->view_Webinar();
            $data['view_college']=$this->Course_model->view_college();

        
            $this->load->view('front/include/header');
    		$this->load->view('front/applynow',$data);
    		$this->load->view('front/include/footer');

     }

    } 

}
