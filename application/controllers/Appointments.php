<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointments extends CI_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('appointment_model');
		$this->load->database();
    }
	public function appointments()
	{
		$this->load->helper('url');
		$resp['appoinments'] = $this->appointment_model->getAllApointments();
		$this->load->view('appointment_logs',@$resp);
	}
    public function book_appointment()
	{

		echo $this->session->userdata('userId');
		if($this->session->userdata('userId') && $this->session->userdata('userId') !== NULL && $this->session->userdata('userId') !== ''){
			if($this->input->post('book_appointment'))
			{
				$data['doctor_name']=$this->input->post('doctor_name');
				$data['age']=$this->input->post('age');
				$data['gender']=$this->input->post('gender');
				$data['appointment_date']=$this->input->post('appointment_date');
				$data['patient_id']=$this->session->userdata('userId');
				$appointment=$this->appointment_model->bookAppointment($data);
				if($appointment){
					$resp['appointment_msg'] =  "<small style='color:green'>Appointment Book Successfully</small>";
				}
				else{
					$resp['appointment_msg'] =  "<small style ='color : red'>Appointment Book Failed</small>";
				}
			}
			$this->load->view('book_appointment',@$resp);
		}
		else{
			$data['error']="<small style='color:red'>Login first to book the appointment!</small>";
			$this->load->view('login',@$data);
		}
	}
}
