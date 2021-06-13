<!DOCTYPE html>
<html>
<head>
  <!-- Sweetalert2 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

  <!-- Intro.js -->
  <link rel="stylesheet" type="text/css" href="https://unpkg.com/intro.js/minified/introjs.min.css">
  <script type="text/javascript" src="https://unpkg.com/intro.js/minified/intro.min.js"></script>

  @include('layouts.admin._head')
  
  <style>
    ul {
    padding:0;
    margin:0
    }
    li {
    list-style:none
    }
    a:focus,a:hover {
    text-decoration:none;
    -webkit-transition:.3s ease;
    -o-transition:.3s ease;
    transition:.3s ease
    }
    a:focus {
    outline:0
    }
    img {
    max-width:100%
    }
    p {
    font-size:16px;
    line-height:30px;
    color:#898b96;
    font-weight:300
    }
    h4 {
    font-family:Rubik,sans-serif;
    margin:0;
    font-weight:400;
    padding:0;
    color:#363940
    }
    a {
    color:#5867dd
    }
    .no-padding {
    padding:0!important
    }
    .footer-big {
    padding:50px 0 65px 0
    }
    .footer-big .footer-widget {
    margin-bottom:40px
    }
    .footer--light {
    background:#e7e8ed
    }
    .footer-big .footer-menu ul li a,.footer-big p,.footer-big ul li {
    color:#898b96
    }
    .footer-menu {
    padding-left:48px
    }
    .footer-menu ul li a {
    font-size:15px;
    line-height:32px;
    -webkit-transition:.3s;
    -o-transition:.3s;
    transition:.3s
    }
    .footer-menu ul li a:hover {
    color:#5867dd
    }
    .footer-menu--1 {
    width:100%
    }
    .footer-widget-title {
    line-height:42px;
    margin-bottom:10px;
    font-size:18px
    }
    .mini-footer {
    background:#192027;
    text-align:center;
    padding:32px 0
    }
    .mini-footer p {
    margin:0;
    line-height:26px;
    font-size:15px;
    color:#999
    }
    .mini-footer p a {
    color:#5867dd
    }
    .mini-footer p a:hover {
    color:#34bfa3
    }
    .widget-about img {
    display:block;
    margin-bottom:30px
    }
    .widget-about p {
    font-weight:400
    }
    .widget-about .contact-details {
    margin:30px 0 0 0
    }
    .widget-about .contact-details li {
    margin-bottom:10px
    }
    .widget-about .contact-details li:last-child {
    margin-bottom:0
    }
    .widget-about .contact-details li span {
    padding-right:12px
    }
    .widget-about .contact-details li a {
    color:#5867dd
    }
    @media (max-width:991px) {
    .footer-menu {
      padding-left:0
    }
    }
  </style>
</head>
  <body class="hold-transition skin-red layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="./.../index2.html" class="logo-lg">
                <img src="{{ asset('adminlte/dist/img/logo.png') }}">
              </a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Navbar Right Menu -->
            <div class="collapse navbar-collapse" id="navbar-collapse">
              <ul class="nav navbar-nav">
                <li class="{{ set_active('home.guest') }}"><a href="{{ route('home.guest') }}">Halaman Utama</a></li>
                <li class="{{ set_active('video.guest') }}"><a href="{{ route('video.guest') }}">Video</a></li>
                <li><a href="https://www.tirtomoyo.desa.id/" target="_blank">Desa TirtoMoyo</a></li>
                <li><a href="{{ route('download') }}">Panduan</a></li>
                <li><a href="{{ route('login') }}">Login</a></li>
              </ul>
            </div>
            <!-- /.navbar-custom-menu -->
          </div>
          <!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
          @yield('content')
        </div>
        <!-- /.container -->
      </div>
      <!-- /.content-wrapper -->
      
      <footer class="footer-area footer--light">
        <div class="footer-big">
          <!-- start .container -->
          <div class="container">
            <div class="row">
              <div class="col-md-3 col-sm-12">
                <div class="footer-widget">
                  <div class="widget-about">
                    <img src="https://cdn-2.tstatic.net/tribunnewswiki/foto/bank/images/logo-universitas-bina-nusantara-ubinus.jpg" alt="" class="img-fluid">
                    <p>Bina Nusantara Malang</p>
                    <ul class="contact-details">
                      <li>
                        <span class="icon-earphones"></span> Call Us:
                        <a href="tel:344-755-111">344-755-111</a>
                      </li>
                      <li>
                        <span class="icon-envelope-open"></span>
                        <a href="mailto:support@aazztech.com">support@aazztech.com</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- Ends: .footer-widget -->
              </div>
              <!-- end /.col-md-4 -->
              <div class="col-md-3 col-sm-4">
                <div class="footer-widget">
                  <div class="footer-menu footer-menu--1">
                    <h4 class="footer-widget-title">Popular Category</h4>
                    <ul>
                      <li>
                        <a href="#">Wordpress</a>
                      </li>
                      <li>
                        <a href="#">Plugins</a>
                      </li>
                      <li>
                        <a href="#">Joomla Template</a>
                      </li>
                      <li>
                        <a href="#">Admin Template</a>
                      </li>
                      <li>
                        <a href="#">HTML Template</a>
                      </li>
                    </ul>
                  </div>
                  <!-- end /.footer-menu -->
                </div>
                <!-- Ends: .footer-widget -->
              </div>
              <!-- end /.col-md-3 -->

              <div class="col-md-3 col-sm-4">
                <div class="footer-widget">
                  <div class="footer-menu">
                    <h4 class="footer-widget-title">Our Company</h4>
                    <ul>
                      <li>
                        <a href="#">About Us</a>
                      </li>
                      <li>
                        <a href="#">How It Works</a>
                      </li>
                      <li>
                        <a href="#">Affiliates</a>
                      </li>
                      <li>
                        <a href="#">Testimonials</a>
                      </li>
                      <li>
                        <a href="#">Contact Us</a>
                      </li>
                      <li>
                        <a href="#">Plan &amp; Pricing</a>
                      </li>
                      <li>
                        <a href="#">Blog</a>
                      </li>
                    </ul>
                  </div>
                  <!-- end /.footer-menu -->
                </div>
                <!-- Ends: .footer-widget -->
              </div>
              <!-- end /.col-lg-3 -->

              <div class="col-md-3 col-sm-4">
                <div class="footer-widget">
                  <div class="footer-menu no-padding">
                    <h4 class="footer-widget-title">Help Support</h4>
                    <ul>
                      <li>
                        <a href="#">Support Forum</a>
                      </li>
                      <li>
                        <a href="#">Terms &amp; Conditions</a>
                      </li>
                      <li>
                        <a href="#">Support Policy</a>
                      </li>
                      <li>
                        <a href="#">Refund Policy</a>
                      </li>
                      <li>
                        <a href="#">FAQs</a>
                      </li>
                      <li>
                        <a href="#">Buyers Faq</a>
                      </li>
                      <li>
                        <a href="#">Sellers Faq</a>
                      </li>
                    </ul>
                  </div>
                  <!-- end /.footer-menu -->
                </div>
                <!-- Ends: .footer-widget -->
              </div>
              <!-- Ends: .col-lg-3 -->

            </div>
            <!-- end /.row -->
          </div>
          <!-- end /.container -->
        </div>
        <!-- end /.footer-big -->

        <div class="mini-footer">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <div class="copyright-text">
                  <p>
                    Copyright &copy; 2020 <a href="#">Community Service Binus@Malang</a>.</strong> All rights reserved.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- ./wrapper -->
    @stack('script')
  </body>
</html>

