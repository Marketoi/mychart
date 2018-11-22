<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	public function __construct() {
		parent::__construct();

		$this->load->helper('url');
		// Load session library
		$this->load->library('session');

	}

	public function index()
	{
		if (!(isset($this->session->userdata['logged_in']))) {
			header("location: " . base_url() . "index.php/User_auth");
		}
		else {
			$this->load->view('header');
			$this->load->view('menu');
	    $this->load->view('chart');
			$this->load->view('footer_chart');
	    $this->load->view('footer');
		}
	}
}
