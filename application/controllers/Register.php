<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
    }
	public function register_user()
	{
		$this->load->helper('url');
		$this->load->view('register_user');
		if($this->input->post('save'))
		{
			$data['user_name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$data['password']=$this->input->post('password');
			$data['confirm-password']=$this->input->post('confirm-password');
			$data['gender']=$this->input->post('gender');
            $user=$this->user_model->registerUser($data);
			if($user){
				// echo $user;
				redirect('Register/code_authentication/'.$user); 
			        // $resp['customer_msg'] =  "user Saved Successfully";
					// $this->load->view('navbar');
					// $this->load->view('addCustomer',@$resp);
			}
			else{
					echo "Insert error !";
			}
		}
	}
	public function questions($user_id=null)
	{
		$this->load->helper('url');
		$this->load->view('questionair');
		if($this->input->post('save'))
		{
			$answer =$this->input->post('answer');
			$answer=$this->user_model->addAnswer($answer,$user_id);
			// echo $answer;
			if($answer){
				redirect('Register/index'); 
			}
			
		}
	}
	public function code_authentication($user_id=null)
	{	
		$this->load->helper('url');	
		$this->load->view('color_pattren');
		if($this->input->post('save'))
		{
			$pattern =$this->input->post('pattern_code');
			$pattern=$this->user_model->addSecurityPattern($pattern,$user_id);
			if($pattern > 0){
				redirect('Register/questions/'.$user_id); 
			}
			
		}
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
