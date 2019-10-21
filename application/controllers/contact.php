<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {


        public function __construct(){
 	  	parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->helper('file');
		$this->load->library('form_validation');
	}

	public function index()
	{
		$this->load->view('contact/form');
	}

	public function confirm(){
	   	
		$this->form_validation->set_rules('company', '会社名', 'required');
		$this->form_validation->set_rules('name', 'お名前', 'required');
		$this->form_validation->set_rules('tel', '電話番号', 'required');
		$this->form_validation->set_rules('email', 'メールアドレス', 'required');
		$this->form_validation->set_rules('content', 'お問い合わせ内容', 'required');

		$this->form_validation->set_message('required','%sは必須内容です');

		$res = $this->form_validation->run();

		if($res){
	          $data['company'] = $this->input->post('company');
		  $data['name'] = $this->input->post('name');
		  $data['tel'] = $this->input->post('tel');
		  $data['email'] = $this->input->post('email');
		  $data['content'] = $this->input->post('content');

		  $this->load->view('contact/confirm', $data);
		}else{
		  $data['error_message'] = validation_errors();
		  $data['param'] = $this->input->post();

		  $this->laod->view('contact/form', $data); 
		}
	}

	public function thanks(){
		$post = $this->input->post();

		if($post){
		  
 		    $this->load->library('parser');
		  
		    $this->config->load('app', TRUE);
		  
		    $title = '7garden | 一点物サイト【lupinus】からお問い合わせです';
		    $message = $this->parser->parse('email/contact_new', $post, TRUE); 
		    $email = $this->config->item('app')['contact_email'];

		    $this->load->model('bll/Bll_email');

		    $result = $this->Bll_email->send_email($title, $message, $email);
		}
		
	}
}
