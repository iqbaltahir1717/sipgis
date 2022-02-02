<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_kp extends CI_Model {
  function __construct() {
    parent::__construct();
  }
  
  public function fetch_data() {
    $this->db->select('*');
    $this->db->from('kp_tbl a');
    $this->db->join('mahasiswa_tbl b', 'a.kp_ketua=b.mahasiswa_nim', 'LEFT');
    $this->db->join('mahasiswa_tbl c', 'a.kp_anggota1=c.mahasiswa_nim', 'LEFT');
    $this->db->join('mahasiswa_tbl d', 'a.kp_anggota2=d.mahasiswa_nim', 'LEFT');
    $this->db->join('dosen_tbl e', 'a.kp_pembimbing=e.nomor_induk', 'LEFT');
    // $this->db->order_by("kp_id", "asc");
    // $this->db->where('kp_id', $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }
  
  public function fetch_data_verif($status) {
    $this->db->select('*');
    $this->db->from('kp_tbl a');
    $this->db->join('mahasiswa_tbl b', 'a.kp_ketua=b.mahasiswa_nim', 'LEFT');
    $this->db->join('mahasiswa_tbl c', 'a.kp_anggota1=c.mahasiswa_nim', 'LEFT');
    $this->db->join('mahasiswa_tbl d', 'a.kp_anggota2=d.mahasiswa_nim', 'LEFT');
    $this->db->join('dosen_tbl e', 'a.kp_pembimbing=e.nomor_induk', 'LEFT');
    // $this->db->order_by("kp_id", "asc");
    $this->db->where('a.kp_status', $status);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }

  public function fetch_data_permahasiswa($id) {
    $this->db->select('*');
    $this->db->from('kp_tbl a');
    $this->db->join('mahasiswa_tbl b', 'a.kp_ketua=b.mahasiswa_nim', 'LEFT');
    $this->db->join('mahasiswa_tbl c', 'a.kp_anggota1=c.mahasiswa_nim', 'LEFT');
    $this->db->join('mahasiswa_tbl d', 'a.kp_anggota2=d.mahasiswa_nim', 'LEFT');
    $this->db->join('dosen_tbl e', 'a.kp_pembimbing=e.nomor_induk', 'LEFT');
    $this->db->where('a.kp_ketua', $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }

  public function fetch_data_perpembimbing($id) {
    $this->db->select('*');
    $this->db->from('kp_tbl a');
    $this->db->join('mahasiswa_tbl b', 'a.kp_ketua=b.mahasiswa_nim', 'LEFT');
    $this->db->join('mahasiswa_tbl c', 'a.kp_anggota1=c.mahasiswa_nim', 'LEFT');
    $this->db->join('mahasiswa_tbl d', 'a.kp_anggota2=d.mahasiswa_nim', 'LEFT');
    $this->db->join('dosen_tbl e', 'a.kp_pembimbing=e.nomor_induk', 'LEFT');
    $this->db->where('a.kp_pembimbing', $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }

  public function fetch_data_perpenguji($id) {
    $this->db->select('*');
    $this->db->from('kp_tbl a');
    $this->db->join('mahasiswa_tbl b', 'a.mahasiswa_nim=b.mahasiswa_nim', 'LEFT');
    $this->db->join('dosen_tbl c', 'a.kp_pembimbing_1=c.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl d', 'a.kp_pembimbing_2=d.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl e', 'a.kp_penguji_1=e.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl f', 'a.kp_penguji_2=f.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl g', 'a.kp_penguji_3=g.nomor_induk', 'LEFT');
    $this->db->where('a.kp_status', 1);
    $this->db->where('a.kp_penguji_1', $id);
    $this->db->or_where('a.kp_penguji_2', $id);
    $this->db->or_where('a.kp_penguji_3', $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }

 

  public function get($id) {
    $this->db->select('*');
    $this->db->from('kp_tbl a');
    $this->db->join('mahasiswa_tbl b', 'a.kp_ketua=b.mahasiswa_nim', 'LEFT');
    $this->db->join('mahasiswa_tbl c', 'a.kp_anggota1=c.mahasiswa_nim', 'LEFT');
    $this->db->join('mahasiswa_tbl d', 'a.kp_anggota2=d.mahasiswa_nim', 'LEFT');
    $this->db->join('dosen_tbl e', 'a.kp_pembimbing=e.nomor_induk', 'LEFT');
    $this->db->where('a.kp_id', $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }
  
  public function input($data) {
    $this->db->insert('kp_tbl', $data);
  }

  public function input_batch($data) {
    $this->db->insert_batch('kp_tbl', $data);
  }
  
  public function edit($data) {
    $this->db->update('kp_tbl', $data, array(
      'kp_id' => $data['kp_id']
    ));
  }
  
  public function delete($id) {
    $this->db->delete('kp_tbl', array('kp_id' => $id));
  }
  
  public function fetch_data_peta() {
    $this->db->select('*');
    $this->db->from('kp_tbl');
    $this->db->where('kp_lokasi !=', '');
    $this->db->order_by("kp_id", "desc");
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }
}
?>
