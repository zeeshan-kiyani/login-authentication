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
    public function getAllApointments(){
      $output=$this->db->query('SELECT da.* ,u.user_name ,u.contact_no from doctor_appointment da inner join users u on da.patient_id = u.id')->result();
      return $output;
    }
    public function approveAppointment($id){
      $this->db->set('status', '1');
      $this->db->where('id', $id);
      $this->db->update('doctor_appointment');
   }
   public function rejectAppointment($id){
    $this->db->set('status', '2');
    $this->db->where('id', $id);
    $this->db->update('doctor_appointment');
 }
 }
