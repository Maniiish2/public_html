<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manish extends CI_Controller {

	public function index()
	{
		echo "Manish";

		print_r($this->input->post());

	   return	print_r('hello ajax');

	   
	}
}
