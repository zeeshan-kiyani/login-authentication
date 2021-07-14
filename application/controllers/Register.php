<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('user_model');
		$this->load->model('appointment_model');
		$this->load->library('form_validation');
    }
	public function deleteUser(){
		$id=$this->input->get('id');
		$this->user_model->deleteUser($id);
		$resp['appoinments'] = $this->appointment_model->getAllApointments();
		$this->load->view('appointment_logs',@$resp);
	}
	public function register_user()
	{
		$this->load->helper('url');
		$this->load->view('register_user');
		if($this->input->post('save'))
		{
			$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
			if($this->form_validation->run() == FALSE){
				redirect('Register/register_user/'.'EmailAlreadyExsist'); 
			}
			$data['user_name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$data['password']=md5($this->input->post('password'));
			$data['contact_no']=$this->input->post('contact_no');
            $user=$this->user_model->registerUser($data);
			echo $user;
			if($user){
				redirect('Register/code_authentication/'.$user); 
			}
			else{
					echo "Insert error !";
			}
		}
	}
	public function questions($user_id=null)
	{
		$this->load->helper('url');
		if($this->input->post('save'))
		{
			$answer =md5($this->input->post('answer'));
			$answer=$this->user_model->addAnswer($answer,$user_id);
			// echo $answer;
			if($answer){
				redirect('Login/index'); 
			}
			
		}
		$this->load->view('questionair');
	}
	public function code_authentication($user_id=null)
	{	
		$this->load->helper('url');	
		if($this->input->post('save'))
		{
			$pattern =md5($this->input->post('pattern_code'));
			$pattern=$this->user_model->addSecurityPattern($pattern,$user_id);
			if($pattern > 0){
				redirect('Register/questions/'.$user_id); 
			}
			
		}
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
