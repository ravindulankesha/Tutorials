<?php

class ToDoList extends CI_Model{
    function __construct()
    {
        $this->load->database();
    }
    
    public function setData($user_id,$action) {
        $data = array(
            'user_id' => $user_id,
            'action_title' => $action
        );
        
        $this->db->insert('users', $data);
    }
}