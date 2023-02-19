<?php
class M_lapor extends CI_Model
{

  function lihat()
  {
    $query = $this->db->query("SELECT * FROM jenis_pengaduan");
    return $query->result();
  }

  function media_pelaporan()
  {
    $query = $this->db->query("SELECT media_pelaporan.nama_media_pelaporan as nama, COUNT(data_pengaduan.id_media_pelaporan) as jumlah from data_pengaduan, media_pelaporan WHERE data_pengaduan.id_media_pelaporan=media_pelaporan.id_media_pelaporan  GROUP by data_pengaduan.id_media_pelaporan");
    return $query->result();
  }
  function jenis_pengaduan()
  {
    $query = $this->db->query("SELECT jenis_pengaduan.nama_jenis_pengaduan as nama, COUNT(jenis_pengaduan) as jumlah from data_pengaduan, jenis_pengaduan WHERE data_pengaduan.jenis_pengaduan=jenis_pengaduan.id_jenis_pengaduan  GROUP by data_pengaduan.jenis_pengaduan");
    return $query->result();
  }
  function media_pelaporan_tahun($id)
  {
    $query = $this->db->query("SELECT media_pelaporan.nama_media_pelaporan as nama, COUNT(data_pengaduan.id_media_pelaporan) as jumlah from data_pengaduan, media_pelaporan WHERE data_pengaduan.id_media_pelaporan=media_pelaporan.id_media_pelaporan and year(data_pengaduan.tanggal_pengaduan)='$id' GROUP by data_pengaduan.id_media_pelaporan");
    return $query->result();
  }
  function jenis_pengaduan_tahun($id)
  {
    $query = $this->db->query("SELECT jenis_pengaduan.nama_jenis_pengaduan as nama, COUNT(jenis_pengaduan) as jumlah from data_pengaduan, jenis_pengaduan WHERE data_pengaduan.jenis_pengaduan=jenis_pengaduan.id_jenis_pengaduan and year(data_pengaduan.tanggal_pengaduan)='$id' GROUP by data_pengaduan.jenis_pengaduan");
    return $query->result();
  }
  function tahun_max()
  {
    $query = $this->db->query("SELECT max(YEAR(tanggal_pengaduan)) as tahun FROM `data_pengaduan`");
    return $query->result();
  }
  function tahun_min()
  {
    $query = $this->db->query("SELECT min(YEAR(tanggal_pengaduan)) as tahun FROM `data_pengaduan`");
    return $query->result();
  }
  function jumlah_pengaduan_tahun($id)
  {
    $query = $this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan where year(tanggal_pengaduan)='$id'");
    return $query->result();
  }
  function pengaduan_selesai_tahun($id)
  {
    $query = $this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan WHERE status='1' and  year(tanggal_pengaduan)='$id'");
    return $query->result();
  }
  function pengaduan_proses_tahun($id)
  {
    $query = $this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan WHERE status='0' and year(tanggal_pengaduan)='$id'");
    return $query->result();
  }
  function jumlah_pengaduan()
  {
    $query = $this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan");
    return $query->result();
  }
  function pengaduan_selesai()
  {
    $query = $this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan WHERE status='1' ");
    return $query->result();
  }
  function pengaduan_proses()
  {
    $query = $this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan WHERE status='0'");
    return $query->result();
  }
  function tahun()
  {
    $query = $this->db->query("SELECT DISTINCT YEAR(tanggal_pengaduan) as tahun FROM `data_pengaduan`");
    return $query->result();
  }
  function detail_pengaduan1()
  {
    $query = $this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join media_pelaporan on media_pelaporan.id_media_pelaporan=data_pengaduan.id_media_pelaporan ORDER BY data_pengaduan.tanggal_pengaduan DESC");
    return $query->result();
  }
  function detail_pengaduan2($id)
  {
    $query = $this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join media_pelaporan on media_pelaporan.id_media_pelaporan=data_pengaduan.id_media_pelaporan  where year(data_pengaduan.tanggal_pengaduan)='$id' ORDER BY data_pengaduan.tanggal_pengaduan DESC");
    return $query->result();
  }
  function semua_pengaduan()
  {
    $query = $this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join media_pelaporan on media_pelaporan.id_media_pelaporan=data_pengaduan.id_media_pelaporan ORDER BY data_pengaduan.tanggal_pengaduan DESC");
    return $query->result();
  }
  function semua_pengaduandiv($id)
  {
    $query = $this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join media_pelaporan on media_pelaporan.id_media_pelaporan=data_pengaduan.id_media_pelaporan WHERE id_bidang='$id' ORDER BY data_pengaduan.tanggal_pengaduan DESC");
    return $query->result();
  }
  function proses()
  {
    $query = $this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join media_pelaporan on media_pelaporan.id_media_pelaporan=data_pengaduan.id_media_pelaporan WHERE data_pengaduan.status=0 ORDER BY data_pengaduan.tanggal_pengaduan DESC");
    return $query->result();
  }
  function prosesdiv($id)
  {
    $query = $this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join media_pelaporan on media_pelaporan.id_media_pelaporan=data_pengaduan.id_media_pelaporan WHERE data_pengaduan.status=0 AND id_bidang = '$id' ORDER BY data_pengaduan.tanggal_pengaduan DESC");
    return $query->result();
  }
  function max5()
  {
    $query = $this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan WHERE data_pengaduan.status=1 ORDER BY data_pengaduan.tanggal_pengaduan DESC LIMIT 5");
    return $query->result();
  }
  function detail_pengaduan($id)
  {
    $query = $this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join bidang on bidang.id_bidang=data_pengaduan.id_bidang left join media_pelaporan on media_pelaporan.id_media_pelaporan=data_pengaduan.id_media_pelaporan WHERE data_pengaduan.id_pengaduan='$id'");
    return $query->result();
  }
  function edit($id, $id_pelapor)
  {
    $nama_lengkap = $this->input->post('nama_lengkap');
    //$nik = "-";
    $alamat = $this->input->post('alamat');
    $email = $this->input->post('email');
    //$pekerjaan = "-";
    $no_telepon = $this->input->post('no_telepon');
    $uraian_pengaduan = $this->input->post('uraian_pengaduan');
    $jenis_pengaduan = $this->input->post('jenis_pengaduan');
    $media_pelaporan = $this->input->post('media_pelaporan');
    $tanggal = $this->input->post('tanggal_pengaduan');
    $nomor = $this->input->post('nomor');
    $penyelesaian = $this->input->post('penyelesaian');
    $id_bidang = $this->input->post('bidang');
    $status = 1;

    $perintah1 = "UPDATE `pelapor` SET `nama`='$nama_lengkap',`alamat`='$alamat',
                    `email`='$email',`no_telepon`='$no_telepon'
                    WHERE `id_pelapor`='$id_pelapor'";
    $query = $this->db->query($perintah1);
    $perintah2 = "UPDATE `data_pengaduan`set `nomor`='$nomor',`tanggal_pengaduan`='$tanggal',`uraian`='$uraian_pengaduan',
                    `jenis_pengaduan`='$jenis_pengaduan',`id_media_pelaporan`='$media_pelaporan', `id_bidang` = '$id_bidang'
                    WHERE `id_pengaduan`='$id'";
    $query2 = $this->db->query($perintah2);
    return $query2;
  }

  function tindak_lanjut($id, $id_pelapor)
  {
    $bidang = $this->input->post('bidang');
    $tindak_lanjut = $this->input->post('tindak_lanjut');
    $status = 1;
    $tanggal = date("Y-m-d");
    $perintah2 = "UPDATE `data_pengaduan`set `tindak_lanjut`='$tindak_lanjut',`status`=$status,`id_bidang`='$bidang',`tanggal_selesai`='$tanggal'
                   WHERE `id_pengaduan`='$id'";
    $query2 = $this->db->query($perintah2);
    return $query2;
  }



  //  function laporan($tgl1,$tgl2){
  //    $query=$this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan WHERE (tanggal_pengaduan BETWEEN  '$tgl1' AND '$tgl2')");
  //    return $query->result();
  //  }
  //  function setting(){
  //    $query=$this->db->query("SELECT * from `setting`");
  //    return $query->result();
  //  }

  //
  //  function penyelesaian($id){
  //    $penyelesaian = $this->input->post('penyelesaian');
  //    $bidang = $this->input->post('bidang');
  //    $status = 1;
  //
  //   $data2 = array(
  //       'tindak_lanjut'=>$penyelesaian,
  //       'id_bidang'=>$bidang,
  //       'status'=>$status
  //
  //
  //     );
  //   $this->db->where('id_pengaduan',$id);
  //   $cek1=$this->db->update('data_pengaduan',$data2);
  //   return $cek1;
  // }
  //




  function hapus($id_pengaduan, $id_pelapor)
  {
    $perintah1 = "DELETE FROM `pelapor` WHERE id_pelapor='$id_pelapor'";
    $query = $this->db->query($perintah1);
    $perintah2 = "DELETE FROM `data_pengaduan` WHERE id_pengaduan='$id_pengaduan'";
    $query2 = $this->db->query($perintah2);
    return $id_pengaduan;
  }

  public function telegram_add($no, $tanggal)
  {
    define('BOT_TOKEN', '1242441147:AAGIV7XHCoqi7itw7thArVMDgJPOLoHzTHg');
    define('CHAT_ID', '-343349381');
    //$pesan = json_encode($pesan);
    echo $API = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendmessage?chat_id=" . CHAT_ID . "&text=Pengaduan!%0ANo%20%20%20%20%20%20%20%20%20%20%20:%20$no %0ATanggal%20%20:%20$tanggal  %0AHP%20%20%20%20%20%20%20%20%20%20%20:%20082237653729 %0AJenis%20%20%20%20%20%20%20:%20PelayananPertanahan%0AMedia%20%20%20%20%20:%20mandiri %0AUraian%20%20%20%20%20:%0A%20%20%20%20%20AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAa";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_URL, $API);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
  }
}
