<?php
defined('BASEPATH') or exit('No direct script access allowed');
class admin_beranda extends CI_Controller
{

   function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->library('session');
      $this->load->database();
    //   $this->load->model('M_lapor');
    //   $this->load->model('M_lapor_hp');
    //   $this->load->model('M_admin');
   }


   public function index()
   {
    //   $data['jumlah_pengaduan'] = $this->M_lapor_hp->jumlah_pengaduan();
    //   $data['pengaduan_selesai'] = $this->M_lapor_hp->pengaduan_selesai();
    //   $data['pengaduan_proses'] = $this->M_lapor_hp->pengaduan_proses();
    //   $data['jumlah_informasi'] = $this->M_lapor_hp->jumlah_informasi();
    //   $data['admin'] = $this->M_admin->lihat_admin();
    //   $data['proses_data'] = $this->M_lapor->proses();
      $this->load->view('admin_beranda', $data);
   }
}
