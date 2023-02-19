<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Kades extends CI_Controller
{

   function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->library('session');
      $this->load->database();
      $this->load->model('M_lapor');
      $this->load->model('M_lapor_hp');
      $this->load->model('M_admin');
      $this->load->model('M_bidang');
   }


   public function index()
   {
      $data['jumlah_pengaduan'] = $this->M_lapor_hp->jumlah_pengaduan();
      $data['pengaduan_selesai'] = $this->M_lapor_hp->pengaduan_selesai();
      $data['pengaduan_proses'] = $this->M_lapor_hp->pengaduan_proses();
      $data['jumlah_informasi'] = $this->M_lapor_hp->jumlah_informasi();
      $data['admin'] = $this->M_admin->lihat_admin();
      $data['proses_data'] = $this->M_lapor->proses();
      $this->load->view('kepala_beranda', $data);
   }
    public function detail()
  {
    $id = $this->input->get('id');
    $data['admin'] = $this->M_info->detail_hp($id);
    $this->load->view('admin_data_admin', $data);
  }
   public function tambah()
  {

    $data['bidang'] = $this->M_bidang->lihat();
    $this->load->view('kades_tambah_admin', $data);
  }
  public function edit()
  {
    $id = $this->input->get('id');
    $data['admin'] = $this->M_admin->admin($id);
    $data['bidang'] = $this->M_bidang->lihat();
    $this->load->view('kepala_detail_admin', $data);
  }
   public function up_admin()
  {
    $cek = $this->M_admin->tambah_admin();
    if ($cek > 0) {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Berhasil Menambah Admin');window.location.href='kades';</script>");
    } else {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Gagal Menambah Admin');window.location.href='kades';</script>");
    }
  }

  public function update_admin()
  {
    $id = $this->input->get('id');
    $cek = $this->M_admin->ubah_profil($id);
    if ($cek > 0) {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Update Berhasil');window.location.href='kades';</script>");
    } else {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Update Gagal');window.location.href='kades';</script>");
    }
  }
 public function hapus_admin()
  {
    $id = $this->input->get('id');
    $cek = $this->M_admin->proses_hapus_admin($id);
    if ($cek > 0) {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Admin Terhapus');window.location.href='kades';</script>");
    } else {
      echo ("<script LANGUAGE='JavaScript'>window.alert('Admin Gagal Terhapus');window.location.href='kades';</script>");
    }
  }
}
