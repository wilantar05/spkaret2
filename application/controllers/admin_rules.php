<?php
defined('BASEPATH') or exit('No direct script access allowed');
class admin_rules extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('m_rules');
        $this->load->model('m_gejala');
        $this->load->model('m_penyakit');
    }


    public function index()
    {
        $data = null;
        //$data['semua_pengaduan'] = $this->M_lapor->semua_pengaduan();
        $gejala = $this->m_gejala->show_gejala();
        $data['gejala'] = $gejala;
        $penyakit = $this->m_penyakit->show_penyakit();
        $data['penyakit'] = $penyakit;
        $this->load->view('admin_rules', $data);
    }

    public function tambah()
    {
        $data = null;
        $gejala = $this->m_gejala->show_gejala();
        $data['gejala'] = $gejala;
        $penyakit = $this->m_penyakit->show_penyakit();
        $data['penyakit'] = $penyakit;
        $this->load->view('admin_tambah_rules', $data);
    }
}
