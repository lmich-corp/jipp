@extends('frontpage._layout')
@section('content')
    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('front/slider/slider-1024x682.jpeg')">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('front/slider/slider1-1024x682.jpeg')">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('front/slider/slider2-1024x682.jpeg')">
                    <div class="carousel-caption d-none d-md-block">

                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <h1 align="center">TENTANG JIPP</h1>
            <p align="justify">Jaringan Inovasi Pelayanan Publik Jawa Tengah (JIPPJATENG) diinisiasi oleh Pemerintah Provinsi Jawa Tengah melalui Biro Organisasi bersama program TRANSFORMASI (Transforming Administration-Strengthening Innovation) yang diimplementasikan oleh Deutsche Gesellschaft fuer Internationale Zusammenarbeit (GIZ) GmbH. TRANSFORMASI merupakan program kerja sama Pemerintah Indonesia dengan Pemerintah Jerman. Selain Biro Organisasi dan TRANSFORMASI, pembentukan JIPPJATENG juga melibatkan perguruan tinggi, media massa, organisasi masyarakat sipil, dan mitra pembangunan lainnya (KINERJA-USAID dan KOMPAK).</p>
            <p align="justify">Dibentuk sebagai sarana penyebarluasan dan pembelajaran inovasi pelayanan publik yang dikembangkan oleh pemerintah provinsi dan kabupaten-kota di Jawa Tengah. Dari situs JIPPJATENG para penyedia pelayanan publik di Jawa Timur dapat saling belajar dan bertukar informasi tentang praktik dan program inovatif yang telah dirasakan manfaatnya oleh masyarakat. Praktik dan program inovatif tersebut tersebar di unit pelayanan publik di bawah pemerintah provinsi maupun kabupaten-kota</p>
            <p align="center">
                <a href="http://jippjateng.ikitas.com/tentang-kami/"><button type="button" class="btn btn-danger">Selengkapnya</button></a>
            </p>
        </div>
    </section>
    <section class="py-5" style="background-color: #9D2629 !important;">
        <div class="container text-white">
            <h1 class="my-4" align="center">Referensi</h1>

            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-2 col-sm-6 mb-4">
                    <a href="http://jippjateng.ikitas.com/regulasi/">
                        <i class="fa fa-book fa-5x"></i>
                        <h4>Regulasi</h4>
                        <p>Konten tentang Regulasi</p>
                    </a>
                </div>

                <div class="col-md-2 col-sm-6 mb-4">
                    <a href="http://jippjateng.ikitas.com/regulasi/">
                        <i class="fa fa-file-pdf-o fa-5x"></i>
                        <h4>Materi</h4>
                        <p>Konten Tentang Materi</p>
                    </a>
                </div>

                <div class="col-md-2 col-sm-6 mb-4">
                    <a href="http://jippjateng.ikitas.com/regulasi/">
                        <i class="fa fa-file-pdf-o fa-5x"></i>
                        <h4>E-book</h4>
                        <p>Konten tentang E-book</p>
                    </a>
                </div>

                <div class="col-md-2 col-sm-6 mb-4">
                    <a href="http://jippjateng.ikitas.com/tentang-kami/">
                        <i class="fa fa-phone-square fa-5x"></i>
                        <h4>Kontak</h4>
                        <p>Kontak Kami</p>
                    </a>
                </div>
                <div class="col-md-2">
                </div>

            </div>
    </section>
    <!-- Page Content -->
    <section class="py-5">
        <div class="container">
            <h1 align="center">Warta</h1>
            <br>

            <div class="row">
                <div class="col-md-6 col-lg-4 mb-4 d-flex">
                    <div class="card card-shadow">
                        <a href="https://www.petanikode.com/pygame-untuk-pemula/">
                            <img class="card-img-top lazyloaded" src="front/image/pygame.png" data-src="https://d33wubrfki0l68.cloudfront.net/774a69f5fa428ab23b32cdf5001fd20cde0e2de3/697d8/img/pygame/pygame.png" alt="Belajar Pemrograman Game dengan PyGame (Tutorial Step-by-step untuk Pemula)">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
					<a class="text-dark" href="https://www.petanikode.com/pygame-untuk-pemula/">Belajar Pemrograman Game dengan PyGame (Tutorial Step-by-step untuk Pemula)</a>
					</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-4 d-flex">
                    <div class="card card-shadow">
                        <a href="https://www.petanikode.com/css-selektor/">
                            <img class="card-img-top lazyloaded" src="css.png" data-src="https://d33wubrfki0l68.cloudfront.net/6cad899dc9dbd6f95836193edc6d160ccfb281c3/1b35a/img/css/css.png" alt="Belajar CSS: Memahami 5 Macam Selektor pada CSS">
                        </a>
                        <div class="card-body">
                            <h5 class="card-title">
            <a class="text-dark" href="https://www.petanikode.com/css-selektor/">Belajar CSS: Memahami 5 Macam Selektor pada CSS</a>
            </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4 d-flex">
                                <div class="card card-shadow">
                                    <a href="https://www.petanikode.com/python-tuple/">
                                        <img class="card-img-top lazyloaded" src="python.png" data-src="https://d33wubrfki0l68.cloudfront.net/7aa661fcb949908492ebeaa54ddc59e95321df15/67397/img/python/python.png" alt="Belajar Python: Apa itu Tuple dalam Python?">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">
            <a class="text-dark" href="https://www.petanikode.com/python-tuple/">Belajar Python: Apa itu Tuple dalam Python?</a>
            </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4 d-flex">
                                <div class="card card-shadow">
                                    <a href="https://www.petanikode.com/text-editor-atom/">
                                        <img class="card-img-top lazyloaded" src="atom.png" data-src="https://d33wubrfki0l68.cloudfront.net/473474099a89a596986a6acdfe2f39235b15237b/fea76/img/atom/atom.png" alt="[Review] Text Editor Atom di Linux, Apa saja yang Baru?">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">
            <a class="text-dark" href="https://www.petanikode.com/text-editor-atom/">[Review] Text Editor Atom di Linux, Apa saja yang Baru?</a>
            </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4 d-flex">
                                <div class="card card-shadow">
                                    <a href="https://www.petanikode.com/nodejs-http/">
                                        <img class="card-img-top lazyloaded" src="nodejs.png" data-src="https://d33wubrfki0l68.cloudfront.net/9b6a45f687abed7f9da040425138133eed6e353b/795af/img/nodejs/nodejs.png" alt="Belajar Nodejs #4: Memahami Cara Menggunakan Modul HTTP">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">
            <a class="text-dark" href="https://www.petanikode.com/nodejs-http/">Belajar Nodejs #4: Memahami Cara Menggunakan Modul HTTP</a>
            </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 mb-4 d-flex">
                                <div class="card card-shadow">
                                    <a href="https://www.petanikode.com/php-email-sendgrid/">
                                        <img class="card-img-top lazyloaded" src="php.png" data-src="https://d33wubrfki0l68.cloudfront.net/e5585e1ea24006cc8379f9da80e796bdb792d1c4/df530/img/php/php.png" alt="Cara Kirim Email dengan API Sendgrid di PHP untuk Notifikasi dan Contact Form">
                                    </a>
                                    <div class="card-body">
                                        <h5 class="card-title">
            <a class="text-dark" href="https://www.petanikode.com/php-email-sendgrid/">Cara Kirim Email dengan API Sendgrid di PHP untuk Notifikasi dan Contact Form</a>
            </h5>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12 mt-4">
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="https://www.petanikode.com/" aria-label="First"><span aria-hidden="true">««</span></a>
                            </li>
                            <li class="disabled page-item">
                                <a class="page-link" href="https://www.petanikode.com/" aria-label="Previous"><span aria-hidden="true">«</span></a>
                            </li>
                            <li class="active page-item"><a class="page-link" href="https://www.petanikode.com/">1</a></li>
                            <li><a class="page-link" href="https://www.petanikode.com/page/2/">2</a></li>
                            <li><a class="page-link" href="https://www.petanikode.com/page/3/">3</a></li>
                            <li class="disabled page-item"><a class="page-link" href="https://www.petanikode.com/#"><span aria-hidden="true">…</span></a></li>

                            <li><a class="page-link" href="https://www.petanikode.com/page/45/">45</a></li>
                            <li>
                                <a class="page-link" href="https://www.petanikode.com/page/2/" aria-label="Next"><span aria-hidden="true">»</span></a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="https://www.petanikode.com/page/45/" aria-label="Last"><span aria-hidden="true">»»</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

        </div>
    </section>
@stop

