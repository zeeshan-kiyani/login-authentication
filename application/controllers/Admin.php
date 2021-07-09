<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		// $this->load->model('user_model');
		$this->load->database();
    }
    public function appointments()
	{
		$this->load->helper('url');
		$this->load->view('appointments');
	}
}
