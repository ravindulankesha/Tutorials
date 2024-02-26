<?php
defined ("BASEPATH") OR exit("No direct script access allowed");

class Dinosaurs extends CI_Controller {
    public function __construct() { 
        parent::__construct ();
        $this->load->model("DinosaursPeriods");
    }
    public function periods()
	{
		$this->load->view('linksToDinosaurs');
	} 

    public function getInfo($data)
	{
        $info= $this->DinosaursPeriods->info($data);
		$this->load->view('DinosaurInfo', $info);
        
	} 
}