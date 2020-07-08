<?php


class School extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Index(){

	}

	public function category(){
		if($this->input->method() == 'post'){
			print_r($_POST);
	}
	else{
			$this->load->view('shared/header.php');
			$this->load->view('category.php');
			$this->load->view('shared/footer.php');
		}
	}
}
