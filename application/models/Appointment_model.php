<?php
 class Appointment_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    //Register user first step
    public function bookAppointment($data){
      $this->db->set('doctor_name',$data['doctor_name']);
      $this->db->set('age',$data['age'] );
      $this->db->set('gender',$data['gender'] );
      $this->db->set('appointment_date',$data['appointment_date'] );
      $this->db->set('patient_id',$data['patient_id'] );
      $this->db->insert('doctor_appointment',$data);
      return $this->db->insert_id();
    }
 }
