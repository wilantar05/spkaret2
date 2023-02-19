<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends CI_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
    $this->load->database();
    $this->load->model('M_admin');
    $this->load->model('M_bidang');
  }


  public function index()
  {
    $data['admin'] = $this->M_admin->lihat_admin();
    $this->load->view('admin_data_admin', $data);
  }
  public function detail()
  {
    $id = $this->input->get('id');
    $data['admin'] = $this->M_info->detail_hp($id);
    $this->load->view('admin_data_admin', $data);
  }
  public function edit()
  {
    $id = $this->input->get('id');
    $data['admin'] = $this->M_admin->admin($id);
    $data['bidang'] = $this->M_bidang->lihat();
    $this->load->view('admin_detail_admin', $data);
  }
  public function tambah()
  {

    $data['bidang'] = $this->M_bidang->lihat();
    $this->load->view('admin_tambah_admin', $data);
  }
  public function up_admin()
  {
    $cek = $this->M_admin->tambah_admin();
    if ($cek > 0) {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah Admin');window.location.href='data_admin?id=" . $cek . "';</script>");
    } else {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Admin');window.location.href='data_admin';</script>");
    }
  }

  public function update_admin()
  {
    $id = $this->input->get('id');
    $cek = $this->M_admin->ubah_profil($id);
    if ($cek > 0) {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Update Berhasil');window.location.href='data_admin?id=" . $cek . "';</script>");
    } else {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Update Gagal');window.location.href='data_admin';</script>");
    }
  }

  public function hapus_admin()
  {
    $id = $this->input->get('id');
    $cek = $this->M_admin->proses_hapus_admin($id);
    if ($cek > 0) {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Admin Terhapus');window.location.href='data_admin?id=" . $cek . "';</script>");
    } else {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Admin Gagal Terhapus');window.location.href='data_admin';</script>");
    }
  }
}
