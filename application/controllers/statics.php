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
}
