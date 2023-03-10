<?php
class m_penyakit extends CI_Model
{

    function show_penyakit()
    {
        $query = $this->db->query("SELECT * FROM `tb_penyakit`");
        return $query->result();
    }

    function tambah_penyakit()
    {
        $nama_penyakit = $this->input->post('nama_penyakit');
        $sql = "INSERT INTO `tb_penyakit` (`id_penyakit`, `nama_penyakit`) VALUES ('','$nama_penyakit');";
        $query = $this->db->query($sql);
        if ($query == true) {
            return 1;
        } else {
            return 0;
        }
    }

    function detail_penyakit($id)
    {
        $sql = $this->db->query("SELECT * FROM `tb_penyakit` WHERE `id_penyakit`=$id");
        return $sql->result();
    }

    function ubah_penyakit($id)
    {
        $nama_penyakit = $this->input->post('nama_penyakit');
        $sql = "UPDATE `tb_penyakit` SET `nama_penyakit` = '$nama_penyakit' WHERE `id_penyakit` = '$id'";
        $cek = $this->db->query($sql);
        if ($cek == true) {
            return 1;
        } else {
            return 0;
        }
    }

    function hapus_penyakit($id)
    {
        $sql = "DELETE FROM `tb_penyakit` WHERE `id_penyakit` = $id";
        $cek = $this->db->query($sql);
        if ($cek == true) {
            return 1;
        } else {
            return 0;
        }
    }
}
