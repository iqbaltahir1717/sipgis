<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Proposal extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    error_reporting(0);
    $this->load->model("m_proposal");
    $this->load->model("m_mahasiswa");
    $this->load->model("m_dosen");
    $this->load->model("m_setting");
    $this->load->library('upload');
    if (!($this->session->userdata('user_id'))) {
      redirect('home');
    }
  }

  public function index()
  {
    $setting['settings_app'] = $this->m_setting->fetch_setting();
    if ($this->session->userdata('group_id') == 3) { 
      $data['proposal'] = $this->m_proposal->fetch_data_permahasiswa($this->session->userdata('id'));
    }else{
      $data['proposal'] = $this->m_proposal->fetch_data();
    }
    
    $data['mahasiswa'] = $this->m_mahasiswa->fetch_data();
    $data['dosen'] = $this->m_dosen->fetch_data();
    $this->load->view("attribute/header", $setting);
    $this->load->view("attribute/menus", $setting);
    $this->load->view("admin/master_data/proposal/proposal", $data);
    $this->load->view("attribute/footer", $setting);
  }

  public function add() {
    $setting['settings_app'] = $this->m_setting->fetch_setting();
    $data['proposal'] = $this->m_proposal->fetch_data();
    $data['mahasiswa'] = $this->m_mahasiswa->fetch_data();
    $data['dosen'] = $this->m_dosen->fetch_data();
    $this->load->view("attribute/header", $setting);
    $this->load->view("attribute/menus", $setting);
    $this->load->view("admin/master_data/proposal/proposal_add", $data);
    $this->load->view("attribute/footer", $setting);
  }

  public function update() {
    $setting['settings_app'] = $this->m_setting->fetch_setting();
    $data['proposal'] = $this->m_proposal->get($this->uri->segment(3));
    $data['mahasiswa'] = $this->m_mahasiswa->fetch_data();
    $data['dosen'] = $this->m_dosen->fetch_data();
    $this->load->view("attribute/header", $setting);
    $this->load->view("attribute/menus", $setting);
    $this->load->view("admin/master_data/proposal/proposal_edit", $data);
    $this->load->view("attribute/footer", $setting);
  }

  public function input()
  {
    $config1['upload_path']   = './upload/proposal_full/';
    $config1['allowed_types'] = "pdf|doc|docx";
    $config1['overwrite']     = "true";
    $config1['max_size']      = "20000000000";
    $config1['max_width']     = "10000";
    $config1['max_height']    = "10000";
    $config1['file_name']     = 'proposal-full-' . $this->input->post('mahasiswa_nim');
    $this->upload->initialize($config1);
    $this->upload->do_upload('proposal_full');
    $dat3                                           = $this->upload->data();
    $data['proposal_file']          = $dat3['file_name'];

    
    if ($this->session->userdata('group_id') == 3) { 
      $data['mahasiswa_nim']            = $this->session->userdata('id');
    }else{
      $data['mahasiswa_nim']            = $this->input->post('mahasiswa_nim');
    }
    
    $data['proposal_judul']            = $this->input->post('proposal_judul');
    $data['proposal_isi']            = $this->input->post('proposal_isi');
    $data['proposal_upload_datetime']            = date('Y-m-d H:i:s');
    $data['proposal_pembimbing_1']            = $this->input->post('proposal_pembimbing_1');
    $data['proposal_pembimbing_2']            = $this->input->post('proposal_pembimbing_2');
    $data['proposal_penguji_1']            = $this->input->post('proposal_penguji_1');
    $data['proposal_penguji_2']            = $this->input->post('proposal_penguji_2');
    $data['proposal_penguji_3']            = $this->input->post('proposal_penguji_3');
    // $data['proposal_status']            = 0;
    // $data['proposal_komentar']            = '';
    $this->session->set_flashdata('add', 'Berhasil Tambah proposal <b>' . $data['mahasiswa_nim'] . '</b>');
    $this->m_proposal->input($data);


    redirect('proposal');
  }

  public function edit()
  {
    $config3['upload_path']   = './upload/proposal_full/';
    $config3['allowed_types'] = "pdf|doc|docx";
    $config3['overwrite']     = "true";
    $config3['max_size']      = "20000000000";
    $config3['max_width']     = "10000";
    $config3['max_height']    = "10000";
    $config3['file_name']     = 'proposal-full-' . $this->input->post('mahasiswa_nim');
    $this->upload->initialize($config3);
    $this->upload->do_upload('proposal_full');
    $dat3                                           = $this->upload->data();
    $data['proposal_file']          = $dat3['file_name'];

    $data['proposal_id']            = $this->input->post('proposal_id');
    if ($this->session->userdata('group_id') == 3) { 
      $data['mahasiswa_nim']            = $this->session->userdata('id');
    }else{
      $data['mahasiswa_nim']            = $this->input->post('mahasiswa_nim');
    }
    $data['proposal_judul']            = $this->input->post('proposal_judul');
    $data['proposal_isi']            = $this->input->post('proposal_isi');
    // $data['proposal_waktu_selesai']            = $this->input->post('proposal_waktu_selesai');
    $data['proposal_upload_datetime']            = date('Y-m-d H:i:s');
    $data['proposal_pembimbing_1']            = $this->input->post('proposal_pembimbing_1');
    $data['proposal_pembimbing_2']            = $this->input->post('proposal_pembimbing_2');
    $data['proposal_penguji_1']            = $this->input->post('proposal_penguji_1');
    $data['proposal_penguji_2']            = $this->input->post('proposal_penguji_2');
    $data['proposal_penguji_3']            = $this->input->post('proposal_penguji_3');
    // $data['proposal_status']            = 0;
    // $data['proposal_komentar']            = '';
    $this->session->set_flashdata('update', 'Berhasil Edit proposal <b>' . $data['mahasiswa_nim'] . '</b>');
    $this->m_proposal->edit($data);

    redirect('proposal');
  }

  public function delete()
  {
    $this->session->set_flashdata('delete', 'proposal <b>' . $this->input->post('proposal_id') . '</b> telah dihapus !');
    $this->m_proposal->delete($this->input->post('proposal_id'));
    redirect('proposal');
  }
}
