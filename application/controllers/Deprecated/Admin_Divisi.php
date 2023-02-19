<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admin_Divisi extends CI_Controller
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
    }


    public function index()
    {
        
        $id = $this->input->get('id');
        $data['jumlah_pengaduan'] = $this->M_lapor_hp->jp_div($id);
        $data['pengaduan_selesai'] = $this->M_lapor_hp->pp_div($id);
        $data['pengaduan_proses'] = $this->M_lapor_hp->ps_div($id);
        $data['jumlah_informasi'] = $this->M_lapor_hp->jumlah_informasi();
        $data['admin'] = $this->M_admin->lihat_admin();
        $data['proses_data'] = $this->M_lapor->prosesdiv($id);
        $this->load->view('admindiv_beranda', $data);
    }
}
