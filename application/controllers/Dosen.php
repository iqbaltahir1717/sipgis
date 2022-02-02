<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dosen extends CI_Controller
{
  function __construct()
  {
    parent::__construct();
    error_reporting(0);
    $this->load->model("m_dosen");
    $this->load->model("m_mahasiswa");
    $this->load->model("m_subkriteria");
    $this->load->model("m_setting");
    $this->load->model("m_user");
    $this->load->library('upload');
    if (!($this->session->userdata('user_id'))) {
      redirect('home');
    }
  }

  public function index()
  {
    $setting['settings_app'] = $this->m_setting->fetch_setting();
    $data['dosen'] = $this->m_dosen->fetch_data();
    $data['subkriteria'] = $this->m_subkriteria->fetch_data();
    $this->load->view("attribute/header", $setting);
    $this->load->view("attribute/menus", $setting);
    $this->load->view("admin/master_data/dosen/dosen", $data);
    $this->load->view("attribute/footer", $setting);
  }

  public function input()
  {
    // $data['dosen_id']                  = "US".date('YmdHis');
    $data['dosen_id']              = $this->input->post('dosen_id');
    $data['nomor_induk']              = $this->input->post('nomor_induk');
    $data['dosen_nama']            = $this->input->post('dosen_nama');
    $data['jabatan']               = $this->input->post('jabatan');
    $data['pendidikan']            = $this->input->post('pendidikan');
    $data['status']                = $this->input->post('status');
    $this->session->set_flashdata('add', 'Berhasil Tambah dosen <b>' . $data['dosen_nama'] . '</b>');
    $this->m_dosen->input($data);

    $datas['user_name']           = $this->input->post('dosen_id');
    $datas['user_password']       = md5($this->input->post('dosen_id'));
    $datas['id']                  = $this->input->post('nomor_induk');
    $datas['user_fullname']       = $this->input->post('dosen_nama');
    $datas['group_id']            = 2;
    $this->m_user->create_user($datas);

    redirect('dosen');
  }

  public function edit()
  {

    $data['dosen_id']              = $this->input->post('dosen_id');
    $data['nomor_induk']              = $this->input->post('nomor_induk');
    $data['dosen_nama']            = $this->input->post('dosen_nama');
    $data['jabatan']               = $this->input->post('jabatan');
    $data['pendidikan']            = $this->input->post('pendidikan');
    $data['status']                = $this->input->post('status');
    $this->session->set_flashdata('update', 'Berhasil Update dosen <b>' . $data['dosen_nama'] . '</b>');
    $this->m_dosen->edit($data);



    redirect('dosen');
  }

  public function delete()
  {
    $this->session->set_flashdata('delete', 'dosen <b>' . $this->input->post('dosen_nama') . '</b> telah dihapus !');
    $this->m_dosen->delete($this->input->post('dosen_id'));

    redirect('dosen');
  }

  public function peta()
  {
    $setting['settings_app'] = $this->m_setting->fetch_setting();
    $data['mahasiswa'] = $this->m_mahasiswa->fetch_data_peta();
    $this->load->view("attribute/header", $setting);
    $this->load->view("attribute/menus", $setting);
    $this->load->view("admin/master_data/peta/peta", $data);
    $this->load->view("attribute/footer", $setting);
  }
}
