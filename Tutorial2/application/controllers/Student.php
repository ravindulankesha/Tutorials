<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Student extends CI_Controller {

	public function index()
	{
		$this->load->view('student_page',array('name' => 'ravindu weerathunga','age' => '23','course'=>'SE'));
	}

	public function addStudent(){
		$model=$this->load->model('Student');
		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email')
		);
		$model->insert_user($data);
		echo "User added successfully!";
	}
}
