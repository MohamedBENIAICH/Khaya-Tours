<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Travelo</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/themify-icons.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/nice-select.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/gijgo.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/css/slicknav.css') }}" />

    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-JPhRBTWP+MI9UttBw0CTQFwLTvGWxd88CPWG+QdNTA2CfCpBIuP3lTqD0mO2KylBmEX8FjRT6ZoLx2DXBa3K7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <style>
      a.buttonhover {
          height: 2.8em;
          width: 9em;
          background: transparent;
          -webkit-animation: jello-horizontal 0.9s both;
          animation: jello-horizontal 0.9s both;
          border: 2px solid #016dd9;
          outline: none;
          color: #016dd9;
          cursor: pointer;
          font-size: 17px;
          display: inline-block; /* Ensure it behaves as an inline block element */
          text-align: center; /* Center text horizontally */
          line-height: 2.8em; /* Center text vertically */
          text-decoration: none; /* Remove default underline */
      }

      a.buttonhover:hover {
          background: #016dd9;
          color: #ffffff;
          animation: squeeze3124 0.9s both;
      }

      @keyframes squeeze3124 {
          0% {
              -webkit-transform: scale3d(1, 1, 1);
              transform: scale3d(1, 1, 1);
          }

          30% {
              -webkit-transform: scale3d(1.25, 0.75, 1);
              transform: scale3d(1.25, 0.75, 1);
          }

          40% {
              -webkit-transform: scale3d(0.75, 1.25, 1);
              transform: scale3d(0.75, 1.25, 1);
          }

          50% {
              -webkit-transform: scale3d(1.15, 0.85, 1);
              transform: scale3d(1.15, 0.85, 1);
          }

          65% {
              -webkit-transform: scale3d(0.95, 1.05, 1);
              transform: scale3d(0.95, 1.05, 1);
          }

          75% {
              -webkit-transform: scale3d(1.05, 0.95, 1);
              transform: scale3d(1.05, 0.95, 1);
          }

          100% {
              -webkit-transform: scale3d(1, 1, 1);
              transform: scale3d(1, 1, 1);
          }
      }
      :root {
  --background-color: #ffffff; /* Light theme background color */
  --text-color: #000000; /* Light theme text color */
  --border-color: #cccccc; /* Light theme border color */
    }

    .dark-theme {
      --background-color: #121212; /* Dark theme background color */
      --text-color: #ffffff; /* Dark theme text color */
      --border-color: #666666; /* Dark theme border color */

    /* Other styles using CSS variables */

    }
    body {
      background-color: var(--background-color);
      color: var(--text-color);
    }
  </style>
</head>


  <body>
    <!--[if lte IE 9]>
      <p class="browserupgrade">
        You are using an <strong>outdated</strong> browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a> to improve
        your experience and security.
      </p>
    <![endif]-->

    <!-- header-start -->
    <header>
      <div class="header-area">
        <div id="sticky-header" class="main-header-area">
          <div class="container-fluid">
            <div class="header_bottom_border">
              <div class="row align-items-center">
                <div class="col-xl-2 col-lg-2">
                  <div class="logo">
                    <a href="index.html">
                      <img src="{{Storage::url($setting->logo)}}" alt="" />
                    </a>
                  </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                  <div class="main-menu d-none d-lg-block">
                    <nav>
                      <ul id="navigation">
                        <li>
                          <a class="active" href=".././">home</a>
                        </li>
                        <li>
                          <a href="../about">About us</a>
                        </li>
                        <li>
                          <a href="../destination">Destination</a>
                        </li>
                        <li>
                          <a href="../contact">Contact</a>
                        </li>
                        @auth
                                        <li>
                                            <a href="{{ route('logout') }}">Logout</a>
                                        </li>
                                        @else
                                        <li>
                                            <a href="../login">Login</a>
                                        </li>
                                        @endauth                      
                      </ul>
                    </nav>
                  </div>
                </div>
                <div class="col-xl-4 col-lg-4 d-none d-lg-block">
                  <div
                    class="social_wrap d-flex align-items-center justify-content-end"
                  >
                    <div class="number">
                      <p>
                        <i class="fa fa-phone"></i>
                        {{$setting->number}}
                      </p>
                    </div>
                    <div class="social_links d-none d-xl-block">
                      <ul>
                        <li>
                          <a target="_blank" href="{{$setting->instagram}}">
                            <i class="fa fa-instagram"></i>
                          </a>
                        </li>
                        <li>
                          <a target="_blank" href="{{$setting->linkedin}}">
                            <i class="fa fa-linkedin"></i>
                          </a>
                        </li>
                        <li>
                        <a target="_blank" href="{{$setting->facebook}}">
                            <i class="fa fa-facebook"></i>
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="seach_icon">
                  <a
                    data-toggle="modal"
                    data-target="#exampleModalCenter"
                    href="#"
                  >
                    <i class="fa fa-search"></i>
                  </a>
                </div>
                <div class="col-12">
                  <div class="mobile_menu d-block d-lg-none"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- header-end -->

    @yield('content')

    <footer class="footer">
      <div class="footer_top">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-md-6 col-lg-4">
              <div class="footer_widget">
                <div class="footer_logo">
                  <a href="#">
                    <img src="img/footer_logo.png" alt="" />
                  </a>
                </div>
                <p>
                  5th flora, 700/D kings road, green <br />
                  lane New York-1782 <br />
                  <a href="#">+10 367 826 2567</a> <br />
                  <a href="#">contact@carpenter.com</a>
                </p>
                <div class="socail_links">
                  <ul>
                    <li>
                      <a href="#">
                        <i class="ti-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-instagram"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fa fa-youtube-play"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-xl-2 col-md-6 col-lg-2">
              <div class="footer_widget">
                <h3 class="footer_title">Company</h3>
                <ul class="links">
                  <li><a href="#">Pricing</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#"> Gallery</a></li>
                  <li><a href="#"> Contact</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-3">
              <div class="footer_widget">
                <h3 class="footer_title">Popular destination</h3>
                <ul class="links double_links">
                  <li><a href="#">Indonesia</a></li>
                  <li><a href="#">America</a></li>
                  <li><a href="#">India</a></li>
                  <li><a href="#">Switzerland</a></li>
                  <li><a href="#">Italy</a></li>
                  <li><a href="#">Canada</a></li>
                  <li><a href="#">Franch</a></li>
                  <li><a href="#">England</a></li>
                </ul>
              </div>
            </div>
            <div class="col-xl-3 col-md-6 col-lg-3">
              <div class="footer_widget">
                <h3 class="footer_title">Instagram</h3>
                <div class="instagram_feed">
                  <div class="single_insta">
                    <a href="#">
                      <img src="img/instagram/1.png" alt="" />
                    </a>
                  </div>
                  <div class="single_insta">
                    <a href="#">
                      <img src="img/instagram/2.png" alt="" />
                    </a>
                  </div>
                  <div class="single_insta">
                    <a href="#">
                      <img src="img/instagram/3.png" alt="" />
                    </a>
                  </div>
                  <div class="single_insta">
                    <a href="#">
                      <img src="img/instagram/4.png" alt="" />
                    </a>
                  </div>
                  <div class="single_insta">
                    <a href="#">
                      <img src="img/instagram/5.png" alt="" />
                    </a>
                  </div>
                  <div class="single_insta">
                    <a href="#">
                      <img src="img/instagram/6.png" alt="" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copy-right_text">
        <div class="container">
          <div class="footer_border"></div>
          <div class="row">
            <div class="col-xl-12">
              <p class="copy_right text-center">
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;
                <script>
                  document.write(new Date().getFullYear());
                </script>
                All rights reserved | This template is made with
                <i class="fa fa-heart-o" aria-hidden="true"></i>
                by
                <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal -->
    <div
      class="modal fade custom_search_pop"
      id="exampleModalCenter"
      tabindex="-1"
      role="dialog"
      aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="serch_form">
            <input type="text" placeholder="Search" />
            <button type="submit">search</button>
          </div>
        </div>
      </div>
    </div>
    <!-- link that opens popup -->
    <!--     
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://static.codepen.io/assets/common/stopExecutionOnTimeout-de7e2ef6bfefd24b79a3f68b414b87b8db5b08439cac3f1012092b2290c719cd.js"></script>

    <script src=" https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"> </script> -->
    <!-- JS here -->
    <script src="{{ asset('frontend/js/vendor/modernizr-3.5.0.min.js') }}"></script>
    <script src="{{ asset('frontend/js/vendor/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
    <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/js/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/ajax-form.js') }}"></script>
    <script src="{{ asset('frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/imagesloaded.pkgd.min.js') }}"></script>
    <script src="{{ asset('frontend/js/scrollIt.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.scrollUp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/js/nice-select.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('frontend/js/plugins.js') }}"></script>
    <script src="{{ asset('frontend/js/gijgo.min.js') }}"></script>
    <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
    
    <!--contact js-->
    <script src="{{ asset('frontend/js/contact.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.form.js') }}"></script>
    <script src="{{ asset('frontend/js/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('frontend/js/mail-script.js') }}"></script>
    
    <script src="{{ asset('frontend/js/main.js') }}"></script>
    


    <script src="js/main.js"></script>
    <script>
      $('#datepicker').datepicker({
        iconsLibrary: 'fontawesome',
        icons: {
          rightIcon: '<span class="fa fa-caret-down"></span>',
        },
      });
      const toggleButton = document.querySelector('#theme-toggle');

toggleButton.addEventListener('click', function() {
  document.body.classList.toggle('dark-theme');
});

    </script>
  </body>
</html>
