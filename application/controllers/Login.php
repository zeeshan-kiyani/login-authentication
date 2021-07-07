<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
    }
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('login');
	}
	public function register_user()
	{
		$this->load->helper('url');
		$this->load->view('register_user');
		if($this->input->post('save'))
		{
			$data['name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$data['password']=$this->input->post('password');
			$data['confirm-password']=$this->input->post('confirm-password');
			$data['gender']=$this->input->post('gender');
            $user=$this->user_model->registerUser($data);
			if($user){
			        $resp['customer_msg'] =  "user Saved Successfully";
					// $this->load->view('navbar');
					// $this->load->view('addCustomer',@$resp);
			}
			else{
					echo "Insert error !";
			}
		}
	}
	// public function login()
	// {
	// 	$this->load->view('login');
	// }
	public function questions()
	{
		$this->load->helper('url');

		$this->load->view('questionair');
	}
	public function code_authentication()
	{
		$this->load->helper('url');	
		$this->load->view('color_pattren');
	}
	public function book_appointment()
	{
		$this->load->helper('url');
		$this->load->view('book_appointment');
	}
	public function appointment_logs()
	{
		$this->load->helper('url');
		$this->load->view('appointment_logs');
	}
	
}
