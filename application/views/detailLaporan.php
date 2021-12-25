<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Detail Laporan</title>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/detailLaporan.css">
  </head>
  <body>
    <h1>SIMPLE LAPOR!</h1>
    <p>Detail Laporan/Komentar</p>
    <hr>
    <div class="main">
      <p><?= $komentar['isi_komentar'];?></p>
      <p>Lampiran</p>

      <div class="image">
        <img src="" alt="">
      </div>

      <div class="sub">
        <p>Waktu : <?= $komentar['waktu_komentar'];?></p>
        <p>Aspek : <?= $komentar['aspek_komentar'];?></p>
        <a href="<?= base_url();?>Home/hapusLaporan/<?= $komentar['id_komentar'];?>" onclick="return confirm('yakin?');">Hapus Laporan/Komentar</a>
      </div>
    </div>

    <hr class="hr-bot">

  </body>
</html>
