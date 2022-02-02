<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Mahasiswa extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    error_reporting(0);
    $this->load->model("m_mahasiswa");
    $this->load->model("m_setting");
    $this->load->model("m_user");
    $this->load->library('upload');
    $this->load->library('excel');
    if (!($this->session->userdata('user_id'))) {
      redirect('home');
    }
  }

  public function index()
  {
    $setting['settings_app'] = $this->m_setting->fetch_setting();
    $data['mahasiswa'] = $this->m_mahasiswa->fetch_data();
    $this->load->view("attribute/header", $setting);
    $this->load->view("attribute/menus", $setting);
    $this->load->view("admin/master_data/mahasiswa/mahasiswa", $data);
    $this->load->view("attribute/footer", $setting);
  }

  public function input()
  {
      $data['mahasiswa_nim']                = $this->input->post('mahasiswa_nim');
      $data['mahasiswa_nama']            = $this->input->post('mahasiswa_nama');
      $data['mahasiswa_angkatan']            = $this->input->post('mahasiswa_angkatan');
      $data['mahasiswa_jk']            = $this->input->post('mahasiswa_jk');
      $data['mahasiswa_no_hp']            = $this->input->post('mahasiswa_no_hp');
      $this->session->set_flashdata('add', 'Berhasil Tambah mahasiswa <b>' . $data['mahasiswa_nama'] . '</b>');
      $this->m_mahasiswa->input($data);
    redirect('mahasiswa');
  }

  public function edit()
  {
      $data['mahasiswa_id']                = $this->input->post('mahasiswa_id');
      $data['mahasiswa_id']                = $this->input->post('mahasiswa_id');
      $data['mahasiswa_nim']                = $this->input->post('mahasiswa_nim');
      $data['mahasiswa_nama']            = $this->input->post('mahasiswa_nama');
      $data['mahasiswa_angkatan']            = $this->input->post('mahasiswa_angkatan');
      $data['mahasiswa_jk']            = $this->input->post('mahasiswa_jk');
      $data['mahasiswa_no_hp']            = $this->input->post('mahasiswa_no_hp');
      $this->session->set_flashdata('update', 'Berhasil update mahasiswa <b>' . $data['mahasiswa_nama'] . '</b>');
      $this->m_mahasiswa->edit($data);

    redirect('mahasiswa');
  }

  public function delete()
  {
    $this->session->set_flashdata('delete', 'mahasiswa <b>' . $this->input->post('mahasiswa_nama') . '</b> telah dihapus !');
    $this->m_mahasiswa->delete($this->input->post('mahasiswa_id'));
    redirect('mahasiswa');
  }
	
}
