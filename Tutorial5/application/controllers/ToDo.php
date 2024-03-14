<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ToDo extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->library('session');
        $this->load->model('ToDoList');
    }

    public function index(){
        $this->session->userId="";
        if($this->session->userId=""){
        }
        else{
            $id=uniqid();
            $this->session->userId=$id;
            $this->load->view('toDo_form');
        }
    }

    public function handleForm(){
        $user_id= $this->session->userId;
        $action= $this->input->post('todo_action'); 
        $this->ToDoList->setData($user_id,$action);
    }
}