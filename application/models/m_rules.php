<?php
class m_rules extends CI_Model
{

    function show_rules()
    {
        $query = $this->db->query("SELECT id_gejala, nama_gejala, id_penyakit, nama_penyakit, nilai_md, nilai_mb, nilai_cf FROM `tb_rules` JOIN `tb_gejala` USING (id_gejala) JOIN `tb_penyakit` USING (id_penyakit)");
        return $query->result();
    }

    function tambah_rules()
    {
        $nama_rules = $this->input->post('nama_rules');
        $sql = "INSERT INTO `tb_rules` (`id_rules`, `nama_rules`) VALUES ('','$nama_rules');";
        $query = $this->db->query($sql);
        if ($query == true) {
            return 1;
        } else {
            return 0;
        }
    }

    function ubah_rules($id)
    {
        $nama_rules = $this->input->post('nama_rules');
        $sql = "UPDATE `tb_rules` SET `nama_rules` = '$nama_rules' WHERE `id_rules` = '$id'";
        $cek = $this->db->query($sql);
        if ($cek == true) {
            return 1;
        } else {
            return 0;
        }
    }
}
