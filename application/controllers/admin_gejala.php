<?php
defined('BASEPATH') or exit('No direct script access allowed');
class admin_gejala extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('m_gejala');
    }

    public function index()
    {
        $data = null;
        //$data['semua_pengaduan'] = $this->M_lapor->semua_pengaduan();
        $data['gejala'] = $this->m_gejala->show_gejala();
        $this->load->view('admin_gejala', $data);
    }

    public function tambah()
    {
        $data = null;
        $this->load->view('admin_tambah_gejala', $data);
    }

    public function insert()
    {
        $cek = $this->m_gejala->tambah_gejala();
        if ($cek > 0) {
            //berhasil
            $this->load->view('admin_tambah_gejala', $data);
        } else {
            //gagal
        }
    }

    public function update()
    {
        $id = $this->input->get('id');
        $cek = $this->m_gejala->ubah_gejala($id);
        if ($cek > 0) {
            //berhasil
            redirect('gejala');
        } else {
            //gagal
        }
    }

    public function detail()
    {
        $id = $this->input->get('id');
        $data['gejala'] = $this->m_gejala->detail_gejala($id);
        $this->load->view('admin_detail_gejala', $data);
    }

    public function delete()
    {
        $id = $this->input->get('id');
        $cek = $this->m_gejala->hapus_gejala($id);
        if ($cek > 0) {
            redirect('gejala');
        } else {
        }
    }
}
