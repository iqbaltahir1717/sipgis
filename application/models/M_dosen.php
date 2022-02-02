<?php
defined('BASEPATH') or exit('No direct script access allowed');
class M_dosen extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  public function fetch_data()
  {
    $this->db->select('*');
    $this->db->from('dosen_tbl a');
    $this->db->join('subkriteria_tbl b', 'a.jabatan=b.subkriteria_id', 'LEFT');
    $this->db->join('subkriteria_tbl c', 'a.pendidikan=c.subkriteria_id', 'LEFT');
    $this->db->join('subkriteria_tbl d', 'a.status=d.subkriteria_id', 'LEFT');
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }

  public function get($id)
  {
    $this->db->select('*');
    $this->db->from('dosen_tbl a');
    $this->db->join('subkriteria_tbl b', 'a.jabatan=b.subkriteria_id', 'LEFT');
    $this->db->join('subkriteria_tbl c', 'a.pendidikan=c.subkriteria_id', 'LEFT');
    $this->db->join('subkriteria_tbl d', 'a.status=d.subkriteria_id', 'LEFT');
    $this->db->where('a.nomor_induk', $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }

  public function get_perhitungan($id)
  {
    $this->db->select('a.dosen_id,a.dosen_nama,a.jabatan,a.pendidikan,a.status,b.subkriteria_nama as jabatan_nama,b.subkriteria_bobot as jabatan_bobot, c.subkriteria_nama as pendidikan_nama, c.subkriteria_bobot as pendidikan_bobot,d.subkriteria_nama as status_nama,d.subkriteria_bobot as status_bobot');
    $this->db->from('dosen_tbl a');
    $this->db->join('subkriteria_tbl b', 'a.jabatan=b.subkriteria_id', 'LEFT');
    $this->db->join('subkriteria_tbl c', 'a.pendidikan=c.subkriteria_id', 'LEFT');
    $this->db->join('subkriteria_tbl d', 'a.status=d.subkriteria_id', 'LEFT');
    $this->db->where('a.dosen_id', $id);
    $query = $this->db->get();
    if ($query->num_rows() > 0) {
      foreach ($query->result() as $row) {
        $data[] = $row;
      }
      return $data;
    }
    return false;
  }

  public function input($data)
  {
    $this->db->insert('dosen_tbl', $data);
  }
  public function input_batch($data) {
    $this->db->insert_batch('dosen_tbl', $data);
  }

  public function edit($data)
  {
    $this->db->update('dosen_tbl', $data, array(
      'dosen_id' => $data['dosen_id']
    ));
  }

  public function edit_nidn($data)
  {
    $this->db->update('dosen_tbl', $data, array(
      'nomor_induk' => $data['nomor_induk']
    ));
  }

  public function delete($id)
  {
    $this->db->delete('dosen_tbl', array('dosen_id' => $id));
  }
}
