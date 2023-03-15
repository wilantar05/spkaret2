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
        $rules = $this->m_rules->show_rules();
        $data['rules'] = $rules;
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

    public function insert()
    {
        $cek = $this->m_rules->tambah_rules();
        if ($cek > 0) {
            $this->load->view('admin_tambah_rules', $data);
        } else {
        }
    }

    public function detail()
    {
        $data               = null;
        $gejala = $this->m_gejala->show_gejala();
        $data['gejala'] = $gejala;
        $penyakit = $this->m_penyakit->show_penyakit();
        $data['penyakit'] = $penyakit;
        $id                 = $this->input->get('id');
        $data['rules']      = $this->m_rules->detail_rules($id);
        $this->load->view('admin_detail_rules', $data);
    }

    public function update()
    {
        $id = $this->input->get('id');
        $cek = $this->m_rules->ubah_rules($id);
        if ($cek > 0) {
            redirect('rules');
        } else {
        }
    }

    public function delete()
    {
        $id = $this->input->get('id');
        $cek = $this->m_rules->hapus_rules($id);
        if ($cek > 0) {
            redirect('rules');
        } else {
        }
    }
}
