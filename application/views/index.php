<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://kit.fontawesome.com/33c83ac013.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/style.css">
</head>

<body>
    <nav>
        <div class="wrapper">
            <div class="logo">SIMPLE LAPOR!</div>
            <div class="pencarian">
              <form class="" action="<?=base_url('Home/search');?>" method="post">
                <input type="text" name="search" id="search">
                <input type="submit" value="Cari">
              </form>
            </div>
            <div class="lapor"><a href="<?= base_url('Home/buatLaporan');?>">Buat Laporan/Komentar</a><i class="fas fa-plus-square"></i></div>
        </div>
    </nav>

    <div class="isi">
        <h5>Laporan/Komentar Terakhir</h5>
        <hr>
        <?php foreach ($komentar as $lpr): ?>
          <p><?= $lpr['isi_komentar']?></p>
          <div class="sub">
              <p class="lampir">Lampiran: <?= $lpr['file_komentar']?></p>
              <p class="wkt">Waktu : <?= $lpr['waktu_komentar']?></p>
              <a href="<?= base_url();?>Home/detailLaporan/<?= $lpr['id_komentar']?>">Lihat Selengkapnya <b>></b></a>
              <hr>
          </div>
        <?php endforeach; ?>
    </div>
</body>

</html>
