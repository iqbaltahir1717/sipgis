<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class m_widget extends CI_Model{
  function __construct() {
    parent::__construct();
    $this->load->database();  
  }
  public function total_mahasiswa(){
    $query  = $this->db->query("SELECT * FROM mahasiswa_tbl");
    return $query->num_rows();
  }
  public function total_dosen(){
    $query  = $this->db->query("SELECT * FROM dosen_tbl");
    return $query->num_rows();
  }
  public function total_proposal(){
    $query  = $this->db->query("SELECT * FROM proposal_tbl");
    return $query->num_rows();
  }
  public function total_kp(){
    $query  = $this->db->query("SELECT * FROM kp_tbl");
    return $query->num_rows();
  }

  public function total_group(){
    $query  = $this->db->query("SELECT * FROM group_tbl");
    return $query->num_rows();
  }
  public function total_user(){
    $query  = $this->db->query("SELECT * FROM user_tbl");
    return $query->num_rows();
  }
  

  
  
  function __destruct() {
    $this->db->close();
  }
}
