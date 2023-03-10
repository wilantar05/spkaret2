<?php
class m_gejala extends CI_Model
{

    function show_gejala()
    {
        $query = $this->db->query("SELECT * FROM `tb_gejala`");
        return $query->result();
    }

    function tambah_gejala()
    {
        $nama_gejala = $this->input->post('nama_gejala');
        $sql = "INSERT INTO `tb_gejala` (`id_gejala`, `nama_gejala`) VALUES ('','$nama_gejala');";
        $query = $this->db->query($sql);
        if ($query == true) {
            return 1;
        } else {
            return 0;
        }
    }

    function detail_gejala($id)
    {
        $sql = $this->db->query("SELECT * FROM `tb_gejala` WHERE `id_gejala`=$id");
        return $sql->result();
    }

    function ubah_gejala($id)
    {
        $nama_gejala = $this->input->post('nama_gejala');
        $sql = "UPDATE `tb_gejala` SET `nama_gejala` = '$nama_gejala' WHERE `id_gejala` = '$id'";
        $cek = $this->db->query($sql);
        if ($cek == true) {
            return 1;
        } else {
            return 0;
        }
    }

    function hapus_gejala($id)
    {
        $sql = "DELETE FROM `tb_gejala` WHERE `id_gejala` = $id";
        $cek = $this->db->query($sql);
        if ($cek == true) {
            return 1;
        } else {
            return 0;
        }
    }
}
