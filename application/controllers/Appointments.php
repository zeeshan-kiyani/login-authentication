<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Appointments extends CI_Controller {
    public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('appointment_model');
		$this->load->database();
    }
    public function book_appointment()
	{
        if($this->input->post('book_appointment'))
		{
			$data['doctor_name']=$this->input->post('doctor_name');
			$data['age']=$this->input->post('age');
			$data['gender']=$this->input->post('gender');
			$data['appointment_date']=$this->input->post('appointment_date');
			$data['patient_id']=$this->session->userdata('userId');
            $appointment=$this->appointment_model->bookAppointment($data);
			if($appointment){
			    $resp['appointment_msg'] =  "Appointment Book Successfully";
			}
			else{
                $resp['appointment_msg'] =  "Appointment Book Failed";
			}
		}
		$this->load->view('book_appointment',@$resp);
	}
}
