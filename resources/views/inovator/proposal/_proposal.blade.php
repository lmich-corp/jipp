

    
 
      <!-- <div class="col-sm-2"  id="myScrollspy">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-2">
          <ul id="sidebar" class="nav nav-pills nav-stacked" data-spy="affix">
            <div class="text-center">
            <div class="btn-group btn-group-lg">
              <a href="sinovik.html" class="btn btn-default"><span class="glyphicon glyphicon-list-alt"></span></a>
              <a href="sinovikfull.html" class="btn btn-default"><span class="glyphicon glyphicon-th-list"></span></a>
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
        <div class="clearfix"></div>
      </div> -->
      <div class="col-sm-12">
        <div id="informasiutama">
        <h4>Form Proposal</h4>
        <link rel="stylesheet" href="custom.css">
        <div class="form-group">
          {!! csrf_field() !!}

          <label for="judul">Judul Proposal</label>
          <input type="text" class="form-control" id="judul" name="judul" value="{{$proposal->judul}}">
        </div>
        <div class="form-group">
          <label for="tanggal">Tanggal</label>
          <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{$proposal->tanggal}}">
        </div>
        
        
        <div class="form-group">
          <label for="kategori">Kategori</label>
          <select class="form-control" name="kategori">
            <option value="{{$proposal->kategori}}">{{$proposal->kategori}}</option>
            <option value="Adminduk Capil" >Adminduk Capil</option>
            <option value="ICT" >ICT</option>
            <option value="Kesehatan" >Kesehatan</option>
            <option value="Lingkungan Hidup" >Lingkungan Hidup</option>
            <option value="Pelayanan Terpadu Satu Pintu (PTSP)" >Pelayanan Terpadu Satu Pintu (PTSP)</option>
            <option value="Pemberdayaan Ekonomi" >Pemberdayaan Ekonomi</option>
            <option value="Pendidikan" >Pendidikan</option>
            <option value="Tata kelola pemerintahan yang baik" >Tata kelola pemerintahan yang baik</option>
          </select>
        </div>
        <div id="ringkasan">
          <h4><strong>Ringkasan</strong></h4>
          <p>Ringkaslah proposal anda dalam 300 kata</p>
          <div class="form-group">
            <textarea class="form-control" name="ringkasan" id="tes">{{$proposal->ringkasan}}</textarea>
          </div>
        </div>
        <div id="analisis">
          <h4><strong>Analisis</strong></h4>
          <p>Uraikan situasi yang ada sebelum inovasi pelayanan publik ini dimulai dalam 500 kata</p>
          <div class="form-group">
            <textarea class="form-control" name="analisis" id="tes">{{$proposal->analisis}}</textarea>
          </div>
        </div>
        <div id="pendekatan">
          <h4><strong>Pendekatan</strong></h4>
          <p>Ringkaslah tentang apa dan bagaimana inovasi pelayanan publik ini telah memecahkan masalah, dan uraikan strateginya dalam 600 kata</p>
          <div class="form-group">
            <textarea class="form-control" name="pendekatan" id="tes">{{$proposal->pendekatan}}</textarea>
          </div>
        </div>
        <div id="pelaksanaan">
          <h4><strong>Pelaksanaan</strong></h4>
          <p></p>
          <div class="form-group">
            <textarea class="form-control" name="pelaksanaan" id="tes">{{$proposal->pelaksanaan}}</textarea>
          </div>
        </div>
        <div id="rencana">
          <h4><strong>Rencana</strong></h4>
          <p></p>
          <div class="form-group">
            <textarea class="form-control" name="rencana" id="tes">{{$proposal->rencana}}</textarea>
          </div>
        </div>
         
        <div id="kreatif">
          <h4><strong>Kreatif dan Inovasi</strong></h4>
          <p>Jelaskan bahwa inovasi pelayanan publik yang diajukan ini bersifat unik dan mampu menyelesaikan masalah dengan cara-cara baru dan berbeda dari metode sebelumnya serta berhasil diimplementasikan dalam 200 kata</p>
          <div class="form-group">
            <textarea class="form-control" name="kreatif" id="tes">{{$proposal->kreatif_inovatif}}</textarea>
          </div>
        </div>
        
        <div id="sumber">
          <h4><strong>Sumber Daya</strong></h4>
          <p>Sebutkan biaya untuk sumber daya keuangan, teknis, dan manusia yang berkaitan dengan inovasi pelayanan publik ini dalam 500 kata</p>
          <div class="form-group">
            <textarea class="form-control" name="sumber" id="tes">{{$proposal->sumberdaya}}</textarea>
          </div>
        </div>
        <div id="keluaran">
          <h4><strong>Keluaran</strong></h4>
          <p>Sebutkan paling banyak lima keluaran konkret yang mendukung keberhasilan inovasi pelayanan publik ini dalam 400 kata</p>
          <div class="form-group">
            <textarea class="form-control" name="keluaran" id="tes">{{$proposal->keluaran}}</textarea>
          </div>
        </div>
        <div id="pemantauan">
          <h4><strong>Pemantauan</strong></h4>
          <p>Uraikan bagaimana pelaksanaan inovasi pelayanan publik ini dipantau dan dievaluasi dalam 400 kata</p>
          <div class="form-group">
            <textarea class="form-control" name="pemantauan" id="tes">{{$proposal->pemantauan}}</textarea>
          </div>
        </div>  
        <div id="kendala">
          <h4><strong>Kendala</strong></h4>
          <p>Uraikan masalah utama yang dihadapi selama pelaksanaan inovasi pelayanan publik ini beserta cara penanggulangan dan penyelesaiannya dalam 300 kata</p>
          <div class="form-group">
            <textarea class="form-control" name="kendala" id="tes">{{$proposal->kendala}}</textarea>
          </div>  
        </div>
        <div id="manfaat">
          <h4><strong>Manfaat</strong></h4>
          <p>Uraikan dampak dari inovasi pelayanan publik ini dalam 700 kata, berikan beberapa pembuktian /data yang menunjukkan dampak/manfaat dari inovasi pelayanan publik ini</p>
          <div class="form-group">
            <textarea class="form-control" name="manfaat" id="tes">{{$proposal->manfaat}}</textarea>
          </div>
        </div>
        <div id="perbedaan">
          <h4><strong>Perbedaan</strong></h4>
          <p>uraikan perbedaan sebelum dan sesudah inovasi pelayanan publik ini dilakukan dalam 700 kata</p>
          <div class="form-group">
            <textarea class="form-control" name="perbedaan" id="tes">{{$proposal->sebelum_sesudah}}</textarea>
          </div>
        </div>  
        <div id="keselarasan">
          <h4><strong>Keselarasan</strong></h4>
          <p>Apa saja dari kegiatan inovasi tersebut yang sejalan dengan satu atau lebih dari 17 Tujuan Pembangunan Berkelanjutan? Jelaskan kegiatan inovasi tersebut selaras dengan pencapaian salah satu atau lebih Tujuan Pembangunan Berkelanjutan Jawaban disampaikan dalam paling banyak 300 kata</p>
          <div class="form-group">
            <textarea class="form-control" name="keselarasan" id="tes">{{$proposal->keselarasan}}</textarea>
          </div>
        </div>  
        <div id="pembelajaran">
          <h4><strong>Pembelajaran</strong></h4>
          <p>Uraikan pengalaman umum yang diperoleh dalam melaksanakan inovasi pelayanan publik ini, pembelajarannya, dan rekomendasi untuk masa depan dalam 500 kata</p>
          <div class="form-group">
            <textarea class="form-control" name="pembelajaran" id="tes">{{$proposal->pembelajaran}}</textarea>
          </div>
        </div> 
        <div id="berkelanjutan">
          <h4><strong>Berkelanjutan</strong></h4>
          <p>Uraikan bagaimana inovasi pelayanan publik ini sedang dilanjutkan, jelaskan apakah inovasi ini sedang direplikasi (transfer of knowledge) atau didiseminasi untuk seluruh pelayanan publik di tingkat instansi, daerah, nasional dan/atau internasional, dan jelaskan bagaimana inovasi pelayanan publik ini dapat direplikasi dalam 500 kata</p>
          <div class="form-group">
            <textarea class="form-control" name="kelanjutan" id="tes">{{$proposal->kelanjutan}}</textarea>
          </div>
        </div>
        <div id="referensi">
          <h4><strong>Referensi</strong></h4>
          <p></p>
          <div class="form-group">
            <textarea class="form-control" name="referensi" id="tes">{{$proposal->referensi}}</textarea>
          </div>
        </div>  
        <div class="form-group">
          <a href="" class="btn btn-lg btn-default">Kembali</a>
          <button type="submit" class="btn btn-lg btn-primary">Simpan</button>
        </div>
      </div>



      
  

