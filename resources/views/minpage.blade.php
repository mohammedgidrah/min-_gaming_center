   @extends('index')
   @section('title', 'Home')
   @section('content')
 
 
       <!-- Hero Banner start -->
       <div class="hero-banner-1">
           <div class="video-background">
               <video autoplay muted loop playsinline>
                   <source src="assets/media/video/video.mp4" type="video/mp4" />
                   <!-- Fallback image if video doesn't load -->
                   <img src="assets/media/banner/hero-banner.png" alt="Fallback banner image" />
               </video>
           </div>
           <div class="container">
               <div class="content">
                   <h4 class="mb-8 color-primary">Mines Gaming Center</h4>
                   <h1 class="mb-24 color-white">Dig in - Game on<br /></h1>
                   <h6 class="mb-48 lightest-gray">desc</h6>
                   <div class="btn-block">
                       <a href=" " class="cus-btn primary">book Now<i class="fas fa-chevron-right"></i></a>
                   </div>
               </div>
           </div>
       </div>
       <!-- Hero Banner End -->

       <!-- Main Content Start -->
       <div class="page-content">
           <section class="features p-40">
               <div class="container">
                   <div class="row">
                       <div class="col-xl-3 col-sm-6">
                           <div class="feature-card mb-24">
                               <div class="content">
                                   <img class="mb-16" src="assets/media/icons/fi-1.png" alt="" />
                                   <h4 class="mb-8">PlayStation</h4>
                                   <p class="medium-gray">
                                       Lorem ipsum dolor sit amet consectetur. In blandit sit non
                                       facilisis semper amet. Aliquam lacus sed aenean
                                       consectetur.
                                   </p>
                                   <img src="assets/media/shapes/s-1.png" alt="" class="shape" />
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-sm-6">
                           <div class="feature-card mb-24">
                               <div class="content">
                                   <img class="mb-16" src="assets/media/icons/fi-2.png" alt="" />
                                   <h4 class="mb-8">VIP Rooms</h4>
                                   <p class="medium-gray">
                                       Lorem ipsum dolor sit amet consectetur. In blandit sit non
                                       facilisis semper amet. Aliquam lacus sed aenean
                                       consectetur.
                                   </p>
                                   <img src="assets/media/shapes/s-1.png" alt="" class="shape" />
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-sm-6">
                           <div class="feature-card mb-24">
                               <div class="content">
                                   <img class="mb-16" src="assets/media/icons/fi-3.png" alt="" />
                                   <h4 class="mb-8">Pc's</h4>
                                   <p class="medium-gray">
                                       Lorem ipsum dolor sit amet consectetur. In blandit sit non
                                       facilisis semper amet. Aliquam lacus sed aenean
                                       consectetur.
                                   </p>
                                   <img src="assets/media/shapes/s-1.png" alt="" class="shape" />
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-sm-6">
                           <div class="feature-card">
                               <div class="content">
                                   <img class="mb-16" src="assets/media/icons/fi-4.png" alt="" />
                                   <h4 class="mb-8">barista</h4>
                                   <p class="medium-gray">
                                       Lorem ipsum dolor sit amet consectetur. In blandit sit non
                                       facilisis semper amet. Aliquam lacus sed aenean
                                       consectetur.
                                   </p>
                                   <img src="assets/media/shapes/s-1.png" alt="" class="shape" />
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>

           <!-- <section class="about p-40">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-4 col-md-11 mb-40 mb-lg-0">
                    <div class="content">
                      <h4 class="mb-16">title</h4>
                      <p class="medium-gray mb-16">desc</p>
                      <p class="medium-gray mb-48">desc</p>
                   
                    </div>
                  </div>
                  <div class="col-lg-4 mb-40 mb-lg-0">
                    <div class="text-center">
                      <img
                        src="assets/media/about/about.png"
                        alt=""
                        class="featured-image"
                      />
                    </div>
                  </div>
                  <div class="col-lg-4 col-md-11">
                    <div class="content">
                      <h4 class="mb-16">title</h4>
                      <p class="medium-gray mb-16">desc</p>
                      <p class="medium-gray mb-48">desc</p>
              
                    </div>
                  </div>
                </div>
              </div>
            </section> -->
           <div class="page-title-banner p-64" id="about-padding">
               <div class="container">
                   <div class="row align-items-center">
                       <!-- Image Content - Now first in the order -->
                       <div class="col-lg-6 col-md-12 mb-40 mb-lg-0">
                           <div class="text-center">
                               <img src="assets/media/about/about.png" alt="About Mines" class="img-fluid"
                                   style="max-width: 100%; height: auto" />
                           </div>
                       </div>

                       <!-- Text Content - Now second in the order -->
                       <div class="col-lg-6 col-md-12">
                           <div class="content">
                               <h1 class="mb-16">About Us</h1>
                               <span style="font-weight: bold; font-size: 20px">
                                   Welcome to Mines Gaming Center – where gaming comes to life.
                               </span>
                               <p class="medium-gray mb-16">
                                   <br />
                                   Located in the heart of Aqaba, Mines is more than just a
                                   gaming center. It's a vibrant hub where gamers gather to
                                   compete, connect, and create unforgettable memories. Whether
                                   you're a casual player or an esports enthusiast, our
                                   state-of-the-art PCs, immersive environment, and dedicated
                                   team ensure an unmatched gaming experience every time.
                               </p>
                               <p class="medium-gray mb-48">
                                   At Mines, we believe gaming is not just about playing – it's
                                   about community, strategy, and fun. We're here to empower
                                   the gamer in you, host thrilling tournaments, and keep you
                                   fuelled with our refreshing barista drinks as you level up
                                   your skills.
                               </p>
                               <p class="medium-gray mb-48">
                                   Come play, compete, and become part of our Mines family.
                               </p>
                           </div>
                       </div>
                   </div>
               </div>
           </div>

          

           <section class="achievements p-40">
               <div class="container">
                   <div class="heading">
                       <h2>Achievement</h2>
                   </div>
                   <div class="row counter-section">
                       <div class="col-xl-3 col-sm-6">
                           <div class="achievement-card mb-24 counter-count">
                               <div class="content text-center">
                                   <h2 class="color-primary mb-16">
                                       <span class="count">5</span><span>K</span>
                                   </h2>
                                   <h4>name</h4>
                                   <img src="assets/media/shapes/s-1.png" alt="" class="shape" />
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-sm-6">
                           <div class="achievement-card mb-24 counter-count">
                               <div class="content text-center">
                                   <h2 class="color-primary mb-16">
                                       <span class="count">10</span><span>K</span>
                                   </h2>
                                   <h4>name</h4>
                                   <img src="assets/media/shapes/s-1.png" alt="" class="shape" />
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-sm-6">
                           <div class="achievement-card mb-24 counter-count">
                               <div class="content text-center">
                                   <h2 class="color-primary mb-16">
                                       <span class="count">90</span><span>%</span>
                                   </h2>
                                   <h4>name</h4>
                                   <img src="assets/media/shapes/s-1.png" alt="" class="shape" />
                               </div>
                           </div>
                       </div>
                       <div class="col-xl-3 col-sm-6">
                           <div class="achievement-card counter-count">
                               <div class="content text-center">
                                   <h2 class="color-primary mb-16">
                                       <span class="count">20</span>
                                   </h2>
                                   <h4>name</h4>
                                   <img src="assets/media/shapes/s-1.png" alt="" class="shape" />
                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </section>
           <section class="p-40">
               <div class="container">
                   <div class="heading">
                       <h2>most favorite games</h2>
                   </div>
                   <div class="row">
                       <div class="col-lg-4 col-md-6">
                           <a   class="blog-card mb-30 mb-lg-0">
                               <div class="category-block">
                                   <img src="assets/media/shapes/blog-vector.png" alt="" />
                                   <h5 class="c-title">name</h5>
                               </div>
                               <div class="img-block">
                                   <img src="assets/media/blogs/b-1.png" alt="" />
                                   <div class="overlay"></div>
                                   <div class="text-block">
                                       <h6 class="mb-16">Aug 10, 2023</h6>
                                       <h5 class="title">desc</h5>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="col-lg-4 col-md-6">
                           <a   class="blog-card mb-30 mb-lg-0">
                               <div class="category-block">
                                   <img src="assets/media/shapes/blog-vector.png" alt="" />
                                   <h5 class="c-title">name</h5>
                               </div>
                               <div class="img-block">
                                   <img src="assets/media/blogs/b-2.png" alt="" />
                                   <div class="overlay"></div>
                                   <div class="text-block">
                                       <h6 class="mb-16">Aug 12, 2023</h6>
                                       <h5 class="title">desc</h5>
                                   </div>
                               </div>
                           </a>
                       </div>
                       <div class="col-lg-4 col-md-6">
                           <a   class="blog-card">
                               <div class="category-block">
                                   <img src="assets/media/shapes/blog-vector.png" alt="" />
                                   <h5 class="c-title">name</h5>
                               </div>
                               <div class="img-block">
                                   <img src="assets/media/blogs/b-3.png" alt="" />
                                   <div class="overlay"></div>
                                   <div class="text-block">
                                       <h6 class="mb-16">Aug 13, 2023</h6>
                                       <h5 class="title">desc</h5>
                                   </div>
                               </div>
                           </a>
                       </div>
                   </div>
               </div>
           </section>
       </div>
   @endsection
