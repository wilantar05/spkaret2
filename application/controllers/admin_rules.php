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
    }


    public function index()
    {
        $data = null;
        //$data['semua_pengaduan'] = $this->M_lapor->semua_pengaduan();
        $this->load->view('admin_rules', $data);
    }

    public function tambah()
    {
        $data = null;
        $this->load->view('admin_tambah_rules', $data);
    }
}
