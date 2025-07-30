<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta
      name="description"
      content="Play the latest PS5 & PS4 games at Mines Gaming Center! Affordable hourly rentals, 4K setups, multiplayer stations, and esports-ready gaming. Book your session today!"
    />
    <meta
      name="keywords"
      content="PlayStation rental, PS5 gaming near me, hourly gaming lounge, Mines Gaming Center, PS4 rental, esports gaming hub, gaming center [your city], competitive gaming"
    />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="" />
    <meta
      property="og:title"
      content="Mines Gaming Center"
    />
    <meta
      property="og:description"
      content="Rent PS5 & PS4 by the hour in a high-end gaming environment. Perfect for solo play, friends, or tournaments!"
    />
  <title>@yield('title')</title>

    <!-- Favicon -->
    <link
      rel="shortcut icon"
      type="image/x-icon"
      href="assets/media/logo.png"
    />

    <!-- All CSS files -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/vendor/font-awesome.css" />
    <link rel="stylesheet" href="assets/css/vendor/slick.css" />
    <link rel="stylesheet" href="assets/css/vendor/slick-theme.css" />
    <link rel="stylesheet" href="assets/css/vendor/aksVideoPlayer.css" />
    <link rel="stylesheet" href="assets/css/app.css" />
    <!-- Font Awesome CDN -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
  </head>

  <body>
    <!-- Preloader-->
    <div id="preloader">
      <div class="pyramid-loader">
        <div class="wrapper">
          <span class="side side1"></span>
          <span class="side side2"></span>
          <span class="side side3"></span>
          <span class="side side4"></span>
          <span class="shadow"></span>
        </div>
      </div>
    </div>
    <!-- Back To Top Start -->
    <a href="#main-wrapper" id="backto-top" class="back-to-top"
      ><i class="fas fa-angle-up"></i
    ></a>
    <!-- Main Wrapper Start -->
    <div id="main-wrapper" class="main-wrapper overflow-hidden">
      <!-- Hide Button -->
  
      @include('incloudes.header')


      @yield('content')
      <!-- Header Area Start -->
   
      <!-- Header Area end -->

      
 
    </div>

      <!-- Main Content End -->

      <!-- Footer Area Start  -->

      <!-- teemprary  padding  200px-->
      @include('incloudes.footer')
      {{-- <footer style="padding-top: 200px">
        <div class="image-slider pt-40">
          <div class="img-block">
            <img src="assets/media/images/bs-1.png" alt="" />
          </div>
          <div class="img-block">
            <img src="assets/media/images/bs-2.png" alt="" />
          </div>
          <div class="img-block">
            <img src="assets/media/images/bs-3.png" alt="" />
          </div>
          <div class="img-block">
            <img src="assets/media/images/bs-4.png" alt="" />
          </div>
          <div class="img-block">
            <img src="assets/media/images/bs-5.png" alt="" />
          </div>
          <div class="img-block">
            <img src="assets/media/images/bs-6.png" alt="" />
          </div>
          <div class="img-block">
            <img src="assets/media/images/bs-7.png" alt="" />
          </div>
          <div class="img-block">
            <img src="assets/media/images/bs-8.png" alt="" />
          </div>
          <div class="img-block">
            <img src="assets/media/images/bs-9.png" alt="" />
          </div>
          <div class="img-block">
            <img src="assets/media/images/bs-10.png" alt="" />
          </div>
          <div class="img-block">
            <img src="assets/media/images/bs-11.png" alt="" />
          </div>
        </div>
        <div class="container">
          <div class="footer-main">
            <div class="row" id="footer_row">
              <div class="col-xl-3 col-md-7">
                <div class="widget mb-xl-0">
                  <a href="index.html" class="mb-16"
                    ><img
                      class="footer-logo"
                      src="assets/media/logo.png"
                      alt=""
                  /></a>
                </div>
              </div>
              <div class="col-xl-2 offset-xl-1 col-sm-6">
                <div class="widget mb-64 mb-xl-0">
                  <h4 class="mb-24">Quick Links</h4>
                  <ul class="list unstyled">
                    <li class="mb-8">
                      <h6><a href="index.html">Home</a></h6>
                    </li>
                    <li class="mb-8">
                      <h6><a href="about.html">About us</a></h6>
                    </li>
                    <li class="mb-8">
                      <h6><a href="team.html"> Our Team</a></h6>
                    </li>
                    <li>
                      <h6><a href="contact.html">Contact</a></h6>
                    </li>
                  </ul>
                </div>
              </div>

              <div class="col-xl-3">
                <div class="widget">
                  <h4 class="mb-24">Genres</h4>
                  <ul class="contact-list unstyled mb-16">
                    <li class="mb-8">
                      <i class="fas fa-map-marker-alt"></i>
                      <h6>123 Main Street, Anytown, USA.</h6>
                    </li>
                    <li class="mb-8">
                      <a href="tel:0123456789">
                        <i class="fas fa-phone-alt"></i>
                        <span>+962771999994</span>
                      </a>
                    </li>
                    <li>
                      <a href="mailto:info@example.com">
                        <i class="fas fa-envelope"></i>
                        <span>INFO@MINESGAMINGCENTER.COM</span>
                      </a>
                    </li>
                  </ul>

                  <p>©2025 <a href="index.html"></a>. All Rights Reserved.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer> --}}
      <!-- Footer Area End  -->

      <!-- modal-popup area start  -->
      <!-- <div class="modal fade" id="videoModal" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="top_bar">
              <h4 class="modal-title">Demon Season 4</h4>
              <button
                type="button"
                class="close"
                id="closeVideoModalButton"
                data-dismiss="modal"
                aria-label="Close"
              >
                <span aria-hidden="true"
                  ><i class="fas fa-times"></i> <b>Close</b></span
                >
              </button>
            </div>
            <div class="modal-body">
              <video controls title="Video">
                <source
                  src="assets/media/video/movie-video.mp4"
                  type="video/mp4"
                />
              </video>
            </div>
          </div>
        </div>
      </div> -->
      <!-- modal-popup area end  -->
    </div>

    <!-- Jquery Js -->
    <script src="assets/js/vendor/jquery-3.6.3.min.js"></script>
    <script src="assets/js/vendor/bootstrap.min.js"></script>
    <script src="assets/js/vendor/slick.min.js"></script>
    <script src="assets/js/vendor/jquery-appear.js"></script>
    <script src="assets/js/vendor/jquery-validator.js"></script>
    <script src="assets/js/vendor/aksVideoPlayer.js"></script>

    <!-- Site Scripts -->
    <script src="assets/js/app.js"></script>
  </body>
</html>
