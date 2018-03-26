<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>JIPP Jawa Tengah</title>

    <!-- Bootstrap core CSS -->
    <link href="front/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="front/css/full-slider.css" rel="stylesheet">
    <link href="front/css/footer.css" rel="stylesheet">

    <link href="front/vendor/font-awesome-4.7.0/css/font-awesome.css" rel="stylesheet">

    <link rel="shortcut icon" href="admin/img/avatar-1.png">

    <script src="/code.jquery.com/jquery-1.11.1.min.js"></script>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #9D2629 !important;">
        <div class="container">
            <img src="front/image/Jawa_Tengah.png" alt="Smiley face" height="70" width="70" style="margin-right:10px">
            <a class="navbar-brand" href="/">JIPP JATENG<br>
		<font size="2">Jaringan Inovasi Pelayanan Publik Jawa Tengah</font></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item ">
              <a class="nav-link" href="/" style="color: white">Beranda
                <span class="sr-only">(current)</span>
              </a>
                    </li>
                     <li class="nav-item">
                        <a class="nav-link" href="/profil" style="color: white">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/etalase" style="color: white">Etalase</a>
                    </li>
                    
                    <li class="nav-item">
                        <a class="nav-link" href="/ideinovasi" style="color: white">Ide Inovasi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/warta" style="color: white">Warta</a>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
         Referensi
        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/regulasi">Regulasi</a>
                            <a class="dropdown-item" href="/regulasi">Materi</a>
                            <a class="dropdown-item" href="/regulasi">E-book</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
         Agenda
        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown1">
                            <a class="dropdown-item" href="/agendanas">Nasional</a>
                            <a class="dropdown-item" href="/agendaprov">Provinsi</a>
                            <a class="dropdown-item" href="/agendakab">Kabupaten/Kota</a>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="/login" style="color: white">Login</a>
                    </li>
          
                </ul>
            </div>
        </div>
    </nav>

        @yield('content')

    <link href="css/footer.css" rel="stylesheet">

     <footer class="py-0" style="background-color: #000000 !important;">
    <!--Social buttons-->
    <div class="py-3 text-white" style="background-color: #9D2629 !important; bottom: 0.2;">

    <!--Footer Links-->
    <div class="container text-center text-md-left">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">JIPP</h6>
                    <p>JIPPJATENG diinisiasi oleh Pemerintah Provinsi Jawa Tengah merupakan kemitraan antara Pemerintah Australia dan Indonesia dalam mendukung program pengentasan kemiskinan Pemerintah Indonesia</p>
                </div>
            <!--/.First column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Second column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Referensi</h6>
                <ul class="list-unstyled">
                    <li>
                        <a href="http://jippjateng.ikitas.com/regulasi">Regulasi</a>
                    </li>
                    <li>
                        <a href="http://jippjateng.ikitas.com/materi">Materi</a>
                    </li>
                    <li>
                        <a href="http://jippjateng.ikitas.com/e-book">E-book</a>
                    </li>
                </ul>
            </div>
            <!--/.Second column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Third column-->
             <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Link Terkait</h6>
                    <ul class="list-unstyled">
                        <li><a href="http://laporgub.jatengprov.go.id/" class="badge badge-light">Lapor Gub</a></li>
                        <li><a href="https://menpan.go.id" class="badge badge-light">Menpan</a></li>
                    </ul>
                </div>
            <!--/.Third column-->

            <hr class="clearfix w-100 d-md-none">

            <!--Fourth column-->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Kontak</h6>
                    <p>
                        <i class="fa fa-home mr-2"></i>Jl. Pahlawan No.9 Semarang, Jawa Tengah 50243</p>
                    <p>
                        <i class="fa fa-envelope mr-2"></i>jipp@gmail.com</p>
                    <p>
                        <i class="fa fa-phone mr-2"></i>024 - 8311174</p>
                </div>

            <!--/.Fourth column-->
        </div>
    </div>
    <!--/.Footer Links-->
  </div>

    <hr>

     <div class="text-center text-white text-md-center">
                            <ul class="list-unstyled list-inline text-white">
                                <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1" href="#" target="blank"><i class="fa fa-facebook fa-sm"></i></a></li>
                                <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1" href="#" target="blank"><i class="fa fa-twitter fa-sm"></i></a></li>
                                <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1" href="#" target="blank"><i class="fa fa-google-plus fa-sm"></i></a></li>
                                <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1" href="#" target="blank"><i class="fa fa-linkedin fa-sm"></i></a></li>
                                <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1" href="#" target="blank"><i class="fa fa-youtube fa-sm"></i></a></li>
                                <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1" href="#" target="blank"><i class="fa fa-telegram fa-sm"></i></a></li>
                                <li class="list-inline-item"><a class="btn-floating btn-sm rgba-white-slight mx-1" href="#" target="blank"><i class="fa fa-instagram fa-sm"></i></a></li>
                            </ul>
                        </div>
    <!--/.Social buttons-->

    <!--Copyright-->
    <div class="footer-copyright py-3 text-center text-white">
        © 2018 IPP Jawa Tengah <strong>|| Develop By IKITAS</strong></a>
    </div>
    <!--/.Copyright-->
</footer>

    <script src="front/vendor/jquery/jquery.min.js"></script>
    <script src="front/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>