<?php
class m_rules extends CI_Model
{

    function show_rules()
    {
        $query = $this->db->query(
            "SELECT id_rules,
            id_gejala, 
            nama_gejala, 
            id_penyakit, 
            nama_penyakit, 
            nilai_md, 
            nilai_mb, 
            nilai_cf FROM `tb_rules` JOIN `tb_gejala` USING (id_gejala) JOIN `tb_penyakit` USING (id_penyakit)"
        );
        return $query->result();
    }

    function tambah_rules()
    {
        $id_gejala = $this->input->post('id_gejala');
        $id_penyakit = $this->input->post('id_penyakit');
        $nilai_mb = $this->input->post('nilai_mb');
        $nilai_md = $this->input->post('nilai_md');
        $nilai_cf = $this->input->post('nilai_cf');

        // $query = $this->db->insert('tb_rules', $data);
        // $nama_rules = $this->input->post('nama_rules');
        $sql = "INSERT INTO `tb_rules` (`id_rules`, `id_gejala`,`id_penyakit`,`nilai_mb`, `nilai_md`,`nilai_cf`) 
                VALUES ('','$id_gejala','$id_penyakit','$nilai_mb','$nilai_md','$nilai_cf');";
        $query = $this->db->query($sql);
        if ($query == true) {
            return 1;
        } else {
            return 0;
        }
    }

    function detail_rules($id)
    {
        $query = $this->db->query(
            "SELECT id_rules,
            id_gejala, 
            nama_gejala, 
            id_penyakit, 
            nama_penyakit, 
            nilai_md, 
            nilai_mb, 
            nilai_cf FROM `tb_rules` JOIN `tb_gejala` USING (id_gejala) JOIN `tb_penyakit` USING (id_penyakit)
            WHERE id_rules = $id"
        );
        return $query->result();
    }

    function ubah_rules($id)
    {
        $id_gejala = $this->input->post('id_gejala');
        $id_penyakit = $this->input->post('id_penyakit');
        $nilai_mb = $this->input->post('nilai_mb');
        $nilai_md = $this->input->post('nilai_md');
        $nilai_cf = $this->input->post('nilai_cf');

        $sql = "UPDATE `tb_rules` 
        SET id_gejala = '$id_gejala',
        id_penyakit = '$id_penyakit',
        nilai_mb = '$nilai_mb',
        nilai_md = '$nilai_md',
        nilai_cf = '$nilai_cf'
        WHERE id_rules = $id
        ";
        $cek = $this->db->query($sql);
        if ($cek == true) {
            return 1;
        } else {
            return 0;
        }
    }

    function hapus_rules($id)
    {
        $sql = "DELETE FROM `tb_rules` WHERE `id_rules` = $id";
        $cek = $this->db->query($sql);
        if ($cek == true) {
            return 1;
        } else {
            return 0;
        }
    }
}
