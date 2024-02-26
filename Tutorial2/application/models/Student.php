<?php

class Student extends CI_Model {
    
    
    public function insert($data) {
        $this->db->insert('users', $data);
    }
}