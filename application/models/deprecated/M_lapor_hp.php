<?php
class M_lapor_hp extends CI_Model
{

  function lihat()
  {
    $query = $this->db->query("SELECT * FROM jenis_pengaduan");
    return $query->result();
  }

  function jumlah_pengaduan()
  {
    $query = $this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan");
    return $query->result();
  }

  function jp_div($id)
  {
    $query = $this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan where id_bidang='$id'");
    return $query->result();
  }

  function jumlah_informasi()
  {
    $query = $this->db->query("SELECT COUNT(*) as jumlah FROM informasi");
    return $query->result();
  }
  function pengaduan_selesai()
  {
    $query = $this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan WHERE status='1'");
    return $query->result();
  }
  function ps_div($id)
  {
    $query = $this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan WHERE id_bidang='$id' AND status='1'");
    return $query->result();
  }
  function pengaduan_proses()
  {
    $query = $this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan WHERE status='0'");
    return $query->result();
  }

  function pp_div($id)
  {
    $query = $this->db->query("SELECT COUNT(*) as jumlah FROM data_pengaduan WHERE id_bidang='$id' AND status='0'");
    return $query->result();
  }
  function max()
  {
    $query = $this->db->query("SELECT MAX(nomor) from data_pengaduan");
    return $query->result();
  }

  function data_pengaduan($id, $nama, $tl)
  {
    $query = $this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join bidang on bidang.id_bidang=data_pengaduan.id_bidang WHERE pelapor.no_telepon='$id' AND pelapor.nama='$nama' AND pelapor.tgl_lahir='$tl' ORDER BY tanggal_pengaduan DESC");
    return $query->result();
  }

  function detail_pengaduan($id)
  {
    $query = $this->db->query("SELECT * FROM `data_pengaduan` LEFT join pelapor on data_pengaduan.id_pelapor=pelapor.id_pelapor left join jenis_pengaduan on jenis_pengaduan.id_jenis_pengaduan=data_pengaduan.jenis_pengaduan left join bidang on bidang.id_bidang=data_pengaduan.id_bidang WHERE data_pengaduan.id_pengaduan='$id'");
    return $query->result();
  }

  function add()
  {
    $nama_lengkap = $this->input->post('nama_lengkap');
    $alamat = $this->input->post('alamat');
    $email = "-";
    //$pekerjaan = $this->input->post('pekerjaan');
    $no_telepon = $this->input->post('no_telepon');
    $uraian_pengaduan = json_encode($this->input->post('uraian_pengaduan'));
    //$nik = $this->input->post('nik');
    $tanggal = date("Y-m-d");
    $tgl_lahir = $this->input->post('tgl_lahir');
    $nomor = 2;
    $id_bidang = 6;
    $id_pelapor = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
    $gambar = $_FILES['gambar'];
    if ($gambar=''){}else {
      $config['upload_path']    ='./assets/gambar_pengaduan';
      $config['allowed_types'] = 'gif|jpg|png|jpeg';
      $config['max_size']     = '10000';

      $this->load->library('upload',$config);
      if (!$this->upload->do_upload('gambar')) {
        echo "upload gagal"; die();
      }else {
        $gambar=$this->upload->data('file_name');
      }
    }
    //$file_ktp=$this->random_name(20);
    //$ktp=$this->uploadImage($file_ktp);

    //$file_bukti1=$this->random_name(20);
    //$bukti1=$this->upload_bukti1($file_bukti1);

    $perintah0 = "INSERT INTO `pelapor`(`nama`, `alamat`,`tgl_lahir`, `email`, `no_telepon`, `id_pelapor`)VALUES ('$nama_lengkap','$alamat','$tgl_lahir','$email','$no_telepon','$id_pelapor')";
    $query = $this->db->query($perintah0);

    $nomor = 0;
    $date = date("Y");
    $perintah3 = "SELECT COUNT(*) as nomor FROM data_pengaduan WHERE year(tanggal_pengaduan)='$date'";
    $query3 = $this->db->query($perintah3);
    $query3->result();
    foreach ($query3->result() as $a) {
      $nomor = $a->nomor;
    }
    $nomor++;
    $new_nomor = $nomor . "/" . date("Y");

    $media = 1;
    $jenis_pengaduan = 5;
    $perintah1 = "INSERT INTO `data_pengaduan`(`id_pelapor`, `id_pengaduan`, `nomor`, `uraian`, `id_media_pelaporan`,`id_bidang`, `penerima`,`tanggal_pengaduan`,`jenis_pengaduan`,`gambar`)
                      VALUES ('$id_pelapor','$id_pelapor$nomor','$new_nomor','$uraian_pengaduan','$media','$id_bidang','Belum Diterima','$tanggal','$jenis_pengaduan','$gambar')";
    $query1 = $this->db->query($perintah1);

    $media = "Sistem Pandumas";
    $this->telegram_add($new_nomor, $nama_lengkap, $no_telepon, $tanggal, $uraian_pengaduan, $media);

    if ($query == true && $query1 == true) {
      return ($id_pelapor . $nomor);
    } else {
      return 0;
    }
  }

  function add2()
  {
    $nama_lengkap = $this->input->post('nama_lengkap');
    $alamat = $this->input->post('alamat');
    $email = "-";
    $tgl_lahir = $this->input->post('tgl_lahir');
    $no_telepon = $this->input->post('no_telepon');
    $uraian_pengaduan = json_encode($this->input->post('uraian_pengaduan'));
    $jenis_pengaduan = $this->input->post('jenis_pengaduan');
    $media_pelaporan = $this->input->post('media_pelaporan');
    $nik = "-";
    $tanggal = $this->input->post('tanggal_pengaduan');
    $nomor = 0;
    $id_pelapor = mktime(date("H"), date("i"), date("s"), date("m"), date("d"), date("Y"));
    $penerima = "Belum Diterima";
    //$file_ktp=$this->random_name(20);
    //$ktp=$this->uploadImage($file_ktp);

    //$file_bukti1=$this->random_name(20);
    //$bukti1=$this->upload_bukti1($file_bukti1);

    $perintah0 = "INSERT INTO `pelapor`(`nama`, `alamat`, `email`, `no_telepon`, `id_pelapor`, `tgl_lahir`)VALUES ('$nama_lengkap','$alamat','$email','$no_telepon','$id_pelapor','$tgl_lahir')";
    $query = $this->db->query($perintah0);

    $nomor = 0;
    $date = date("Y");
    $perintah3 = "SELECT COUNT(*) as nomor FROM data_pengaduan WHERE year(tanggal_pengaduan)='$date'";
    $query3 = $this->db->query($perintah3);
    $query3->result();
    foreach ($query3->result() as $a) {
      $nomor = $a->nomor;
    }
    $nomor++;
    $new_nomor = $nomor . "/" . date("Y");

    $media = 2;

    $perintah1 = "INSERT INTO `data_pengaduan`(`id_pelapor`, `id_pengaduan`, `nomor`, `uraian`, `id_media_pelaporan`, `penerima`,`tanggal_pengaduan`,`nik`,`jenis_pengaduan`)
                      VALUES ('$id_pelapor','$id_pelapor$nomor','$new_nomor','$uraian_pengaduan','$media','Belum Diterima','$tanggal','$nik','$jenis_pengaduan')";
    $query1 = $this->db->query($perintah1);
    $media = "Melaui Admin";
    $this->telegram_add($new_nomor, $nama_lengkap, $no_telepon, $tanggal, $uraian_pengaduan, $media);

    if ($query == true && $query1 == true) {
      return $id_pelapor . $nomor;
    } else {
      return 0;
    }
  }


  public function telegram_add($new_nomor, $nama_lengkap, $no_telepon, $tanggal, $uraian_pengaduan, $media)
  {
    define('BOT_TOKEN', '1242441147:AAGIV7XHCoqi7itw7thArVMDgJPOLoHzTHg');
    define('CHAT_ID', '-343349381');
    //$pesan = json_encode($pesan);
    $API = "https://api.telegram.org/bot" . BOT_TOKEN . "/sendmessage?chat_id=" . CHAT_ID . "&text=Pengaduan!%0ANo%20%20%20%20%20%20%20%20%20%20%20:%20$new_nomor %0ANama%20%20%20%20%20:%20$nama_lengkap%0ATanggal%20%20:%20$tanggal  %0AHP%20%20%20%20%20%20%20%20%20%20%20:%20$no_telepon %0AMedia%20%20%20%20%20:%20$media %0AUraian%20%20%20%20%20:%0A%20%20%20%20%20$uraian_pengaduan";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
    curl_setopt($ch, CURLOPT_URL, $API);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
  }
}
