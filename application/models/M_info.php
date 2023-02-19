<?php
class M_info extends CI_Model
{

  function lihat()
  {
    $query = $this->db->query("SELECT * FROM `informasi`");
    return $query->result();
  }

  function artikel($id)
  {
    $query = $this->db->query("SELECT * FROM `informasi` ORDER BY `tanggal`");
    return $query->result();
  }
  function detail_hp($id)
  {
    $query = $this->db->query("SELECT * FROM `informasi` where informasi.id_informasi= $id");
    return $query->result();
  }

  function data($number, $offset)
  {
    $query = $this->db->query("SELECT * FROM `informasi`  Orders LIMIT $number OFFSET $offset");
    return $query->result();
  }

  function jumlah_data()
  {
    $query = $this->db->query("SELECT count(informasi.id_informasi) as jumlah FROM `informasi` LEFT JOIN jenis_informasi on informasi.id_informasi=jenis_informasi.id_informasi");
    return $query->result();
  }

  function tambah_data()
  {
    $judul = $this->input->post('judul');
    $isi = $this->input->post('isi');
    $gambar = $this->input->post('gambar');
    $sql = "INSERT INTO `informasi`(`id_informasi`,`judul`,`artikel`,`foto`) VALUES ('','$judul','$isi','$gambar')";
    $query = $this->db->query($sql);
    return $query;
  }

  function update_data($id)
  {

    $judul = $this->input->post('judul');
    $isi = $this->input->post('isi');
    $gambar = $this->input->post('gambar');
    $sql = "UPDATE `informasi` SET `judul`='$judul', `foto`='$gambar',`artikel`='$isi' WHERE `id_informasi`='$id'";
    $query = $this->db->query($sql);
    return $query;
  }

  function delete_info($id)
  {
    $sql = "DELETE FROM `informasi` where id_informasi='$id'";
    $query = $this->db->query($sql);
    return $query;
  }
}
