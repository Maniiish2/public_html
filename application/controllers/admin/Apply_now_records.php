<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Apply_now_records extends MY_Controller {

	function __construct(){
		parent::__construct();
		auth_check(); // check login auth

		$this->rbac->check_module_access();
	}


    function index()
    {


        $this->load->model('admin/Apply_now_model');


        $data['data'] = $this->Apply_now_model->get_applied_data();
        $this->load->view('admin/includes/_header');

        $this->load->view('admin/apply_now_view', $data);

        $this->load->view('admin/includes/_footer');

    }


}

?>
