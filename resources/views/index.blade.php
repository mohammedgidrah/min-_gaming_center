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
