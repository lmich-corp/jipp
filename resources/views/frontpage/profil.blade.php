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
                <li class="breadcrumb-item active" aria-current="page">Tentang Kami</li>
            </ol>
        </div>
        </nav>
    </header>

    <section class="py-5">
        <div class="container">
            <h1 align="center">TENTANG JIPP</h1>
            <p align="justify">Salam Inovasi..!</p>
            <p align="justify">Jaringan Inovasi Pelayanan Publik Jawa Tengah (JIPPJATENG) diinisiasi oleh Pemerintah Provinsi Jawa Tengah melalui Biro Organisasi bersama program TRANSFORMASI (Transforming Administration-Strengthening Innovation) yang diimplementasikan oleh Deutsche Gesellschaft fuer Internationale Zusammenarbeit (GIZ) GmbH. TRANSFORMASI merupakan program kerja sama Pemerintah Indonesia dengan Pemerintah Jerman. Selain Biro Organisasi dan TRANSFORMASI, pembentukan JIPPJATENG juga melibatkan perguruan tinggi, media massa, organisasi masyarakat sipil, dan mitra pembangunan lainnya (KINERJA-USAID dan KOMPAK).</p>
            <p align="justify">Dibentuk sebagai sarana penyebarluasan dan pembelajaran inovasi pelayanan publik yang dikembangkan oleh pemerintah provinsi dan kabupaten-kota di Jawa Tengah. Dari situs JIPPJATENG para penyedia pelayanan publik di Jawa Timur dapat saling belajar dan bertukar informasi tentang praktik dan program inovatif yang telah dirasakan manfaatnya oleh masyarakat. Praktik dan program inovatif tersebut tersebar di unit pelayanan publik di bawah pemerintah provinsi maupun kabupaten-kota</p>
            <p align="justify">Selain Biro Organisasi Setda Provinsi Jawa Tengah pembentukan JIPPJATENG juga melibatkan Kementerian PAN-RB, perguruan tinggi, media massa, organisasi masyarakat sipil, dan mitra pembangunan lainnya.</p>
            <p align="justify">Dibentuk sebagai sarana penyebarluasan dan pembelajaran inovasi pelayanan publik yang dikembangkan oleh pemerintah provinsi dan kabupaten/kota di Jawa Tengah. Dari situs JIPPJATENG para penyedia pelayanan publik di Jawa Tengah dapat saling belajar dan bertukar informasi tentang praktik dan program inovatif yang telah dirasakan manfaatnya oleh masyarakat. Praktik dan program inovatif tersebut tersebar di unit pelayanan publik di bawah pemerintah provinsi maupun kabupaten-kota.</p>
            <p align="justify">Inovasi pelayanan publik tumbuh subur di Jawa Tengah, baik di tingkat provinsi maupun kabupaten/kota. Hal ini dimungkingkan akan menumbuhkan dominasi kompetisi Jawa Tengah pada acara-acara kompetisi inovasi maupun berbagai dokumentasi inovasi pelayanan publik yang disusun oleh beberapa lembaga. Dalam Kompetisi Inovasi Pelayanan Publik (SINOVIK) yang dilaksanakan oleh Kementerian Pendayagunaan Aparatur Negara dan Reformasi Birokrasi (KemenPANRB) dua tahun terakhir, misalnya, inovasi-inovasi dari Jawa Tengah akan mendapatkan TOP 99 Inovasi Pelayanan Publik Terbaik maupun Top 40.</p>
            <p align="justify">Inovasi-inovasi yang ditampilkan dalam situs JIPPJATENG ini dihimpun dari berbagai sumber. Di antaranya dari SINOVIK, APEKSI (Asosiasi Pemerintah Kota Seluruh Indonesia.</p>
            <p align="justify">Dari situs ini, para pelayan publik dan masyarakat umum dapat berinteraksi langsung dengan orang-orang yang berada di balik inovasi yang ditampilkan. Sebab, pada setiap inovasi yang diunggah sudah dilengkapi dengan contact person melalui telepon maupun email. Tak ketinggalan, kami juga mengundang masyarakat untuk memberikan masukan dan komentar atas inovasi yang ditampilkan. Selain itu, lewat situs JIPPJATENG ini warga Jawa Tengah dapat menyampaikan keluhan atas pelayanan publik yang diterima. Keluhan pelayanan publik tersebut akan diteruskan ke Ombudsman Republik Indonesia (ORI) Perwakilan Jawa Tengah untuk ditindaklanjuti.</p>
            <p align="justify">Selamat berinovasi!</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2>Kontak Kami</h2>
            <hr>
            <div class="row">

                <div class="col-md-6 col-sm-6">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama </label>
                            <input type="nama" class="form-control" id="nama" placeholder="Nama">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">E-mail</label>
                            <input type="email" class="form-control" id="" placeholder="Password">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Komentar/Pesan</label>
                            <textarea class="form-control" id="" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </form>
                </div>
            </div>

        </div>
    </section>

@stop