<!DOCTYPE html>
<html lang="en">
<head>
  <title>JIPP Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="custom.css">
</head>
<body data-spy="scroll" data-target="#myScrollspy" data-offset="200">

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
    <nav class="col-md-4" id="myScrollspy">
      <div class="col-md-12">
        <ul class="nav nav-pills nav-stacked" data-spy="affix">
          <div class="text-center">
          <div class="btn-group btn-group-lg">
            <a href="sinovik.html" class="btn btn-default"><span class="glyphicon glyphicon-list-alt"></span></a>
            <a href="sinovikfull.html" class="btn btn-default"><span class="glyphicon glyphicon-th-list"></span></a>
          </div>
        </div>
          <li><a href="#informasiutama" class="list-group-item">Informasi Utama</a></li>
          <li><a href="#ringkasan" class="list-group-item">Ringkasan</a></li>
          <li><a href="#analisis" class="list-group-item">Analisis masalah</a></li>
          <li><a href="#pendekatan" class="list-group-item">Pendekatan strategis</a></li>
          <li><a href="#kreatif" class="list-group-item">Kreatif dan inovatif</a></li>
          <li><a href="#strategi" class="list-group-item">Strategi pelaksanaan</a></li>
          <li><a href="#pemangku" class="list-group-item">Pemangku kepentingan</a></li>
          <li><a href="#sumber" class="list-group-item">Sumber daya</a></li>
          <li><a href="#keluaran" class="list-group-item">Keluaran / output</a></li>
          <li><a href="#pemantauan" class="list-group-item">Pemantauan dan evaluasi</a></li>
          <li><a href="#kendala" class="list-group-item">Kendala dan solusi</a></li>
          <li><a href="#manfaat" class="list-group-item">Manfaat utama</a></li>
          <li><a href="#perbedaan" class="list-group-item">Perbedaan sebelum dan sesudah</a></li>
          <li><a href="#keselarasan" class="list-group-item">Keselarasan</a></li>
          <li><a href="#pembelajaran" class="list-group-item">Pembelajaran</a></li>
          <li><a href="#berkelanjutan" class="list-group-item">Berkelanjutan dan replikasi</a></li>
        </ul>
      </div>
    </nav>
    <div class="col-md-8">
      <div id="informasiutama">
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
      </div>
      <div id="ringkasan">
      <h4><strong>Ringkasan</strong></h4>
      <p>Ringkaslah proposal anda dalam 300 kata</p>
      <div class="form-group">
        <textarea class="form-control" name="ringkasan" id="textArea"></textarea>
      </div>
      </div>
      <div id="analisis">
      <h4><strong>Analisis</strong></h4>
      <p>Uraikan situasi yang ada sebelum inovasi pelayanan publik ini dimulai dalam 500 kata</p>
      <div class="form-group">
        <textarea class="form-control" name="analisis" id="textArea"></textarea>
      </div>
      </div>
      <div id="pendekatan">
      <h4><strong>Pendekatan</strong></h4>
      <p>Ringkaslah tentang apa dan bagaimana inovasi pelayanan publik ini telah memecahkan masalah, dan uraikan strateginya dalam 600 kata</p>
      <div class="form-group">
        <textarea class="form-control" name="pendekatan" id="textArea"></textarea>
      </div>
      </div>
      <div id="kreatif">
      <h4><strong>Kreatif dan Inovasi</strong></h4>
      <p>Jelaskan bahwa inovasi pelayanan publik yang diajukan ini bersifat unik dan mampu menyelesaikan masalah dengan cara-cara baru dan berbeda dari metode sebelumnya serta berhasil diimplementasikan dalam 200 kata</p>
      <div class="form-group">
        <textarea class="form-control" name="kreatif" id="textArea"></textarea>
      </div>
      </div>
      <div id="strategi">
      <h4><strong>Strategi</strong></h4>
      <p>Uraikan unsur-unsur rencana aksi yang telah dikembangkan untuk melaksanakan inovasi pelayanan publik ini, termasuk perkembangan dan langkah-langkah kunci, kegiatan-kegiatan utama serta kronologinya dalam 600 kata</p>
      <div class="form-group">
        <textarea class="form-control" name="strategi" id="textArea"></textarea>
      </div>
      </div>
      <div id="pemangku">
      <h4><strong>Pemangku</strong></h4>
      <p>Sebutkan siapa saja yang telah berkontribusi untuk desain dan/atau pelaksanaan inovasi pelayanan publik ini dalam 300 kata</p>
      <div class="form-group">
        <textarea class="form-control" name="pemangku" id="textArea"></textarea>
      </div>
      </div>
      <div id="sumber">
      <h4><strong>Sumber Daya</strong></h4>
      <p>Sebutkan biaya untuk sumber daya keuangan, teknis, dan manusia yang berkaitan dengan inovasi pelayanan publik ini dalam 500 kata</p>
      <div class="form-group">
        <textarea class="form-control" name="sumber" id="textArea"></textarea>
      </div>
    </div>
    <div id="keluaran">
      <h4><strong>Keluaran</strong></h4>
      <p>Sebutkan paling banyak lima keluaran konkret yang mendukung keberhasilan inovasi pelayanan publik ini dalam 400 kata</p>
      <div class="form-group">
        <textarea class="form-control" name="keluaran" id="textArea"></textarea>
      </div>
    </div>
    <div id="pemantauan">
      <h4><strong>Pemantauan</strong></h4>
      <p>Uraikan bagaimana pelaksanaan inovasi pelayanan publik ini dipantau dan dievaluasi dalam 400 kata</p>
      <div class="form-group">
        <textarea class="form-control" name="pemantauan" id="textArea"></textarea>
      </div>
    </div>  
    <div id="kendala">
      <h4><strong>Kendala</strong></h4>
      <p>Uraikan masalah utama yang dihadapi selama pelaksanaan inovasi pelayanan publik ini beserta cara penanggulangan dan penyelesaiannya dalam 300 kata</p>
      <div class="form-group">
        <textarea class="form-control" name="kendala" id="textArea"></textarea>
      </div>  
    </div>
    <div id="manfaat">
      <h4><strong>Manfaat</strong></h4>
      <p>Uraikan dampak dari inovasi pelayanan publik ini dalam 700 kata, berikan beberapa pembuktian /data yang menunjukkan dampak/manfaat dari inovasi pelayanan publik ini</p>
      <div class="form-group">
        <textarea class="form-control" name="manfaat" id="textArea"></textarea>
      </div>
    </div>
    <div id="perbedaan">
      <h4><strong>Perbedaan</strong></h4>
      <p>uraikan perbedaan sebelum dan sesudah inovasi pelayanan publik ini dilakukan dalam 700 kata</p>
      <div class="form-group">
        <textarea class="form-control" name="perbedaan" id="textArea"></textarea>
      </div>
    </div>  
    <div id="keselarasan">
      <h4><strong>Keselarasan</strong></h4>
      <p>Apa saja dari kegiatan inovasi tersebut yang sejalan dengan satu atau lebih dari 17 Tujuan Pembangunan Berkelanjutan? Jelaskan kegiatan inovasi tersebut selaras dengan pencapaian salah satu atau lebih Tujuan Pembangunan Berkelanjutan Jawaban disampaikan dalam paling banyak 300 kata</p>
      <div class="form-group">
        <textarea class="form-control" name="keselarasan" id="textArea"></textarea>
      </div>
    </div>  
    <div id="pembelajaran">
      <h4><strong>Pembelajaran</strong></h4>
      <p>Uraikan pengalaman umum yang diperoleh dalam melaksanakan inovasi pelayanan publik ini, pembelajarannya, dan rekomendasi untuk masa depan dalam 500 kata</p>
      <div class="form-group">
        <textarea class="form-control" name="berkelanjutan" id="textArea"></textarea>
      </div>
    </div> 
    <div id="berkelanjutan">
      <h4><strong>Berkelanjutan</strong></h4>
      <p>Uraikan bagaimana inovasi pelayanan publik ini sedang dilanjutkan, jelaskan apakah inovasi ini sedang direplikasi (transfer of knowledge) atau didiseminasi untuk seluruh pelayanan publik di tingkat instansi, daerah, nasional dan/atau internasional, dan jelaskan bagaimana inovasi pelayanan publik ini dapat direplikasi dalam 500 kata</p>
      <div class="form-group">
        <textarea class="form-control" name="berkelanjutan" id="textArea"></textarea>
      </div>
    </div> 
      <div class="form-group">
        <a href="" class="btn btn-lg btn-default">Kembali</a>
        <a href="" class="btn btn-lg btn-primary">Simpan</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
  window.sr = ScrollReveal();
  sr.reveal('#informasiutama');
  sr.reveal('#ringkasan');
  sr.reveal('#analisis');
  sr.reveal('#pendekatan');
  sr.reveal('#kreatif');
  sr.reveal('#strategi');
  sr.reveal('#pemangku');
  sr.reveal('#sumber');
  sr.reveal('#keluaran');
  sr.reveal('#pemantauan');
  sr.reveal('#kendala');
  sr.reveal('#manfaat');
  sr.reveal('#perbedaan');
  sr.reveal('#keselarasan');
  sr.reveal('#pembelajaran');
  sr.reveal('#berkelanjutan');
  $('textarea').summernote({
    height: 300
  });
});  
</script>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.css" rel="stylesheet"/>
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js"></script>
<script src="customjs.js"></script>
</body>
</html>
