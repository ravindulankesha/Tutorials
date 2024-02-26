<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Moviemodel extends CI_Model {

    function __construct()
    {
        $this->load->database();
    }
    
   public function searchFilm($data) {
        $query = $this->db->where('genre',$data)->from('films')->get()->result();
        return $query;
   }

   public function allFilms() {
        $query = $this->db->get('films')->result();
        return $query;
    }
}