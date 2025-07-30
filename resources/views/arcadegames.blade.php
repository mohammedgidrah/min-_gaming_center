 @extends('index')
 @section('title', 'Arcade Games')
 @section('content')
      <!-- Header Area end -->

      <!-- Page Start Banner Area Start -->
      <div class="page-title-banner" id="arcadegames-padding">
        <div class="slider-container">
          <div class="slider-wrapper" id="sliderWrapper">
            <!-- Slide 1: Retro Arcade -->
            <div class="slide">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-6 col-md-12 mb-40 mb-lg-0">
                    <div class="content">
                      <a class="mb-16 cus-btn dark" href={{url('/')}}>
                        <i class="fas fa-chevron-left"></i>Back to Home
                      </a>
                      <h1 class="mb-16">arcade name</h1>
                      <span class="game-title">title</span>
                      <p class="medium-gray mb-16">
                        <br />
                        description
                      </p>
                      <p class="medium-gray mb-48">description</p>
                      <!-- <div class="arcade-stats">
                        <div class="stat-item">
                          <div class="stat-number">50+</div>
                          <div class="stat-label">Classic Games</div>
                        </div>
                        <div class="stat-item">
                          <div class="stat-number">1980s</div>
                          <div class="stat-label">Era</div>
                        </div>
                        <div class="stat-item">
                          <div class="stat-number">24/7</div>
                          <div class="stat-label">Open</div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="text-center">
                      <img
                        src="https://images.unsplash.com/photo-1511512578047-dfb367046420?w=500&h=400&fit=crop&crop=center"
                        alt="Retro Arcade"
                        class="img-fluid game-image"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 2: Modern Gaming -->
            <div class="slide">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-6 col-md-12 mb-40 mb-lg-0">
                    <div class="content">
                      <a class="mb-16 cus-btn dark" href={{url('/')}}>
                        <i class="fas fa-chevron-left"></i>Back to Home
                      </a>
                      <h1 class="mb-16">arcade name</h1>
                      <span class="game-title"> title</span>
                      <p class="medium-gray mb-16">
                        <br />
                        description
                      </p>
                      <p class="medium-gray mb-48">description</p>
                      <!-- <div class="arcade-stats">
                        <div class="stat-item">
                          <div class="stat-number">30+</div>
                          <div class="stat-label">VR Games</div>
                        </div>
                        <div class="stat-item">
                          <div class="stat-number">4K</div>
                          <div class="stat-label">Resolution</div>
                        </div>
                        <div class="stat-item">
                          <div class="stat-number">8</div>
                          <div class="stat-label">Players Max</div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="text-center">
                      <img
                        src="https://images.unsplash.com/photo-1542751371-adc38448a05e?w=500&h=400&fit=crop"
                        alt="Modern Gaming"
                        class="img-fluid game-image"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 3: Racing Zone -->
            <div class="slide">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-6 col-md-12 mb-40 mb-lg-0">
                    <div class="content">
                      <a class="mb-16 cus-btn dark" href={{url('/')}}>
                        <i class="fas fa-chevron-left"></i>Back to Home
                      </a>
                      <h1 class="mb-16">arcade name</h1>
                      <span class="game-title"> title</span>
                      <p class="medium-gray mb-16">
                        <br />
                        description
                      </p>
                      <p class="medium-gray mb-48">description</p>
                      <!-- <div class="arcade-stats">
                        <div class="stat-item">
                          <div class="stat-number">12</div>
                          <div class="stat-label">Racing Seats</div>
                        </div>
                        <div class="stat-item">
                          <div class="stat-number">200+</div>
                          <div class="stat-label">Tracks</div>
                        </div>
                        <div class="stat-item">
                          <div class="stat-number">6DOF</div>
                          <div class="stat-label">Motion</div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="text-center">
                      <img
                        src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=500&h=400&fit=crop&crop=center"
                        alt="Racing Zone"
                        class="img-fluid game-image"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Slide 4: Prize Corner -->
            <div class="slide">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-6 col-md-12 mb-40 mb-lg-0">
                    <div class="content">
                      <a class="mb-16 cus-btn dark" href={{url('/')}}>
                        <i class="fas fa-chevron-left"></i>Back to Home
                      </a>
                      <h1 class="mb-16">arcade name</h1>
                      <span class="game-title"> title</span>
                      <p class="medium-gray mb-16">
                        <br />
                        description
                      </p>
                      <p class="medium-gray mb-48">description</p>
                      <!-- <div class="arcade-stats">
                        <div class="stat-item">
                          <div class="stat-number">25+</div>
                          <div class="stat-label">Prize Games</div>
                        </div>
                        <div class="stat-item">
                          <div class="stat-number">500+</div>
                          <div class="stat-label">Prizes</div>
                        </div>
                        <div class="stat-item">
                          <div class="stat-number">∞</div>
                          <div class="stat-label">Fun</div>
                        </div>
                      </div> -->
                    </div>
                  </div>
                  <div class="col-lg-6 col-md-12">
                    <div class="text-center">
                      <img
                        src="https://images.unsplash.com/photo-1556438064-2d7646166914?w=500&h=400&fit=crop&crop=center"
                        alt="Prize Corner"
                        class="img-fluid game-image"
                      />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Controls (Navigation + Indicators) -->
        <div class="slider-controls">
          <button class="slider-nav prev" onclick="changeSlide(-1)">
            <i class="fas fa-chevron-left"></i>
          </button>

          <div class="slider-indicators">
            <span class="indicator active" onclick="currentSlide(1)"></span>
            <span class="indicator" onclick="currentSlide(2)"></span>
            <span class="indicator" onclick="currentSlide(3)"></span>
            <span class="indicator" onclick="currentSlide(4)"></span>
          </div>

          <button class="slider-nav next" onclick="changeSlide(1)">
            <i class="fas fa-chevron-right"></i>
          </button>
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

      <!-- Footer Area Start  -->
      
      <!-- Footer Area End  -->

 
<script>
    let currentSlideIndex = 0;
        const slides = document.querySelectorAll('.slide');
        const totalSlides = slides.length;
        const sliderWrapper = document.getElementById('sliderWrapper');
        const indicators = document.querySelectorAll('.indicator');

        function updateSlider() {
            const translateX = -(currentSlideIndex * 100);
            sliderWrapper.style.transform = `translateX(${translateX}%)`;
            
            // Update indicators
            indicators.forEach((indicator, index) => {
                indicator.classList.toggle('active', index === currentSlideIndex);
            });
        }

        function changeSlide(direction) {
            currentSlideIndex += direction;
            
            if (currentSlideIndex >= totalSlides) {
                currentSlideIndex = 0;
            } else if (currentSlideIndex < 0) {
                currentSlideIndex = totalSlides - 1;
            }
            
            updateSlider();
        }

        function currentSlide(index) {
            currentSlideIndex = index - 1;
            updateSlider();
        }

        // Auto-slide removed - manual control only

        // Touch/swipe support for mobile
        let startX = 0;
        let endX = 0;

        sliderWrapper.addEventListener('touchstart', (e) => {
            startX = e.touches[0].clientX;
        });

        sliderWrapper.addEventListener('touchend', (e) => {
            endX = e.changedTouches[0].clientX;
            handleSwipe();
        });

        function handleSwipe() {
            const swipeThreshold = 50;
            const diff = startX - endX;
            
            if (Math.abs(diff) > swipeThreshold) {
                if (diff > 0) {
                    changeSlide(1); // Swipe left - next slide
                } else {
                    changeSlide(-1); // Swipe right - previous slide
                }
            }
        }

        // Keyboard navigation
        document.addEventListener('keydown', (e) => {
            if (e.key === 'ArrowLeft') {
                changeSlide(-1);
            } else if (e.key === 'ArrowRight') {
                changeSlide(1);
            }
        });
 </script>
@endsection