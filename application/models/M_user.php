<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
 
class M_user extends CI_Model {
 
  public $tableName;
 
  public function __construct() {
      parent::__construct();
      $this->tableName = "tb_user";
  }
 
  public function selectAll(){
    $this->db->select('*');
    $this->db->from($this->tableName);

    return $this->db->get();
  }

  public function insert($data){
    $this->db->insert($this->tableName,$data);

    return $this->db->insert_id();
  }

  public function update($id,$data){
    $this->db->set($data);
    $this->db->where('id',$id);
    $this->db->update($this->tableName);
  }

  public function delete($id){
    $this->db->where('id',$id);
    $this->db->delete($this->tableName);
  }

  public function selectById($id){
    $this->db->select('*');
    $this->db->from($this->tableName);
    $this->db->where('id',$id);

    return $this->db->get();
  }

  public function selectByEmailPass($email,$pwd){
    $this->db->select('*');
    $this->db->from($this->tableName);
    $this->db->where('email',$email);
    $this->db->where('password',$pwd); 

    return $this->db->get();
  }

  
  public function checkLogin($email,$pwd){
    $this->db->select('*');
    $this->db->from($this->tableName);
    $this->db->where('email',$email);
    $this->db->where('password',$pwd);

    if($this->db->get()->num_rows() > 0){
      return true;
    }else{
      return false;
    }
  }



}