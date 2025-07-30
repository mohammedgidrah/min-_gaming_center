 @extends('index')
 @section('title', 'About')
 @section('content')

      <!-- Page Start Banner Area Start -->
     <div class="page-title-banner p-64" id="about-padding">
  <div class="container">
    <div class="row align-items-center">
      <!-- Text Content -->
      <div class="col-lg-6 col-md-12 mb-40 mb-lg-0">
        <div class="content">
          <a class="mb-16 cus-btn dark" href="index.html">
            <i class="fas fa-chevron-left"></i>Back to Home
          </a>
          <h1 class="mb-16">About Us</h1>
          <span style="font-weight: bold; font-size: 20px">
            Welcome to Mines Gaming Center – where gaming comes to life.
          </span>
          <p class="medium-gray mb-16">
            <br />
            Located in the heart of Aqaba, Mines is more than just a gaming
            center. It’s a vibrant hub where gamers gather to compete,
            connect, and create unforgettable memories. Whether you’re a
            casual player or an esports enthusiast, our state-of-the-art PCs,
            immersive environment, and dedicated team ensure an unmatched
            gaming experience every time.
          </p>
          <p class="medium-gray mb-48">
            At Mines, we believe gaming is not just about playing – it’s about
            community, strategy, and fun. We’re here to empower the gamer in
            you, host thrilling tournaments, and keep you fuelled with our
            refreshing barista drinks as you level up your skills.
          </p>
          <p class="medium-gray mb-48">
            Come play, compete, and become part of our Mines family.
          </p>
        </div>
      </div>

      <!-- Image Content -->
      <div class="col-lg-6 col-md-12">
        <div class="text-center">
          <img
            src="assets/media/about/about.png"
            alt="About Mines"
            class="img-fluid"
            style="max-width: 100%; height: auto"
          />
        </div>
      </div>
    </div>
  </div>
</div>

 
  
 

        <!-- Achievement Start -->
        <!-- <section class="achievements p-40">
          <div class="container">
            <div class="heading">
              <h2>Achievement</h2>
            </div>
            <div class="row counter-section">
              <div class="col-xl-3 col-sm-6">
                <div class="achievement-card mb-24 counter-count">
                  <div class="content text-center">
                    <h2 class="color-primary mb-16">
                      <span class="count">12</span><span>K</span>
                    </h2>
                    <h4>Satisfied Customers</h4>
                   </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="achievement-card mb-24 counter-count">
                  <div class="content text-center">
                    <h2 class="color-primary mb-16">
                      <span class="count">15</span><span>K</span>
                    </h2>
                    <h4>Game Collection</h4>
                   </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="achievement-card mb-24 counter-count">
                  <div class="content text-center">
                    <h2 class="color-primary mb-16">
                      <span class="count">98</span><span>%</span>
                    </h2>
                    <h4>Our Rating</h4>
                   </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6">
                <div class="achievement-card counter-count">
                  <div class="content text-center">
                    <h2 class="color-primary mb-16">
                      <span class="count">20</span>
                    </h2>
                    <h4>Years of Experience</h4>
                   </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->
        <!-- Achievement End -->

        <!-- Team Area Start -->
        <!-- <section class="p-40">
                <div class="container">
                    <div class="heading">
                        <h2>Meet Our Team</h2>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="team-card mb-30 mb-xl-0 bg-red">
                                <div class="img-block">
                                    <img src="assets/media/gamers/g-1.png" alt="">
                                    <div class="overlay"></div>
                                    <div class="text-block">
                                        <h4 class="mb-4p">Michael Brown</h4>
                                        <h6 class="light-gray mb-16">Store Manager</h6>
                                    </div>
                                </div>
                                <ul class="unstyled social-icons">
                                    <li><a href=""><img src="assets/media/icons/Facebook.png" alt=""></a></li>
                                    <li><a href=""><img src="assets/media/icons/Twitter.png" alt=""></a></li>
                                    <li><a href=""><img src="assets/media/icons/Instagram.png" alt=""></a></li>
                                    <li><a href=""><img src="assets/media/icons/SnapChat.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="team-card mb-30 mb-xl-0 bg-purple">
                                <div class="img-block">
                                    <img src="assets/media/gamers/g-2.png" alt="">
                                    <div class="overlay"></div>
                                    <div class="text-block">
                                        <h4 class="mb-4p">Ava Rodriguez</h4>
                                        <h6 class="light-gray mb-16">Store Manager</h6>
                                    </div>
                                </div>
                                <ul class="unstyled social-icons">
                                    <li><a href=""><img src="assets/media/icons/Facebook.png" alt=""></a></li>
                                    <li><a href=""><img src="assets/media/icons/Twitter.png" alt=""></a></li>
                                    <li><a href=""><img src="assets/media/icons/Instagram.png" alt=""></a></li>
                                    <li><a href=""><img src="assets/media/icons/SnapChat.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="team-card mb-30 mb-xl-0 bg-red">
                                <div class="img-block">
                                    <img src="assets/media/gamers/g-3.png" alt="">
                                    <div class="overlay"></div>
                                    <div class="text-block">
                                        <h4 class="mb-4p">James Wilson</h4>
                                        <h6 class="light-gray mb-16">Store Manager</h6>
                                    </div>
                                </div>
                                <ul class="unstyled social-icons">
                                    <li><a href=""><img src="assets/media/icons/Facebook.png" alt=""></a></li>
                                    <li><a href=""><img src="assets/media/icons/Twitter.png" alt=""></a></li>
                                    <li><a href=""><img src="assets/media/icons/Instagram.png" alt=""></a></li>
                                    <li><a href=""><img src="assets/media/icons/SnapChat.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-4 col-sm-6">
                            <div class="team-card bg-purple">
                                <div class="img-block">
                                    <img src="assets/media/gamers/g-4.png" alt="">
                                    <div class="overlay"></div>
                                    <div class="text-block">
                                        <h4 class="mb-4p">William Wilson</h4>
                                        <h6 class="light-gray mb-16">Store Manager</h6>
                                    </div>
                                </div>
                                <ul class="unstyled social-icons">
                                    <li><a href=""><img src="assets/media/icons/Facebook.png" alt=""></a></li>
                                    <li><a href=""><img src="assets/media/icons/Twitter.png" alt=""></a></li>
                                    <li><a href=""><img src="assets/media/icons/Instagram.png" alt=""></a></li>
                                    <li><a href=""><img src="assets/media/icons/SnapChat.png" alt=""></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
        <!-- Team Area End -->

        <!-- Testimonial Area Start -->
        <!-- <section class="p-40">
                <div class="container">
                    <div class="heading">
                        <h2>Testimonials</h2>
                    </div>
                    <div class="testimonial-slider">
                        <div class="testimonial-card">
                            <img src="assets/media/icons/Quote.png" alt="" class="quote">
                            <div class="top-block">
                                <img src="assets/media/users/u-1.png" alt="" class="user-img">
                                <div class="detail">
                                    <h4 class="mb-8">Olivia Martinez</h4>
                                    <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>
                            </div>
                            <p class="medium-gray">Lorem ipsum dolor sit amet consectetur. Nascetur duis a sed fermentum. Netus nulla augue velit mus nibh faucibus eu. Vitae fusce bibendum vitae nulla in mi non tristique. Iaculis justo proin egestas volutpat arcu nullam adipiscing lorem. Sem enim dolor praesent nunc adipiscing feugiat enim.</p>
                        </div>
                        <div class="testimonial-card">
                            <img src="assets/media/icons/Quote.png" alt="" class="quote">
                            <div class="top-block">
                                <img src="assets/media/users/u-2.png" alt="" class="user-img">
                                <div class="detail">
                                    <h4 class="mb-8">Alexander Taylor</h4>
                                    <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>
                            </div>
                            <p class="medium-gray">Lorem ipsum dolor sit amet consectetur. Nascetur duis a sed fermentum. Netus nulla augue velit mus nibh faucibus eu. Vitae fusce bibendum vitae nulla in mi non tristique. Iaculis justo proin egestas volutpat arcu nullam adipiscing lorem. Sem enim dolor praesent nunc adipiscing feugiat enim.</p>
                        </div>
                        <div class="testimonial-card">
                            <img src="assets/media/icons/Quote.png" alt="" class="quote">
                            <div class="top-block">
                                <img src="assets/media/users/u-1.png" alt="" class="user-img">
                                <div class="detail">
                                    <h4 class="mb-8">Olivia Martinez</h4>
                                    <div class="rating"><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i></div>
                                </div>
                            </div>
                            <p class="medium-gray">Lorem ipsum dolor sit amet consectetur. Nascetur duis a sed fermentum. Netus nulla augue velit mus nibh faucibus eu. Vitae fusce bibendum vitae nulla in mi non tristique. Iaculis justo proin egestas volutpat arcu nullam adipiscing lorem. Sem enim dolor praesent nunc adipiscing feugiat enim.</p>
                        </div>
                    </div>
                </div>
            </section> 
       </div> -->
      <!-- Main Content End -->

 @endsection