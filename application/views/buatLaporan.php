<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Buat Laporan</title>
  <link rel="stylesheet" href="<?= base_url('assets/'); ?>css/buatLaporan.css">
  <script>
    function validasi_input(){
    let x = document.forms["form"]["isi_komentar"].value;
    if(x == ""){
      alert('Laporan Harus diisi!');
      return false;
    }
    }
  </script>
</head>

<body>

  <h1>SIMPLE LAPOR!</h1>
  <hr>
  <div class="box">
    <p>Buat Laporan/Komentar</p>

    <form name="form" action="<?= base_url('Home/buatLaporan');?>" method="post" enctype="multipart/form-data" onsubmit="return validasi_input(this);">
      <textarea name="isi_komentar" id="isi_komentar" rows="8" cols="80"></textarea>
      <div class="aspek">
        <select class="" name="aspek_komentar" id="aspek_komentar">
          <option selected disabled hidden>Pilih Aspek Pelaporan/Komentar</option>
          <option value="Dosen">Dosen</option>
          <option value="Staff">Staff</option>
          <option value="Mahasiswa">Mahasiswa</option>
          <option value="Infrastruktur">Infrastruktur</option>
          <option value="Pengajaran">Pengajaran</option>
        </select>
      </div>
      <br>
      <div class="upload-wrap">
        <button class="btn">Choose file</button>
        <input type="file" name="file_komentar" id="file_komentar" />
      </div>
      <br>
      <input class="button" type="submit" value="Buat LAPOR!">
    </form>
  </div>
</body>

</html>
