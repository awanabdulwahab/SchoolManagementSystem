<?php

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
	}

	public function Index(){
		$this->load->view('home');
	}

	public function category(){
		echo "This is category controller";
	}
}
