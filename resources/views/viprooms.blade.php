 @extends('index')
 @section('title', 'Vip Rooms')
 @section('content')
 
 
<div class="page-title-banner" id="viprooms-padding">
  <div class="slider-container">
    <div class="slider-wrapper" id="sliderWrapper">
      <!-- Slide 1: Retro Arcade -->
      <div class="slide-2">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="text-center">
                <img
                  src="https://images.unsplash.com/photo-1511512578047-dfb367046420?w=800&h=600&fit=crop&crop=center"
                  alt="Retro Arcade"
                  class="img-fluid game-image slider-img"
                />
                <div class="col-12 text-center pt-3">
                  <h4>Retro Arcade</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2: Modern Gaming -->
      <div class="slide-2">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="text-center">
                <img
                  src="https://images.unsplash.com/photo-1542751371-adc38448a05e?w=800&h=600&fit=crop"
                  alt="Modern Gaming"
                  class="img-fluid game-image slider-img"
                />
                <div class="col-12 text-center pt-3">
                  <h4>Modern Gaming</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 3: Racing Zone -->
      <div class="slide-2">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="text-center">
                <img
                  src="https://images.unsplash.com/photo-1449824913935-59a10b8d2000?w=800&h=600&fit=crop&crop=center"
                  alt="Racing Zone"
                  class="img-fluid game-image slider-img"
                />
                <div class="col-12 text-center pt-3">
                  <h4>Racing Zone</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 4: Prize Corner -->
      <div class="slide-2">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-12">
              <div class="text-center">
                <img
                  src="https://images.unsplash.com/photo-1556438064-2d7646166914?w=800&h=600&fit=crop&crop=center"
                  alt="Prize Corner"
                  class="img-fluid game-image slider-img"
                />
                <div class="col-12 text-center pt-3">
                  <h4>Prize Corner</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Controls on sides -->
    <button class="slider-nav-2 prev" onclick="changeSlide(-1)">
      <i class="fas fa-chevron-left"></i>
    </button>
    <button class="slider-nav-2 next" onclick="changeSlide(1)">
      <i class="fas fa-chevron-right"></i>
    </button>
  </div>

  <!-- Indicators at bottom -->
  <div class="slider-indicators">
    <span class="indicator active" onclick="currentSlide(1)"></span>
    <span class="indicator" onclick="currentSlide(2)"></span>
    <span class="indicator" onclick="currentSlide(3)"></span>
    <span class="indicator" onclick="currentSlide(4)"></span>
  </div>
</div>




      <section class="features p-40">
        <div class="container">
          <div class="row">
            <div class="col-xl-3 col-sm-6">
              <div class="feature-card mb-24">
                <div class="content">
                  <img class="mb-16" src="assets/media/icons/fi-1.png" alt="" />
                  <h4 class="mb-8">name</h4>
                  <p class="medium-gray">description</p>
                  <img src="assets/media/shapes/s-1.png" alt="" class="shape" />
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="feature-card mb-24">
                <div class="content">
                  <img class="mb-16" src="assets/media/icons/fi-2.png" alt="" />
                  <h4 class="mb-8">name</h4>
                  <p class="medium-gray">description</p>
                  <img src="assets/media/shapes/s-1.png" alt="" class="shape" />
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="feature-card mb-24">
                <div class="content">
                  <img class="mb-16" src="assets/media/icons/fi-3.png" alt="" />
                  <h4 class="mb-8">name</h4>
                  <p class="medium-gray">description</p>
                  <img src="assets/media/shapes/s-1.png" alt="" class="shape" />
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-sm-6">
              <div class="feature-card">
                <div class="content">
                  <img class="mb-16" src="assets/media/icons/fi-4.png" alt="" />
                  <h4 class="mb-8">name</h4>
                  <p class="medium-gray">description</p>
                  <img src="assets/media/shapes/s-1.png" alt="" class="shape" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
 
    </div>
<script>
  let currentSlideIndex = 0;
  const slides = document.querySelectorAll('.slide-2');
  const totalSlides = slides.length;
  
  function showSlide(index) {
    if (index >= totalSlides) {
      currentSlideIndex = 0;
    } else if (index < 0) {
      currentSlideIndex = totalSlides - 1;
    } else {
      currentSlideIndex = index;
    }
    
    const sliderWrapper = document.getElementById('sliderWrapper');
    sliderWrapper.style.transform = `translateX(-${currentSlideIndex * 100}%)`;
    
    // Update indicators
    const indicators = document.querySelectorAll('.indicator');
    indicators.forEach((indicator, i) => {
      if (i === currentSlideIndex) {
        indicator.classList.add('active');
      } else {
        indicator.classList.remove('active');
      }
    });
  }
  
  function changeSlide(n) {
    showSlide(currentSlideIndex + n);
  }
  
  function currentSlide(n) {
    showSlide(n - 1);
  }
  
  // Initialize the slider
  showSlide(0);
  
  // Optional: Auto slide
  setInterval(() => changeSlide(1), 5000);
</script>

 
 @endsection
