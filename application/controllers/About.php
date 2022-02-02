<?php
defined('BASEPATH') or exit('No direct script access allowed');
class About extends CI_Controller{ 
    function __construct()
        {
            parent::__construct();
            error_reporting(0);
            $this->load->model("m_proposal");
            $this->load->model("m_mahasiswa");
            $this->load->model("m_dosen");
            $this->load->model("m_setting");
            if (!($this->session->userdata('user_id'))) {
                redirect('home');
            }
        }
        
        public function index(){
            $setting['settings_app'] = $this->m_setting->fetch_setting();
            $this->load->view("attribute/header", $setting);
            $this->load->view("attribute/menus", $setting);
            $this->load->view("admin/master_data/about");
            $this->load->view("attribute/footer", $setting);
        }
    
}