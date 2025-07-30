   @extends('index')
   @section('title', 'Home')
   @section('content')
       <button id="hide-nav-btn" class="hide-nav-btn" title="Hide Navigation">
        <i class="fas fa-eye-slash"></i>
      </button>
       <!-- Hero Banner start -->
       <div class="hero-banner-1">
           <div class="video-background">
               <video autoplay muted loop playsinline>
                   <source src="assets/media/video/movie-video.m4" type="video/mp4" />
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
                                   <h4 class="mb-8">Immersive Gameplay</h4>
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
                                   <h4 class="mb-8">Engaging Storylines</h4>
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
                                   <h4 class="mb-8">Replay Value</h4>
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
                                   <h4 class="mb-8">Responsive Controls</h4>
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

           <!-- <section class="tournaments p-40">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-6">
                    <h2>Tournament</h2>
                  </div>
                  <div class="col-lg-6">
                    <div class="text-lg-end text-center">
                      <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link active"
                            data-bs-toggle="tab"
                            data-bs-target="#all"
                            type="button"
                            role="tab"
                          >
                            ALL
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#pubg"
                            type="button"
                            role="tab"
                          >
                            PUBG
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#dota-2"
                            type="button"
                            role="tab"
                          >
                            DOTA 2
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#fortnite"
                            type="button"
                            role="tab"
                          >
                            FORTNITE
                          </button>
                        </li>
                        <li class="nav-item" role="presentation">
                          <button
                            class="nav-link"
                            data-bs-toggle="tab"
                            data-bs-target="#cs-go"
                            type="button"
                            role="tab"
                          >
                            CS GO
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="tab-content">
                  <div id="all" class="tab-pane fade show pt-48 active">
                    <div class="row">
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-1">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-1.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                PUBG - ESPORT TOURANEMT</a
                              >
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-2">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-2.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                CS GO - ESPORT TOURANEMT</a
                              >
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-3">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-3.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                FORTNITE - ESPORT TOURANEMT
                              </a>
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-4">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-4.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                DOTA 2 - ESPORT TOURANEMT</a
                              >
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="more-tournaments">
                      <div
                        id="more-tournaments"
                        class="accordion-collapse collapse"
                        data-bs-parent="#accordionExample"
                      >
                        <div class="row">
                          <div class="col-xl-6">
                            <div class="tournament-card mb-30 b-1">
                              <img
                                class="t-logo"
                                src="assets/media/logos/tl-1.png"
                                alt=""
                              />
                              <div class="text-block">
                                <h4 class="mb-24">
                                  <a href="tournment-detail.html">
                                    PUBG - ESPORT TOURANEMT</a
                                  >
                                </h4>
                                <div class="info mb-32">
                                  <div class="block">
                                    <img src="assets/media/icons/ti-1.png" alt="" />
                                    <h6 class="light-gray">A-Tier</h6>
                                  </div>
                                  <div class="block">
                                    <img
                                      src="assets/media/icons/dollar.png"
                                      alt=""
                                    />
                                    <h6 class="light-gray">$50,000</h6>
                                  </div>
                                  <div class="block">
                                    <img src="assets/media/icons/aim.png" alt="" />
                                    <h6 class="light-gray">South Asia</h6>
                                  </div>
                                </div>
                                <div class="btn-block">
                                  <a
                                    href="tournment-detail.html"
                                    class="cus-btn primary"
                                    >Check Detail<i class="fas fa-chevron-right"></i
                                  ></a>
                                  <a
                                    href="tournment-detail.html"
                                    class="cus-btn sec"
                                    >Participate Now<i
                                      class="fas fa-chevron-right"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-6">
                            <div class="tournament-card mb-30 b-2">
                              <img
                                class="t-logo"
                                src="assets/media/logos/tl-2.png"
                                alt=""
                              />
                              <div class="text-block">
                                <h4 class="mb-24">
                                  <a href="tournment-detail.html">
                                    CS GO - ESPORT TOURANEMT</a
                                  >
                                </h4>
                                <div class="info mb-32">
                                  <div class="block">
                                    <img src="assets/media/icons/ti-1.png" alt="" />
                                    <h6 class="light-gray">A-Tier</h6>
                                  </div>
                                  <div class="block">
                                    <img
                                      src="assets/media/icons/dollar.png"
                                      alt=""
                                    />
                                    <h6 class="light-gray">$50,000</h6>
                                  </div>
                                  <div class="block">
                                    <img src="assets/media/icons/aim.png" alt="" />
                                    <h6 class="light-gray">South Asia</h6>
                                  </div>
                                </div>
                                <div class="btn-block">
                                  <a
                                    href="tournment-detail.html"
                                    class="cus-btn primary"
                                    >Check Detail<i class="fas fa-chevron-right"></i
                                  ></a>
                                  <a
                                    href="tournment-detail.html"
                                    class="cus-btn sec"
                                    >Participate Now<i
                                      class="fas fa-chevron-right"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-6">
                            <div class="tournament-card mb-30 b-3">
                              <img
                                class="t-logo"
                                src="assets/media/logos/tl-3.png"
                                alt=""
                              />
                              <div class="text-block">
                                <h4 class="mb-24">
                                  <a href="tournment-detail.html">
                                    FORTNITE - ESPORT TOURANEMT
                                  </a>
                                </h4>
                                <div class="info mb-32">
                                  <div class="block">
                                    <img src="assets/media/icons/ti-1.png" alt="" />
                                    <h6 class="light-gray">A-Tier</h6>
                                  </div>
                                  <div class="block">
                                    <img
                                      src="assets/media/icons/dollar.png"
                                      alt=""
                                    />
                                    <h6 class="light-gray">$50,000</h6>
                                  </div>
                                  <div class="block">
                                    <img src="assets/media/icons/aim.png" alt="" />
                                    <h6 class="light-gray">South Asia</h6>
                                  </div>
                                </div>
                                <div class="btn-block">
                                  <a
                                    href="tournment-detail.html"
                                    class="cus-btn primary"
                                    >Check Detail<i class="fas fa-chevron-right"></i
                                  ></a>
                                  <a
                                    href="tournment-detail.html"
                                    class="cus-btn sec"
                                    >Participate Now<i
                                      class="fas fa-chevron-right"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-xl-6">
                            <div class="tournament-card mb-30 b-4">
                              <img
                                class="t-logo"
                                src="assets/media/logos/tl-4.png"
                                alt=""
                              />
                              <div class="text-block">
                                <h4 class="mb-24">
                                  <a href="tournment-detail.html">
                                    DOTA 2 - ESPORT TOURANEMT</a
                                  >
                                </h4>
                                <div class="info mb-32">
                                  <div class="block">
                                    <img src="assets/media/icons/ti-1.png" alt="" />
                                    <h6 class="light-gray">A-Tier</h6>
                                  </div>
                                  <div class="block">
                                    <img
                                      src="assets/media/icons/dollar.png"
                                      alt=""
                                    />
                                    <h6 class="light-gray">$50,000</h6>
                                  </div>
                                  <div class="block">
                                    <img src="assets/media/icons/aim.png" alt="" />
                                    <h6 class="light-gray">South Asia</h6>
                                  </div>
                                </div>
                                <div class="btn-block">
                                  <a
                                    href="tournment-detail.html"
                                    class="cus-btn primary"
                                    >Check Detail<i class="fas fa-chevron-right"></i
                                  ></a>
                                  <a
                                    href="tournment-detail.html"
                                    class="cus-btn sec"
                                    >Participate Now<i
                                      class="fas fa-chevron-right"
                                    ></i
                                  ></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <a
                        href="#"
                        class="accordion-button load-more-btn cus-btn primary text-center"
                        data-bs-toggle="collapse"
                        data-bs-target="#more-tournaments"
                        aria-expanded="true"
                      >
                        Load More <i class="fas fa-chevron-right"></i
                      ></a>
                    </div>
                  </div>
                  <div id="pubg" class="tab-pane fade pt-48">
                    <div class="row">
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-1">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-3.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                PUBG - ESPORT TOURANEMT
                              </a>
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-1">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-4.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                PUBG - ESPORT TOURANEMT</a
                              >
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-1">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-1.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                PUBG - ESPORT TOURANEMT</a
                              >
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-1">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-2.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                PUBG - ESPORT TOURANEMT</a
                              >
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="dota-2" class="tab-pane fade pt-48">
                    <div class="row">
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-2">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-3.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                DOTA-2 - ESPORT TOURANEMT
                              </a>
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-2">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-4.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                DOTA-2 - ESPORT TOURANEMT</a
                              >
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-2">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-1.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                DOTA-2 - ESPORT TOURANEMT</a
                              >
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="fortnite" class="tab-pane fade pt-48">
                    <div class="row">
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-3">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-3.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                FORTNITE - ESPORT TOURANEMT
                              </a>
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-3">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-4.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                FORTNITE - ESPORT TOURANEMT</a
                              >
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-3">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-4.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                FORTNITE - ESPORT TOURANEMT</a
                              >
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div id="cs-go" class="tab-pane fade pt-48">
                    <div class="row">
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-4">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-3.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                CS-GO - ESPORT TOURANEMT
                              </a>
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-4">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-4.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                CS_GO - ESPORT TOURANEMT</a
                              >
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xl-6">
                        <div class="tournament-card mb-30 b-4">
                          <img
                            class="t-logo"
                            src="assets/media/logos/tl-4.png"
                            alt=""
                          />
                          <div class="text-block">
                            <h4 class="mb-24">
                              <a href="tournment-detail.html">
                                CS_GO - ESPORT TOURANEMT</a
                              >
                            </h4>
                            <div class="info mb-32">
                              <div class="block">
                                <img src="assets/media/icons/ti-1.png" alt="" />
                                <h6 class="light-gray">A-Tier</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/dollar.png" alt="" />
                                <h6 class="light-gray">$50,000</h6>
                              </div>
                              <div class="block">
                                <img src="assets/media/icons/aim.png" alt="" />
                                <h6 class="light-gray">South Asia</h6>
                              </div>
                            </div>
                            <div class="btn-block">
                              <a
                                href="tournment-detail.html"
                                class="cus-btn primary"
                                >Check Detail<i class="fas fa-chevron-right"></i
                              ></a>
                              <a href="tournment-detail.html" class="cus-btn sec"
                                >Participate Now<i class="fas fa-chevron-right"></i
                              ></a>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->

           <!-- <section class="streaming p-40">
              <div class="container">
                <div class="heading">
                  <h2>Match Streams</h2>
                </div>
                <div class="match-stream-slider">
                  <div class="stream-card">
                    <img
                      src="assets/media/streaming/vc-1.png"
                      alt=""
                      class="thumbnail"
                    />
                    <div class="overlay">
                      <a
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#videoModal"
                        class="play-btn"
                        ><i class="fas fa-play"></i
                      ></a>
                    </div>
                    <img
                      src="assets/media/users/streamer-1.png"
                      alt=""
                      class="streamer"
                    />
                  </div>
                  <div class="stream-card">
                    <img
                      src="assets/media/streaming/vc-2.png"
                      alt=""
                      class="thumbnail"
                    />
                    <div class="overlay">
                      <a
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#videoModal"
                        class="play-btn"
                        ><i class="fas fa-play"></i
                      ></a>
                    </div>
                    <img
                      src="assets/media/users/streamer-2.png"
                      alt=""
                      class="streamer"
                    />
                  </div>
                  <div class="stream-card">
                    <img
                      src="assets/media/streaming/vc-3.png"
                      alt=""
                      class="thumbnail"
                    />
                    <div class="overlay">
                      <a
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#videoModal"
                        class="play-btn"
                        ><i class="fas fa-play"></i
                      ></a>
                    </div>
                    <img
                      src="assets/media/users/streamer-3.png"
                      alt=""
                      class="streamer"
                    />
                  </div>
                  <div class="stream-card">
                    <img
                      src="assets/media/streaming/vc-1.png"
                      alt=""
                      class="thumbnail"
                    />
                    <div class="overlay">
                      <a
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#videoModal"
                        class="play-btn"
                        ><i class="fas fa-play"></i
                      ></a>
                    </div>
                    <img
                      src="assets/media/users/streamer-1.png"
                      alt=""
                      class="streamer"
                    />
                  </div>
                  <div class="stream-card">
                    <img
                      src="assets/media/streaming/vc-2.png"
                      alt=""
                      class="thumbnail"
                    />
                    <div class="overlay">
                      <a
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#videoModal"
                        class="play-btn"
                        ><i class="fas fa-play"></i
                      ></a>
                    </div>
                    <img
                      src="assets/media/users/streamer-2.png"
                      alt=""
                      class="streamer"
                    />
                  </div>
                  <div class="stream-card">
                    <img
                      src="assets/media/streaming/vc-3.png"
                      alt=""
                      class="thumbnail"
                    />
                    <div class="overlay">
                      <a
                        href="#"
                        data-bs-toggle="modal"
                        data-bs-target="#videoModal"
                        class="play-btn"
                        ><i class="fas fa-play"></i
                      ></a>
                    </div>
                    <img
                      src="assets/media/users/streamer-3.png"
                      alt=""
                      class="streamer"
                    />
                  </div>
                </div>
              </div>
            </section> -->

           <!-- <section class="inner-banner">
              <div class="row">
                <div class="col-lg-4 col-md-3 img-block">
                  <img
                    src="assets/media/banner/streamer-1.png"
                    alt=""
                    class="player-img"
                  />
                </div>
                <div class="col-lg-4 col-md-6">
                  <div class="content text-center">
                    <img
                      src="assets/media/logos/tl-2.png"
                      alt=""
                      class="banner-logo mb-32"
                    />
                    <h2 class="title mb-8">
                      Who Will <b class="color-primary">Be the Best?</b>
                    </h2>
                    <p class="mb-32 medium-gray">
                      Lorem ipsum dolor sit amet consectetur. Venenatis sit faucibus
                      eget aliquet nisi faucibus fusce. Interdum quisque.
                    </p>
                    <a href="stream-detail.html" class="cus-btn primary"
                      >Watch Now<i class="fas fa-play-circle"></i
                    ></a>
                  </div>
                </div>
                <div class="col-lg-4 col-md-3 img-block">
                  <img
                    src="assets/media/banner/streamer-2.png"
                    alt=""
                    class="player-img"
                  />
                </div>
              </div>
            </section> -->

           <!-- <section class="p-40">
              <div class="container">
                <div class="heading">
                  <h2>Our Shop</h2>
                </div>
                <div class="product-slider">
                  <div class="product-card st-2">
                    <div class="top-row">
                      <h6 class="tag">SALE</h6>
                      <div class="wishlist-icon"><i class="fas fa-heart"></i></div>
                    </div>
                    <h5 class="mb-12">
                      <a href="product-detail.html">Gamepad Game Controller </a>
                    </h5>
                    <a href="product-detail.html"
                      ><img src="assets/media/products/p-1.png" alt=""
                    /></a>
                    <div class="bottom-row">
                      <div class="price">
                        <h4>$20.00</h4>
                      </div>
                      <a href="cart.html" class="cus-btn primary"
                        >Add to cart<i class="fas fa-shopping-cart"></i
                      ></a>
                    </div>
                  </div>
                  <div class="product-card st-2">
                    <div class="top-row">
                      <h6 class="tag">NEW</h6>
                      <div class="wishlist-icon"><i class="fas fa-heart"></i></div>
                    </div>
                    <h5 class="mb-12">
                      <a href="product-detail.html">Keyboard With RGB Light</a>
                    </h5>
                    <a href="product-detail.html"
                      ><img src="assets/media/products/p-2.png" alt=""
                    /></a>
                    <div class="bottom-row">
                      <div class="price">
                        <h4>$20.00</h4>
                      </div>
                      <a href="cart.html" class="cus-btn primary"
                        >Add to cart<i class="fas fa-shopping-cart"></i
                      ></a>
                    </div>
                  </div>
                  <div class="product-card st-2">
                    <div class="top-row">
                      <h6 class="tag">NEW</h6>
                      <div class="wishlist-icon"><i class="fas fa-heart"></i></div>
                    </div>
                    <h5 class="mb-12">
                      <a href="product-detail.html">Fusion Gaming Headphone</a>
                    </h5>
                    <a href="product-detail.html"
                      ><img src="assets/media/products/p-3.png" alt=""
                    /></a>
                    <div class="bottom-row">
                      <div class="price">
                        <h4>$20.00</h4>
                      </div>
                      <a href="cart.html" class="cus-btn primary"
                        >Add to cart<i class="fas fa-shopping-cart"></i
                      ></a>
                    </div>
                  </div>
                  <div class="product-card st-2">
                    <div class="top-row">
                      <h6 class="tag">SALE</h6>
                      <div class="wishlist-icon"><i class="fas fa-heart"></i></div>
                    </div>
                    <h5 class="mb-12">
                      <a href="product-detail.html">Gamepad Game Controller </a>
                    </h5>
                    <a href="product-detail.html"
                      ><img src="assets/media/products/p-1.png" alt=""
                    /></a>
                    <div class="bottom-row">
                      <div class="price">
                        <h4>$20.00</h4>
                      </div>
                      <a href="cart.html" class="cus-btn primary"
                        >Add to cart<i class="fas fa-shopping-cart"></i
                      ></a>
                    </div>
                  </div>
                  <div class="product-card st-2">
                    <div class="top-row">
                      <h6 class="tag">NEW</h6>
                      <div class="wishlist-icon"><i class="fas fa-heart"></i></div>
                    </div>
                    <h5 class="mb-12">
                      <a href="product-detail.html">Keyboard With RGB Light</a>
                    </h5>
                    <a href="product-detail.html"
                      ><img src="assets/media/products/p-2.png" alt=""
                    /></a>
                    <div class="bottom-row">
                      <div class="price">
                        <h4>$20.00</h4>
                      </div>
                      <a href="cart.html" class="cus-btn primary"
                        >Add to cart<i class="fas fa-shopping-cart"></i
                      ></a>
                    </div>
                  </div>
                  <div class="product-card st-2">
                    <div class="top-row">
                      <h6 class="tag">NEW</h6>
                      <div class="wishlist-icon"><i class="fas fa-heart"></i></div>
                    </div>
                    <h5 class="mb-12">
                      <a href="product-detail.html">Fusion Gaming Headphone </a>
                    </h5>
                    <a href="product-detail.html"
                      ><img src="assets/media/products/p-3.png" alt=""
                    /></a>
                    <div class="bottom-row">
                      <div class="price">
                        <h4>$20.00</h4>
                      </div>
                      <a href="cart.html" class="cus-btn primary"
                        >Add to cart<i class="fas fa-shopping-cart"></i
                      ></a>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->

           <!-- <section class="p-40">
              <div class="container">
                <div class="heading">
                  <h2>Meet Our Gamers</h2>
                </div>
                <div class="row">
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="gamer-card mb-30 mb-xl-0 bg-red">
                      <a href="team.html" class="img-block">
                        <h4 class="name bg-red">Phoenix</h4>
                        <img src="assets/media/gamers/g-1.png" alt="" />
                        <h5 class="game-name bg-red">FORTNITE</h5>
                      </a>
                      <ul class="unstyled social-icons">
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/Facebook.png" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/Twitter.png" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/Instagram.png" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/SnapChat.png" alt=""
                          /></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="gamer-card mb-30 mb-xl-0 bg-purple">
                      <a href="team.html" class="img-block">
                        <h4 class="name bg-purple">Raven</h4>
                        <img src="assets/media/gamers/g-2.png" alt="" />
                        <h5 class="game-name bg-purple">CS GO</h5>
                      </a>
                      <ul class="unstyled social-icons">
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/Facebook.png" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/Twitter.png" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/Instagram.png" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/SnapChat.png" alt=""
                          /></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="gamer-card mb-30 mb-xl-0 bg-red">
                      <a href="team.html" class="img-block">
                        <h4 class="name bg-red">Raiden</h4>
                        <img src="assets/media/gamers/g-3.png" alt="" />
                        <h5 class="game-name bg-red">DOTA 2</h5>
                      </a>
                      <ul class="unstyled social-icons">
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/Facebook.png" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/Twitter.png" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/Instagram.png" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/SnapChat.png" alt=""
                          /></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div href="team.html" class="gamer-card bg-purple">
                      <a href="team.html" class="img-block">
                        <h4 class="name bg-purple">Merick</h4>
                        <img src="assets/media/gamers/g-4.png" alt="" />
                        <h5 class="game-name bg-purple">PUBD</h5>
                      </a>
                      <ul class="unstyled social-icons">
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/Facebook.png" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/Twitter.png" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/Instagram.png" alt=""
                          /></a>
                        </li>
                        <li>
                          <a href=""
                            ><img src="assets/media/icons/SnapChat.png" alt=""
                          /></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </section> -->

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
                           <a href="blog-detail.html" class="blog-card mb-30 mb-lg-0">
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
                           <a href="blog-detail.html" class="blog-card mb-30 mb-lg-0">
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
                           <a href="blog-detail.html" class="blog-card">
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
