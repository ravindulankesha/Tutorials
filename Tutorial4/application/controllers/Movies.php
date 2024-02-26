<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Movies extends CI_Controller {
    function __construct()
    {
        parent::__construct();
        
        $this->load->model('Moviemodel');
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */
	public function index()
	{
		$this->load->view('movie_form',array('result'=>''));
	}

    public function search()
	{
		$data= $this->input->post('genre'); 
        $returnedFilms=$this->Moviemodel->searchFilm($data);
        if($returnedFilms==''){
            $film_array=array('result'=>'nothing');
        }
        else{
            $film_array=array('result'=> $returnedFilms);
        }
        $this->load->view('movie_form',$film_array);
	}

    public function allmovies()
	{   
        $returnedFilms=$this->Moviemodel->allFilms();
        if($returnedFilms==''){
            $film_array=array('result'=>'nothing');
        }
        else{
            $film_array=array('result'=> $returnedFilms);
        }
        $this->load->view('movie_form',$film_array);
	}

}