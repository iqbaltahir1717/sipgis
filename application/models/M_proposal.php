<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_proposal extends CI_Model {
  function __construct() {
    parent::__construct();
  }
  
  public function fetch_data() {
    $this->db->select('*');
    $this->db->from('proposal_tbl a');
    $this->db->join('mahasiswa_tbl b', 'a.mahasiswa_nim=b.mahasiswa_nim', 'LEFT');
    $this->db->join('dosen_tbl c', 'a.proposal_pembimbing_1=c.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl d', 'a.proposal_pembimbing_2=d.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl e', 'a.proposal_penguji_1=e.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl f', 'a.proposal_penguji_2=f.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl g', 'a.proposal_penguji_3=g.nomor_induk', 'LEFT');
    // $this->db->order_by("proposal_id", "asc");
    // $this->db->where('proposal_id', $id);
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
    $this->db->from('proposal_tbl a');
    $this->db->join('mahasiswa_tbl b', 'a.mahasiswa_nim=b.mahasiswa_nim', 'LEFT');
    $this->db->join('dosen_tbl c', 'a.proposal_pembimbing_1=c.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl d', 'a.proposal_pembimbing_2=d.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl e', 'a.proposal_penguji_1=e.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl f', 'a.proposal_penguji_2=f.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl g', 'a.proposal_penguji_3=g.nomor_induk', 'LEFT');
    // $this->db->order_by("proposal_id", "asc");
    $this->db->where('a.proposal_status', $status);
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
    $this->db->from('proposal_tbl a');
    $this->db->join('mahasiswa_tbl b', 'a.mahasiswa_nim=b.mahasiswa_nim', 'LEFT');
    $this->db->join('dosen_tbl c', 'a.proposal_pembimbing_1=c.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl d', 'a.proposal_pembimbing_2=d.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl e', 'a.proposal_penguji_1=e.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl f', 'a.proposal_penguji_2=f.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl g', 'a.proposal_penguji_3=g.nomor_induk', 'LEFT');
    // $this->db->order_by("proposal_id", "asc");
    $this->db->where('a.mahasiswa_nim', $id);
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
    $this->db->from('proposal_tbl a');
    $this->db->join('mahasiswa_tbl b', 'a.mahasiswa_nim=b.mahasiswa_nim', 'LEFT');
    $this->db->join('dosen_tbl c', 'a.proposal_pembimbing_1=c.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl d', 'a.proposal_pembimbing_2=d.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl e', 'a.proposal_penguji_1=e.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl f', 'a.proposal_penguji_2=f.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl g', 'a.proposal_penguji_3=g.nomor_induk', 'LEFT');
    $this->db->where('a.proposal_status', 1);
    $this->db->where('a.proposal_pembimbing_1', $id);
    $this->db->or_where('a.proposal_pembimbing_2', $id);
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
    $this->db->from('proposal_tbl a');
    $this->db->join('mahasiswa_tbl b', 'a.mahasiswa_nim=b.mahasiswa_nim', 'LEFT');
    $this->db->join('dosen_tbl c', 'a.proposal_pembimbing_1=c.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl d', 'a.proposal_pembimbing_2=d.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl e', 'a.proposal_penguji_1=e.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl f', 'a.proposal_penguji_2=f.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl g', 'a.proposal_penguji_3=g.nomor_induk', 'LEFT');
    $this->db->where('a.proposal_status', 1);
    $this->db->where('a.proposal_penguji_1', $id);
    $this->db->or_where('a.proposal_penguji_2', $id);
    $this->db->or_where('a.proposal_penguji_3', $id);
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
    $this->db->from('proposal_tbl a');
    $this->db->join('mahasiswa_tbl b', 'a.mahasiswa_nim=b.mahasiswa_nim', 'LEFT');
    $this->db->join('dosen_tbl c', 'a.proposal_pembimbing_1=c.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl d', 'a.proposal_pembimbing_2=d.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl e', 'a.proposal_penguji_1=e.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl f', 'a.proposal_penguji_2=f.nomor_induk', 'LEFT');
    $this->db->join('dosen_tbl g', 'a.proposal_penguji_3=g.nomor_induk', 'LEFT');
    $this->db->where('a.proposal_id', $id);
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
    $this->db->insert('proposal_tbl', $data);
  }

  public function input_batch($data) {
    $this->db->insert_batch('proposal_tbl', $data);
  }
  
  public function edit($data) {
    $this->db->update('proposal_tbl', $data, array(
      'proposal_id' => $data['proposal_id']
    ));
  }
  
  public function delete($id) {
    $this->db->delete('proposal_tbl', array('proposal_id' => $id));
  }
  
  public function fetch_data_peta() {
    $this->db->select('*');
    $this->db->from('proposal_tbl');
    $this->db->where('proposal_lokasi !=', '');
    $this->db->order_by("proposal_id", "desc");
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
