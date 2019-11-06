<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Statics extends CI_Controller {

        public function __construct(){
 	  	parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('file');
	}

	public function index()
	{
		$this->load->view('statics/index');
	}

  public function about(){
    $this->load->view('statics/about');
  }

  public function roomIndex(){
    $this->load->view('statics/roomIndex');
  }

  public function roomDetail(){
    $this->load->view('statics/roomDetail');
  }

  public function fee(){
    $this->load->view('statics/fee');
  }

  public function flow(){
    $this->load->view('statics/flow');
  }
}
