<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		public function __construct() {
			parent::__construct();
			$this->load->helper('url');
			$this->load->model('user_model');
			$this->load->database();
		}
	public function patternAuthentication($user_id){
		$this->load->helper('url');
		if($this->input->post('login')){
			$pattern=$this->input->post('pattern_code');
			$que=$this->db->query("select * from users where pattern_password ='$pattern' and id = '$user_id'")->row();
				if($que)
				{
					if($que->id){
						if($que->status == 1 ){
							redirect('login/questionAuthentication/'.$que->id);
						}else{
							redirect('login');
						}
					}
				}
				else
				{
					$data['error']="<small style='color:red'>Invalid Pattern Password !</small>";
				}
		}
		$this->load->view('pattern_authentication',@$data);

	}
	public function questionAuthentication($user_id){
		$this->load->helper('url');
		if($this->input->post('login')){
			$answer=$this->input->post('answer');
			$que=$this->db->query("select * from users where question_password ='$answer' and id = '$user_id'")->row();
			if($que)
			{
				if($que->id){
					$this->session->set_userdata('userId', $que->id);
					if($que->status == 1 ){
						redirect('Appointments/book_appointment');
					}else{
						redirect('login');
					}
				}
			}
			else
			{
				$data['error']="<small style='color:red'>Invalid Answer  !</small>";
			}
		}
		$this->load->view('question_authentication',@$data);
	}
	public function index()
	{
		$this->load->helper('url');
		if($this->input->post('login'))
		{
			$email=$this->input->post('email');
			$password=$this->input->post('password');
			$que=$this->db->query("select * from users where email='$email' and password='$password'")->row();
			if($que)
			{
				if($que->id){
					// $this->session->set_userdata('userId', $que->id);
					if($que->status == 1 ){
						redirect('login/patternAuthentication/'.$que->id);
					}else{
						redirect('login');
					}
				}
			}
			else
			{
				$data['error']="<small style='color:red'>Invalid Email or Password !</small>";
			}
		}
		$this->load->view('login',@$data);
	}
	
}
