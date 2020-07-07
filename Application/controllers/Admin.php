<?php

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Index(){
		$this->load->view('shared/header.php');
		$this->load->view('home');
		$this->load->view('shared/footer');
	}

	public function category(){
		echo "This is category controller";
	}
}
