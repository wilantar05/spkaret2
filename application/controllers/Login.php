<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

   function __construct()
   {
      parent::__construct();
      $this->load->helper('url');
      $this->load->library('session');
      $this->load->database();
      $this->load->model('M_Login');
      $this->load->model('M_admin');
      $admin = $this->session->userdata('admin');
   }

   function login()
   {
      $this->load->view('login_admin.php');
   }
   public function logout()
   {
      $this->session->unset_userdata('login');
      $this->session->sess_destroy();
      redirect('beranda');
   }

   public function proses_login()
   {
      $cek = $this->M_Login->login();
      if ($cek == true) {
         session_save_path();
         $username = $this->input->post('username');
         $password = $this->input->post('password');
         $password = md5($password);
         $sql = "SELECT * FROM admin where username='$username' and password='$password'";
         $query = $this->db->query($sql);
         $data = $query->result();
         foreach ($data as $isi) {

            $arraydata = array(
               'nama'  => $isi->nama,
               'level'     => $isi->level,
               'username' => $isi->username,
               'bidang' => $isi->id_bidang
            );
            $this->session->set_userdata($arraydata);
            $data['id'] = $this->M_admin->admin($isi->id_bidang);
            // echo $isi->id_bidang;

            if (($isi->id_bidang) == 6) {
               redirect('admin');
            } else {
               if (($isi->id_bidang) > 6) {
                  redirect('admindiv?id=' . $isi->id_bidang);
               } else {
                  if (($isi->id_bidang) == 5) {
                     redirect('kades');
                  }
               }
            }
         }
      } else {
         echo "<script>alert('Anda Gagal Login')</script>";
         redirect('beranda?id=1');
      }
   }
}
