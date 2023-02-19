<?php
class M_Admin extends CI_Model
{

  function lihat_admin()
  {
    $sql = "SELECT id, nama, admin.id_bidang as id_bidang, nama_bidang as bidang, status from admin join bidang where admin.id_bidang=bidang.id_bidang";
    $query = $this->db->query($sql);
    return $query->result();
  }

  function admin($id)
  {
    $query = $this->db->query("SELECT * FROM `admin` left join `bidang` on admin.id_bidang = bidang.id_bidang where id='$id'");
    return $query->result();
  }

  function tambah_admin()
  {
    $nama_lengkap = $this->input->post('nama_lengkap');
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $status = "1";
    $level = "2";
    $bidang = $this->input->post('bidang');
    $sql = "INSERT INTO `admin` (`username`, `password`, `nama`, `status`, `level`, `id_bidang`) VALUES ('$username', '$password', '$nama_lengkap', '$status', '$level', '$bidang');";
    $query = $this->db->query($sql);
    if ($query == true) {
      return 1;
    } else {
      return 0;
    }
  }

  function ubah_profil($id)
  {
    $nama_lengkap = $this->input->post('nama_lengkap');
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $id_bidang = $this->input->post('bidang');
    $sql = "UPDATE `admin` SET `nama` = '$nama_lengkap', `username` = '$username', `password`='$password',`id_bidang`='$id_bidang' WHERE `admin`.`id` = '$id'";
    $cek = $this->db->query($sql);
    if ($cek == true) {
      return 1;
    } else {
      return 0;
    }
  }

  function ubah_password($id, $admin)
  {
    $nama_lengkap = $this->input->post('nama_lengkap');
    $username = $this->input->post('username');
    $password_lama = md5($this->input->post('password_lama'));
    $password_baru = md5($this->input->post('password_baru'));
    $ulangi_password = md5($this->input->post('ulangi_password'));
    $data = array(
      'password' => $password_baru

    );
    if (($password_baru == $ulangi_password)) {
      if ($admin == $password_lama) {
        $this->db->where('username', $id);
        $cek = $this->db->update('admin', $data);
        return $cek;
      }
      return false;
    } else {
      return false;
    }
  }

  function edit_admin()
  {
    $query = $this->db->query("");
    return $query->result();
  }

  function getdiv()
  {
    $query = $this->db->query("");
    return $query->result();
  }
  function proses_hapus_admin($id)
  {
    $sql = "DELETE FROM `admin` where id='$id'";
    $query = $this->db->query($sql);
    return $query;
  }
}
