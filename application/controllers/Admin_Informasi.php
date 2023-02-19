<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_Informasi extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->database();
    $this->load->model('M_info');
    $this->load->model('M_jenis_informasi');
  }


  public function index()
  {
    $data['informasi'] = $this->M_info->lihat();
    $this->load->view('admin_data_info', $data);
  }
  public function detail_hp()
  {
    $id = $this->input->get('id');
    $data['informasi'] = $this->M_info->detail_hp($id);
    $this->load->view('hp/detail_artikel', $data);
  }
  public function detail()
  {
    $id = $this->input->get('id');
    $data['informasi'] = $this->M_info->detail_hp($id);
    $this->load->view('umum_detail_artikel', $data);
  }
  public function edit()
  {
    $id = $this->input->get('id');
    $data['informasi'] = $this->M_info->detail_hp($id);
    $this->load->view('admin_edit_info', $data);
  }
  public function tambah()
  {

    $data['jenis'] = $this->M_jenis_informasi->lihat();
    $this->load->view('admin_tambah_info', $data);
  }
  public function up_data()
  {
    $cek = $this->M_info->tambah_data();
    if ($cek > 0) {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah Berita');window.location.href='admin_info?id=" . $cek . "';</script>");
    } else {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Berita');window.location.href='admin_tambah_info';</script>");
    }
  }
  public function update()
  {
    $id = $this->input->get('id');
    $cek = $this->M_info->update_data($id);
    if ($cek > 0) {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Edit Berita');window.location.href='admin_info?id=" . $cek . "';</script>");
    } else {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Edit Berita');window.location.href='admin_tambah_info';</script>");
    }
  }

  public function delete()
  {
    $id = $this->input->get('id');
    $cek = $this->M_info->delete_info($id);
    if ($cek > 0) {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Berita Terhapus');window.location.href='admin_info?id=" . $cek . "';</script>");
    } else {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Berita Gagal Terhapus');window.location.href='admin_tambah_info';</script>");
    }
  }
}
