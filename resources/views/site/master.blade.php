<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>@yield('title',env('APP_NAME'))</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('siteasset/assets/img/favicon.png')}}" rel="icon">
  <link href="{{asset('siteasset/assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('siteasset/assets/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('siteasset/assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('siteasset/assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('siteasset/assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('siteasset/assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('siteasset/assets/css/style.css')}}" rel="stylesheet">
  <style>
    #contact{
        background: #1bb1dc;
        border: 0;
        border-radius: 3px;
        padding: 8px 30px;
        color: #fff;
        transition: 0.3s;
    }
  </style>
    @yield('style')
  <!-- =======================================================
  * Template Name: Rapid - v4.8.2
  * Template URL: https://bootstrapmade.com/rapid-multipurpose-bootstrap-business-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto"><a href="{{ route('site.index') }}">Rapid</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto"><img src="{{asset('siteasset/assets/img/logo.png')}}" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Team</a></li>
          <li><a class="nav-link scrollto" href="#footer">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="social-links">
        <a href="https://www.twitter.com" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://www.facebook.com" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.linkedin.com" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
        <a href="https://www.instagram.com" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header><!-- End Header -->



@yield('content')
  <!-- End main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="section-bg">
    <div class="footer-top">
      <div class="container">

        <div class="row">

          <div class="col-lg-6">

            <div class="row">

              <div class="col-sm-6">

                <div class="footer-info">
                  <h3>Rapid</h3>
                  <p>Cras fermentum odio eu feugiat lide par naso tierra. Justo eget nada terra videa magna derita valies darta donna mare fermentum iaculis eu non diam phasellus. Scelerisque felis imperdiet proin fermentum leo. Amet volutpat consequat mauris nunc congue.</p>
                </div>

                <div class="footer-newsletter">
                  <h4>Our Newsletter</h4>
                  <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna veniam enim veniam illum dolore legam minim quorum culpa amet magna export quem.</p>
                  <form action="" method="post">
                    <input type="email" name="email"><input type="submit" value="Subscribe">
                  </form>
                </div>

              </div>

              <div class="col-sm-6">
                <div class="footer-links">
                  <h4>Useful Links</h4>
                  <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#about">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Terms of service</a></li>
                    <li><a href="#">Privacy policy</a></li>
                  </ul>
                </div>

                <div class="footer-links">
                  <h4>Contact Us</h4>
                  <p>
                    A108 Adam Street <br>
                    New York, NY 535022<br>
                    United States <br>
                    <strong>Phone:</strong> +972597383039<br>
                    <strong>Email:</strong> h.738339@gmail.com<br>
                  </p>
                </div>

                <div class="social-links">
                    <a href="https://www.twitter.com" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
                    <a href="https://www.facebook.com" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.linkedin.com" target="_blank" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    <a href="https://www.instagram.com" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
                </div>

              </div>

            </div>

          </div>

          <div class="col-lg-6">

            <div class="form">

              <h4>Send us a message</h4>
              <p>Eos ipsa est voluptates. Nostrum nam libero ipsa vero. Debitis quasi sit eaque numquam similique commodi harum aut temporibus.</p>

              <form action="{{ route('site.contact') }}" method="post" role="form" >
                @csrf
                <div class="form-group">
                  <input type="text" name="name" class="form-control @error('name')is-invalid @enderror" id="name" value="{{ old('name') }}" placeholder="Your Name" >
                  @error('name')
                 <div  class="invalid-feedback">{{ $message }}</div>
                 @enderror
                </div>
                <div class="form-group mt-3">
                  <input type="email" class="form-control @error('email')is-invalid @enderror" name="email" id="email" value="{{ old('email') }}" placeholder="Your Email" >
                 @error('email')
                 <div  class="invalid-feedback">{{ $message }}</div>
                 @enderror

                </div>
                <div class="form-group mt-3">
                  <input type="text" class="form-control @error('subject')is-invalid @enderror" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Subject" >
                  @error('subject')
                  <div  class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>
                <div class="form-group mt-3">
                  <textarea class="form-control  @error('message')is-invalid @enderror mb-3 " name="message" rows="5"  placeholder="Message" >{{ old('message') }}</textarea>
                  @error('message')
                  <div  class="invalid-feedback">{{ $message }}</div>
                  @enderror
                </div>

                <div class="text-center">
                    <input type="submit" id="contact" value="send">
                </div>
              </form>

            </div>

          </div>

        </div>

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Rapid</strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!--
        All the links in the footer should remain intact.
        You can delete the links only if you purchased the pro version.
        Licensing information: https://bootstrapmade.com/license/
        Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Rapid
      -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{asset('siteasset/assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
  <script src="{{asset('siteasset/assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('siteasset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('siteasset/assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('siteasset/assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('siteasset/assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{asset('siteasset/assets/vendor/php-email-form/validate.js')}}"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('siteasset/assets/js/main.js')}}"></script>
  @yield('script')
</body>

</html>
