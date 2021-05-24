<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>@yield('tittle')</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="description" content="" />
<meta name="author" content="http://webthemez.com" />
<!-- css --> 
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="materialize/css/materialize.min.css" media="screen,projection" />
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet"> 
<link href="css/flexslider.css" rel="stylesheet" /> 
<link href="css/style.css" rel="stylesheet" />
 
<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

</head>
<body>
<div id="wrapper" class="home-page"> 
    <!-- start header -->
    <header>
        <div class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><img src="img/logo.png" alt="logo"/></a>
                </div>
                <div class="navbar-collapse collapse ">
                    <ul class="nav navbar-nav">
                        <li class="active"><a class="waves-effect waves-dark" href="/">Home</a></li> 
                         <li class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle waves-effect waves-dark">About Us <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a class="waves-effect waves-dark" href="/about">1. Company</a></li>
                            <li><a class="waves-effect waves-dark" href="/visimisi">2. Visi & Misi</a></li>
                            <li><a class="waves-effect waves-dark" href="/showmitratim">3. Mitra & Team</a></li><li><a class="waves-effect waves-dark" href="/showmitraorgan">4. Mitra Organisasi</a></li>
                        </ul>
                    </li> 
                        <li><a class="waves-effect waves-dark" href="/lingkupkerja">lingkup kerja</a></li>
                        <li><a class="waves-effect waves-dark" href="/bidanghukum">bidang hukum</a></li>
                        <li><a class="waves-effect waves-dark" href="/kontak_kami">Contact</a></li>
                        <li><a class="waves-effect waves-dark" href="/loginUser">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
      
    @show
    @yield('content')
                    
                    

    <footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Our Contact</h5>
                    <address>
                        <strong>Kantor Cabang Makassar</strong><br>
                        Ruko Zamrud Blok B No. 20, Jl. Topaz Raya,
                        Panakukkang, Makassar , Indonesia. <br>
                        <br>
                        <strong>Kantor Cabang Jakarta</strong><br>
                        Jl. Wijaya 1 gang Langgar, RT 008 / RW 003. No. 9,
                        Kebayoran Baru - Jakarta Selatan, 12170
                    </address>
                    <p>
                        <i class="fa fa-phone" ></i>  :  0411-4098048 /+62 85240431341 <br>
                        <i class="fa fa-envelope"></i> :  lawfirmamiruddin@gmail.com
                    </p>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">About Us</h5>
                    <ul class="link-list">
                        <li><a class="waves-effect waves-dark" href="/about">Our Company</a></li>
                        <li><a class="waves-effect waves-dark" href="/visimisi">Visi & Misi</a></li>
                        <li><a class="waves-effect waves-dark" href="/mitratim">Mitra & Team</a></li>
                        <li><a class="waves-effect waves-dark" href="/mitraorgan">Mitra Organisasi Kami</a></li>
                        <li><a class="waves-effect waves-dark" href="/kontak_kami">Contact us</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading">Ruang Lingkup Pekerjaan</a></h5>
                    <ul class="link-list">
                        <li><a class="waves-effect waves-dark" href="/lingkupkerja">LAW FIRM kami menyediakan lingkup jasa pelayanan hukum sebagai berikut: (Read More..)</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <h5 class="widgetheading"> Bidang Hukum Yang Di Tangani.</a></h5>
                    <ul class="link-list">
                        <li><a class="waves-effect waves-dark" href="/bidanghukum">Law Firm Kami juga memberikan Jasa Pelayanan Hukum dalam bidang sebagaimana (Read More...) </a></li>
                        <li><a class="waves-effect waves-dark" href="#"></a></li>
                        <li><a class="waves-effect waves-dark" href="#"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            <span> Copyright &copy; Law Firma Amirrudin & Partners</span>
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <li><a class="waves-effect waves-dark" href="https://www.facebook.com/lawfirmamiruddin" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="https://www.instagram.com/amiruddinpartners_lawfirm/" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="https://bit.ly/2S1kIB2" data-placement="top" title="WhatsApp"><i class="fa fa-phone"></i></a></li>
                        <!-- <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a class="waves-effect waves-dark" href="#" data-placement="top" title="Google plus"><i class="fa fa-google-plus"></i></a></li> -->
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </footer>
</div>
<a href="#" class="scrollup waves-effect waves-dark"><i class="fa fa-angle-up active"></i></a>
<!-- javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="materialize/js/materialize.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>  
<script src="js/jquery.flexslider.js"></script>
<script src="js/animate.js"></script>
<!-- Vendor Scripts -->
<script src="js/modernizr.custom.js"></script>
<script src="js/jquery.isotope.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/animate.js"></script> 
<script src="js/custom.js"></script>
</body>
</html>