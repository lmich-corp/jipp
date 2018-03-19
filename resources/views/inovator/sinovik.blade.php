<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="custom.css">
  <style type="text/css">
    .list-group-item.active, .list-group-item.active:focus, .list-group-item.active:hover {
    z-index: 2;
    color: #fff;
    background-color: #a61515;
    border-color: #a61515;
}
  </style>
</head>
<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">JIPP JATENG</a>
    </div>
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Kompetisi <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Home</a></li>
          <li><a href="#">Profil</a></li>
          <li><a href="#">Ganti Sandi</a></li>
          <li><a href="#">Proposal</a></li>
          <li><a href="#">Riwayat</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tentang <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Pendaftaran</a></li>
          <li><a href="#">Inovasi</a></li>
          <li><a href="#">Berita Galeri</a></li>
          <li><a href="#">Perubahan Sinovik</a></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Bantuan <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Unduh</a></li>
          <li><a href="#">Petunjuk</a></li>
          <li><a href="#">Hubungi Kami</a></li>
        </ul>
      </li>
      <li class=""><a href="#">Keluar Aplikasi</a></li>
    </ul>
  </div>
</nav>
  
<div class="container" style="margin-top:80px">
  <div class="row">
    <div class="col-md-4">
      <div class="col-md-12">
        <ul class="nav nav-pills nav-stacked" data-spy="affix">
          <div class="text-center">
            <div class="btn-group btn-group-lg">
              <a href="sinovik.html" class="btn btn-default"><span class="glyphicon glyphicon-list-alt"></span></a>
              <a href="sinovikfull.html" class="btn btn-default"><span class="glyphicon glyphicon-th-list"></span></a>
            </div>
          </div>
          <li><a href="sinovik.html" class="list-group-item active">Informasi Utama</a></li>
          <li><a href="sinovikringkasan.html" class="list-group-item">Ringkasan</a></li>
          <li><a href="sinovikanalisis.html" class="list-group-item">Analisis masalah</a></li>
          <li><a href="sinovikpendekatan.html" class="list-group-item">Pendekatan strategis</a></li>
          <li><a href="sinovikkreatif.html" class="list-group-item">Kreatif dan inovatif</a></li>
          <li><a href="sinovikstrategi.html" class="list-group-item">Strategi pelaksanaan</a></li>
          <li><a href="sinovikpemangku.html" class="list-group-item">Pemangku kepentingan</a></li>
          <li><a href="sinoviksumber.html" class="list-group-item">Sumber daya</a></li>
          <li><a href="sinovikkeluaran.html" class="list-group-item">Keluaran / output</a></li>
          <li><a href="sinovikpemantauan.html" class="list-group-item">Pemantauan dan evaluasi</a></li>
          <li><a href="sinovikkendala.html" class="list-group-item">Kendala dan solusi</a></li>
          <li><a href="sinovikmanfaat.html" class="list-group-item">Manfaat utama</a></li>
          <li><a href="sinovikperbedaan.html" class="list-group-item">Perbedaan sebelum dan sesudah</a></li>
          <li><a href="keselarasan.html" class="list-group-item">Keselarasan</a></li>
          <li><a href="sinovikpembelajaran.html" class="list-group-item">Pembelajaran</a></li>
          <li><a href="sinovikkelanjutan.html" class="list-group-item">Berkelanjutan dan replikasi</a></li>
        </ul>
      </div>
    </div>
    <div class="col-md-8">
      <h4>Form Proposal</h4>
      <div class="form-group">
        <label for="judul">Judul Proposal</label>
        <input type="text" class="form-control" id="judul" name="judul">
      </div>
      <div class="form-group">
        <label for="tanggal">Tanggal</label>
        <input type="date" class="form-control" id="tanggal" name="tanggal">
      </div>
      <div class="form-group">
        <label for="kategori">Kategori</label>
        <select class="form-control">
          <option>Tata kelola penyelenggaraan pelayanan publik yang efektif, efisien, dan berkinerja tinggi</option>
          <option>Memajukan transparansi, akuntabilitas, dan integritas dalam pelayanan publik</option>
          <option>DLL</option>
        </select>
      </div>
      <div class="form-group">
        <a href="" class="btn btn-lg btn-default">Kembali</a>
        <a href="" class="btn btn-lg btn-primary">Simpan</a>
      </div>
    </div>
  </div>
</div>

</body>
</html>
