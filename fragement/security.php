<?php

function topbar($title){

    echo '<!-- meta tags and other links -->
    <!DOCTYPE html>
    <html lang="en">
    
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Vault</title>
      <link rel="icon" type="image/png" href="vv/assets/images/favicon.jpg" sizes="16x16">
      <!-- bootstrap 4  -->
      <link rel="stylesheet" href="vv/assets/css/vendor/bootstrap.min.css">
      <!-- fontawesome 5  -->
      <link rel="stylesheet" href="vv/assets/css/all.min.css">
      <!-- line-awesome webfont -->
      <link rel="stylesheet" href="vv/assets/css/line-awesome.min.css">
      <link rel="stylesheet" href="vv/assets/css/vendor/animate.min.css">
      <!-- slick slider css -->
      <link rel="stylesheet" href="vv/assets/css/vendor/slick.css">
      <link rel="stylesheet" href="vv/assets/css/vendor/dots.css">
      <!-- dashdoard main css -->
      <link rel="stylesheet" href="vv/assets/css/main.css">
    </head>
    
    
    
      <body>
        <div class="preloader">
          <div class="preloader-container">
            <span class="animated-preloader"></span>
          </div>
        </div>
      
        <!-- scroll-to-top start -->
        <div class="scroll-to-top">
          <span class="scroll-icon">
            <i class="fa fa-rocket" aria-hidden="true"></i>
          </span>
        </div>
        <!-- scroll-to-top end -->
    
      <div class="full-wh">
        <!-- STAR ANIMATION -->
        <div class="bg-animation">
          <div id="stars"></div>
          <div id="stars2"></div>
          <div id="stars3"></div>
          <div id="stars4"></div>
        </div><!-- / STAR ANIMATION -->
      </div>
      <div class="page-wrapper">
          <!-- header-section start  -->
      <header class="header">
        <div class="header__bottom">
          <div class="container">
            <nav class="navbar navbar-expand-xl p-0 align-items-center">
              <a class="site-logo site-title" href="home"><img src="vv/assets/images/logo.png" style="max-width: 80px !important;"  alt="site-logo"></a>
              <ul class="account-menu mobile-acc-menu">
                <li class="icon">
                  <a href="vaultauthenticator"><i class="las la-user"></i></a>
                </li>
              </ul> 
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="menu-toggle"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav main-menu m-auto">
                  <li> <a href="home">Home</a></li>
                  <li> <a href="s-about">About Us</a></li>
                   <li> <a href="s-services">Services</a></li>
                  <li><a href="s-contact">Contact</a></li>
                </ul>
                <div class="nav-right">
                  <ul class="account-menu ml-3">
                    <li class="icon">
                      <a href="vaultauthenticator" class="cmn-btn text-uppercase font-weight-200 ">open Vault</a>
                    </li>
                  </ul> 
                  <!-- <select class="select d-inline-block w-auto ml-xl-3">
                    <option>Eng</option>
                    <option>Ban</option>
                    <option>Hin</option>
                  </select> -->
                </div>
              </div> 
            </nav>
          </div>
        </div><!-- header__bottom end -->
      </header>
      <!-- header-section end  -->';
}


function footerbar(){
    echo '<footer class="footer bg_img" data-background="vv/assets/images/bg/bg-7.jpg">
    <div class="footer__top">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-12 text-center">
            <a href="vv/#0" class="footer-logo"><img src="vv/assets/images/logo.png" alt="image"></a>
            
          </div>
        </div>
      </div>
    </div>
    <div class="footer__bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-6 text-md-left text-center">
            <p>© '.date('Y').' <a href="vv/index-3.html" class="base--color"> Royal Vault Secuiryt &  SHipping Express</a>. All rights reserved</p>
          </div>
          <div class="col-md-6">
            <ul class="social-link-list d-flex flex-wrap justify-content-md-end justify-content-center">
              <li><a href="vv/#0" data-toggle="tooltip" data-placement="top" title="facebook"><i class="lab la-facebook-f"></i></a></li>
              <li><a href="vv/#0" data-toggle="tooltip" data-placement="top" title="twitter"><i class="lab la-twitter"></i></a></li>
              <li><a href="vv/#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-p"></i></a></li>
              <li><a href="vv/#0" data-toggle="tooltip" data-placement="top" title="pinterest"><i class="lab la-pinterest-in"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- footer section end -->
    </div> <!-- page-wrapper end -->
      <!-- jQuery library -->
    <script src="vv/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <!-- bootstrap js -->
    <script src="vv/assets/js/vendor/bootstrap.bundle.min.js"></script>
    <!-- slick slider js -->
    <script src="vv/assets/js/vendor/slick.min.js"></script>
    <script src="vv/assets/js/vendor/wow.min.js"></script>
    <script src="vv/assets/js/contact.js"></script>
    <!-- dashboard custom js -->
    <script src="vv/assets/js/app.js"></script>';
}