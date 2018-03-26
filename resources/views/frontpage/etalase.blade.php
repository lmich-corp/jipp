@extends('frontpage._layout')
@section('content')
    <br>
    <br>
    <br>
    <header style="margin-top:10px;">
        <nav aria-label="breadcrumb">
        <div class="container">
            <ol class="breadcrumb navbar-collapse">
                <li class="breadcrumb-item"><a href="#" style="color: black">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Direktori</li>
            </ol>
        </div>
        </nav>
    </header>

    <section>
        <div class="row">
            <div class="container">
            <div class="col-sm">
                <div class="form-group mb-2">
                    <label for="category"><b>Kategori</b></label>
                    <select class="form-control" id="category" name="catid">
                        <option value="">- Semua -</option>
                        <option value="8">Adminduk Capil</option>
                        <option value="7">ICT</option>
                        <option value="6">Kesehatan</option>
                        <option value="5">Lingkungan Hidup</option>
                        <option value="4">Pelayanan Terpadu Satu Pintu (PTSP)</option>
                        <option value="3">Pemberdayaan Ekonomi</option>
                        <option value="2">Pendidikan</option>
                        <option value="1">Tata kelola pemerintahan yang baik</option>
                    </select>
                    <span class="labelform">Pilih kategori yang diinginkan atau pilih "Semua" untuk menampilkan seluruh inovasi.</span>
                </div>
            </div>

            <div class="col-sm">
                <div class="form-group">
                    <label for="keywords"><b>Kata Kunci</b></label>
                    <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Kata Kunci">
                </div>
            </div>

            <div class="col-sm">
                <div class="form-group">
                    <label>&nbsp;</label>
                    <button type="submit" class="btn btn-primary form-control">Cari</button>
                </div>
            </div>
        </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">

            <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                  <form method="POST" action="{{url('direktori/cari')}}" enctype="multipart/form-data">
                    {{ csrf_field()}}
                    <input type="hidden" name="hid" value="ada">
                 
                  </div>
                  </div>
                  <div class="col-md-3">
                      <select class="form-control" id="category" name="catid">
                        <option value="">- Semua -</option>
                        <option value="8">Adminduk Capil</option>
                        <option value="7">ICT</option>
                        <option value="6">Kesehatan</option>
                        <option value="5">Lingkungan Hidup</option>
                        <option value="4">Pelayanan Terpadu Satu Pintu (PTSP)</option>
                        <option value="3">Pemberdayaan Ekonomi</option>
                        <option value="2">Pendidikan</option>
                        <option value="1">Tata kelola pemerintahan yang baik</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <a href="#" class="btn btn-primary">Cari</a> 
                    </div>
                  </div>
                </form>
              </div>
              <div id="map" style="height: 400px;"></div>
              <script>
                var markers=[];
                function initMap() {
                  
                  map = new google.maps.Map(document.getElementById('map'), {
                  center: {
                    lat: -7.035474,
                    lng: 110.205112
                  },
                  zoom: 9
                });
                  var loc= <?php echo json_encode($locationsPeta);?>;
                  // var icons= "<?php echo url('front_end/img/1.png')?>";
                  infowindow = new google.maps.InfoWindow();
                  var contentString=[];
                  for (i=0;i<loc.length;i++){
                    var kat;
                    if (loc[i]["kategori_kelompok"]==''){
                      kat=loc[i]["kategori"];
                    }else{
                      kat=loc[i]["kategori_kelompok"];
                    }
                    contentString[i] = "<h4>"+loc[i]["judul"]+"</h4>"+
                                        loc[i]["abstrak"]+"........<br/>";
                    var latitude=parseFloat(loc[i]['latitude']);
                    var longitude=parseFloat(loc[i]['longitude']);
                    var marker = new google.maps.Marker({
                                    position: {
                                    lat: latitude,
                                    lng: longitude
                                  },
                                    map: map
                                });
                    google.maps.event.addListener(marker, 'click', (function(marker, i) {
                      return function() {
                        infowindow.setContent(contentString[i]);
                        infowindow.setOptions({maxWidth: 500});
                        infowindow.open(map, marker);
                      }
                    }) (marker, i));
                  }
                }
              </script>
              <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAsjfPj1YJACxgd_rcvuWiTO69c9SO1Dbk&callback=initMap">
              </script>
            
  
            
            <hr>

        </div>
    </section>

@stop