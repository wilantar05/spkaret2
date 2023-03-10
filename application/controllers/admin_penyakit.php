<?php
defined('BASEPATH') or exit('No direct script access allowed');
class admin_penyakit extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->library('session');
        $this->load->database();
        $this->load->model('m_penyakit');
    }


    public function index()
    {
        $data = null;
        //$data['semua_pengaduan'] = $this->M_lapor->semua_pengaduan();
        $data['penyakit'] = $this->m_penyakit->show_penyakit();
        $this->load->view('admin_penyakit', $data);
    }

    public function tambah()
    {
        $data = null;
        $this->load->view('admin_tambah_penyakit', $data);
    }

    public function insert()
    {
        $cek = $this->m_penyakit->tambah_penyakit();
        if ($cek > 0) {
            //berhasil
            $this->load->view('admin_tambah_penyakit', $data);
        } else {
            //gagal
        }
    }

    public function update()
    {
        $id = $this->input->get('id');
        $cek = $this->m_penyakit->ubah_penyakit($id);
        if ($cek > 0) {
            //berhasil
            redirect('penyakit');
        } else {
            //gagal
        }
    }

    public function detail()
    {
        $id = $this->input->get('id');
        $data['penyakit'] = $this->m_penyakit->detail_penyakit($id);
        $this->load->view('admin_detail_penyakit', $data);
    }

    public function delete()
    {
        $id = $this->input->get('id');
        $cek = $this->m_penyakit->hapus_penyakit($id);
        if ($cek > 0) {
            redirect('penyakit');
        } else {
        }
    }
}
