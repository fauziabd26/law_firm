@extends('user.template')
@section('tittle','law firm')
@section('content')
<br>
<br>
            <section id="banner">
     
    <!-- Slider -->
        <div id="main-slider" class="flexslider">
            <ul class="slides">
              <li>
                <img src="img/slides/1.jpg" alt="" />
                <div class="flex-caption">
                    <h3>WELCOME</h3> 
                    <p>SELAMAT DATANG</p> 
                     
                </div>
              </li>
              <li>
                <img src="img/slides/2.jpg" alt="" />
                <div class="flex-caption">
                    <h3>AMIRUDDIN & PARTNERS </h3> 
                    <p>PROFESIONAL, MUDA, BERTANGGUNG JAWAB, BERPENGALAMAN, BERINTEGRITAS, JARINGAN YANG LUAS</p> 
                     
                </div>
              </li>
            </ul>
        </div>
    <!-- end slider --> 
</section>
<section id="content"> 
    <div class="container">
            <div class="row">
            <div class="col-md-12">
                <div class="aligncenter"><h2 class="aligncenter">Pelayanan Kami</h2>
                    <p>LAW FIRM kami menyediakan lingkup jasa pelayanan hukum sebagai berikut:</p>
                <br/>
            </div>
        </div>

     <div class="row">
            <div class="col-sm-4 info-blocks"> 
                <i class="icon-info-blocks material-icons">filter_drama</i>
                <div class="info-blocks-in">
                    <h3>Konsultasi</h3>
                    <p>1. Konsultasi atas segala permasalahan yang berkaitan dengan hukum, termasuk segala macam aspek dari peraturan perundang-undangan yang berlaku di Indonesia</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks material-icons">input</i>
                <div class="info-blocks-in">
                    <h3>Kepuasan</h3>
                    <p>2. Memberikan Jasa Pendapat Hukum (Legal Opinion) dan Tinjauan Hukum (Legal Review) atas seluruh permasalahan yang dihadapi oleh Klien</p>
                </div>
            </div>
            <div class="col-sm-4 info-blocks">
                <i class="icon-info-blocks material-icons">repeat</i>
                <div class="info-blocks-in">
                    <h3>Upaya</h3>
                    <p>3. Melakukan upaya pendekatan-pendekatan khusus baik secara non litigasi maupun litigasi, sehingga tercapai suatu penyelesaian permasalahan hukum yang dapat diselesaikan dengan metode kekeluargaan sehingga apa yang diinginkan oleh klien dapat terselesaikan dengan baik</p>
                </div>
            </div>
        </div>
        <a href="/lingkupkerja" class="btn btn-primary waves-effect waves-dark">Read More..</a>
    </div>
    </section>
    
    <section class="section-padding gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Tentang Kami</h2>
                        <p>Firma hukum ini sebelumnya bernama Law Office
                            AMIRUDDIN, S.H., M.H. & Partners (yang dikenal
                            sebagai Law office A&P ). Law Office A&P didirikan
                            oleh Amiruddin, S.H. dalam bentuk kerjasama berupa Konsultan Hukum dibidang Hukum Perusahaan,
                            Perbankan dan Kepailitan pada tanggal 16 September
                            2016.</p>
                            <p>Pada tahun 2019, Law Office A&P telah menjadi Kantor Hukum (perseroan dengan firma ) yang
                            berbadan hukum berdasarkan Akta Pendirian No. 20 Tertanggal 16 Agustus 2019 dihadapan notaris Muh.
                            Asyurah, SH., MH., M.Kn sehingga namanya menjadi
                            Law Firm AMIRUDDIN, S.H., M.H. & Partners yang
                            dikenal saat ini sebagai (APLaw Firm).</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-text">
                        <p>Why Choose us?</p>

                        <ul class="withArrow">
                            <li><span class="fa fa-angle-right"></span> Memiliki relasi dan jaringan kerja sama yang luas dengan berbagai pihak.</li>
                            <li><span class="fa fa-angle-right"></span> Terdapat Sosok-sosok pengacara muda yang memiliki etos dan semangat kerja tinggi, bertanggung jawab, berintegritas, profesional serta berpengalaman dalam melakukan kerja-kerja pembelaan dan pendampingan hukum.</li>
                            <li><span class="fa fa-angle-right"></span> Terbukti berpengalaman dalam menangani berbagai perkara hukum.</li>
                        </ul>
                        <a href="/about" class="btn btn-primary waves-effect waves-dark">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-image">
                        <img src="img/about.jpg" alt="About Images">
                    </div>
                </div>
            </div>
        </div>
    </section>    
    
    
    <!-- <div class="about home-about">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="block-heading-two">
                        <h3><span>Testimonials</span></h3>
                    </div>  
                    <div class="testimonials">
                        <div class="active item">
                            <blockquote><p>Lorem ipsum dolor met consectetur adipisicing. Aorem psum dolor met consectetur adipisicing sit amet, consectetur adipisicing elit, of them jean shorts sed magna aliqua. Lorem ipsum dolor met.</p></blockquote>
                            <div class="carousel-info">
                                <img alt="" src="img/team4.jpg" class="pull-left">
                                <div class="pull-left">
                                    <span class="testimonials-name">Marc Cooper</span>
                                    <span class="testimonials-post">Technical Director</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div> -->
<br>
<br>
@stop