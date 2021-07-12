<?php
 class User_model extends CI_Model{
    public function __construct()
    {
        parent::__construct();
    }
    //update security pattern in users 
    public function addSecurityPattern($pattern,$id) {
        $this->db->set('pattern_password', $pattern);
        $this->db->where('id', $id);
        $this->db->update('users');
        return $this->db->affected_rows();
    }
    //update security answer in users 
    public function addAnswer($answer,$id){
        $this->db->set('question_password', $answer);
        $this->db->set('status', '1');
        $this->db->where('id', $id);
        $this->db->update('users');
        return $this->db->affected_rows();
    }
    //Register user first step
    public function registerUser($data){
      $this->db->set('user_name',$data['user_name']);
      $this->db->set('email',$data['email'] );
      $this->db->set('password',$data['password'] );
    //   $this->db->set('confirm-password',$data['confirm-password'] );
      $this->db->set('contact_no',$data['contact_no'] );
      $this->db->insert('users',$data);
      return $this->db->insert_id();
    }
 }
