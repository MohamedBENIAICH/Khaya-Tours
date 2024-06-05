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
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">  

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-JPhRBTWP+MI9UttBw0CTQFwLTvGWxd88CPWG+QdNTA2CfCpBIuP3lTqD0mO2KylBmEX8FjRT6ZoLx2DXBa3K7A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="{{ asset('frontend/css/style.css') }}" />
    <style>
      <style>
        .container {
    max-width: 800px;
    margin: 0 auto;
    padding: 20px;
}

.heading {
    font-size: 28px;
    margin-bottom: 20px;
    text-align: center;
}

.table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
}

.table th, .table td {
    padding: 8px;
    border-bottom: 1px solid #ddd;
    text-align: left;
}

.button-container {
    display: flex;
    justify-content: space-between;
}

.pay-now, .pay-arrival {
    border: none;
    padding: 12px 24px;
    font-size: 16px;
    cursor: pointer;
    border-radius: 5px;
    color: #fff;
    transition: background-color 0.3s ease;
}

.pay-now {
    background-color: #007bff;
}

.pay-arrival {
    background-color: #28a745;
}

.svgIcon {
    width: 20px;
    height: 20px;
    margin-left: 5px;
    vertical-align: middle;
}

button:focus {
    outline: none;
}

.button:active {
    transform: translateY(1px);
}

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
}
.Btn {
  width: 130px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgb(15, 15, 15);
  border: none;
  color: white;
  font-weight: 600;
  gap: 8px;
  cursor: pointer;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.103);
  position: relative;
  overflow: hidden;
  transition-duration: .3s;
}

.svgIcon {
  width: 16px;
}

.svgIcon path {
  fill: white;
}

.Btn::before {
  width: 130px;
  height: 130px;
  position: absolute;
  content: "";
  background-color: white;
  border-radius: 50%;
  left: -100%;
  top: 0;
  transition-duration: .3s;
  mix-blend-mode: difference;
}

.Btn:hover::before {
  transition-duration: .3s;
  transform: translate(100%,-50%);
  border-radius: 0;
}
.button1 {
  position: relative;
  width: 120px;
  height: 40px;
  background-color: #000;
  display: flex;
  align-items: center;
  color: white;
  flex-direction: column;
  justify-content: center;
  border: none;
  padding: 12px;
  gap: 12px;
  border-radius: 8px;
  cursor: pointer;
}

.button1::before {
  content: '';
  position: absolute;
  inset: 0;
  left: -4px;
  top: -1px;
  margin: auto;
  width: 128px;
  height: 48px;
  border-radius: 10px;
  background: linear-gradient(-45deg, #e81cff 0%, #40c9ff 100% );
  z-index: -10;
  pointer-events: none;
  transition: all 0.6s cubic-bezier(0.175, 0.885, 0.32, 1.275);
}

.button1::after {
  content: "";
  z-index: -1;
  position: absolute;
  inset: 0;
  background: linear-gradient(-45deg, #fc00ff 0%, #00dbde 100% );
  transform: translate3d(0, 0, 0) scale(0.95);
  filter: blur(20px);
}

.button1:hover::after {
  filter: blur(30px);
}

.button1:hover::before {
  transform: rotate(-180deg);
}

.button1:active::before {
  scale: 0.7;
}


.button {
  position: relative;
  width: 150px;
  height: 40px;
  cursor: pointer;
  display: flex;
  align-items: center;
  border: 1px solid #17795E;
  background-color: #209978;
  overflow: hidden;
  font-size: 11.5px;
}

.button, .button__icon, .button__text {
  transition: all 0.3s;
}

.button .button__text {
  transform: translateX(22px);
  color: #fff;
  font-weight: 600;
}

.button .button__icon {
  position: absolute;
  transform: translateX(109px);
  height: 100%;
  width: 39px;
  background-color: #17795E;
  display: flex;
  align-items: center;
  justify-content: center;
}

.button .svg {
  width: 20px;
  fill: #fff;
}

.button:hover {
  background: #17795E;
}

.button:hover .button__text {
  color: transparent;
}

.button:hover .button__icon {
  width: 148px;
  transform: translateX(0);
}

.button:active .button__icon {
  background-color: #146c54;
}

.button:active {
  border: 1px solid #146c54;
}
.inputbox {
  position: relative;
  width: 196px;
}

.inputbox input {
  position: relative;
  width: 100%;
  padding: 20px 10px 10px;
  background: transparent;
  outline: none;
  box-shadow: none;
  border: none;
  color: #23242a;
  font-size: 1em;
  letter-spacing: 0.05em;
  transition: 0.5s;
  z-index: 10;
}

.inputbox span {
  position: absolute;
  left: 0;
  padding: 20px 10px 10px;
  font-size: 1em;
  color: #8f8f8f;
  letter-spacing: 00.05em;
  transition: 0.5s;
  pointer-events: none;
}

.inputbox input:valid ~span,
.inputbox input:focus ~span {
  color: #45f3ff;
  transform: translateX(-10px) translateY(-34px);
  font-size: 0,75em;
}

.inputbox i {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 2px;
  background: #45f3ff;
  border-radius: 4px;
  transition: 0.5s;
  pointer-events: none;
  z-index: 9;
}

.inputbox input:valid ~i,
.inputbox input:focus ~i {
  height: 44px;
}

button.book {
    outline: none;
    cursor: pointer;
    border: none;
    padding: 0.9rem 2rem;
    margin: 0;
    font-family: inherit;
    font-size: inherit;
    position: relative;
    display: inline-block;
    letter-spacing: 0.05rem;
    font-weight: 700;
    font-size: 17px;
    border-radius: 500px;
    overflow: hidden;
    background: #66ff66;
    color: ghostwhite;
}

button.book span {
    position: relative;
    z-index: 10;
    transition: color 0.4s;
}

button.book:hover span {
    color: black;
}

button.book::before,
button.book::after {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    z-index: 0;
}

button.book::before {
    content: "";
    background: #000;
    width: 120%;
    left: -10%;
    transform: skew(30deg);
    transition: transform 0.4s cubic-bezier(0.3, 1, 0.8, 1);
}

button.book:hover::before {
    transform: translate3d(100%, 0, 0);
}
.section_title {
    margin-top: 50px;
}

.section_title h1 {
    font-size: 36px;
    color: #333;
    margin-bottom: 20px;
}

.section_title p {
    font-size: 18px;
    color: #666;
    margin-bottom: 40px;
}

.button {
    background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-bottom: 20px;
    cursor: pointer;
    border-radius: 5px;
}

.button__icon {
    margin-left: 10px;
    vertical-align: middle;
}

.svg {
    width: 20px;
    height: 20px;
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
                          <a class="active" href="./">home</a>
                        </li>
                        <li>
                          <a href="about">About us</a>
                        </li>
                        <li>
                          <a href="destination">Destination</a>
                        </li>
                        <li>
                          <a href="contact">Contact</a>
                        </li>
                        @auth
                                        <li>
                                            <a href="{{ route('logout') }}">Logout</a>
                                        </li>
                                        @else
                                        <li>
                                            <a href="login">Login</a>
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
                  Zagora <br />
                  Morocco <br />
                  <a href="#">+212615885011</a> <br />
                  <a href="#">khayatours@gmai.com</a>
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
    </script>
  </body>
</html>
