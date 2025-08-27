@extends('index')
@section('title', 'Prices')
@section('content')
    <style>
        /* Main Container */
        .containers {
            max-width: 1200px;
            margin: 0 auto;
            padding: 40px 20px;
            margin-top: 200px;
        }







        /* Category Navigation */
        .category-nav {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 50px;
            flex-wrap: wrap;
        }

        .category-btn {
            background: #2c2d2f;
            border: 2px solid #f7d955;
            color: #fff;
            padding: 15px 30px;
            border-radius: 50px;
            font-size: 1.1rem;
            font-weight: bold;
            cursor: pointer;
            transition: all 0.3s ease;
            backdrop-filter: blur(10px);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .category-btn:hover {
            border-color: #f7d955;
            /* background: rgba(255, 107, 53, 0.2); */
            transform: translateY(-3px);
            box-shadow: 0 8px 25px #f7d955;
        }



        /* Category Section */
        .category-section {
            margin-bottom: 80px;
            opacity: 1;
            transform: translateY(0);
            transition: all 0.5s ease;
        }

        .category-section.hidden {
            opacity: 0;
            transform: translateY(20px);
            pointer-events: none;
            position: absolute;
            left: -9999px;
        }

        .category-title {
            text-align: center;
            font-size: 2.8rem;
            margin-bottom: 50px;
            background: linear-gradient(90deg, #f7d955 0%, #000000 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            position: relative;
        }

        .category-title::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 100px;
            height: 3px;
            background: linear-gradient(90deg, #f7d955 0%, #000000 100%);
            border-radius: 2px;
        }

        /* Pricing Grid */
        .pricing-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin-bottom: 60px;
        }

        .pricing-grid {
            display: flex;
            flex-wrap: wrap;
            /* allows items to go to the next row */
            justify-content: center;
            /* centers items in each row */
            gap: 30px;
            /* space between items */
            margin-bottom: 60px;
        }

        .pricing-grid>* {
            flex: 1 1 300px;
            /* minimum width 300px, flexible growth */
            max-width: 400px;
            /* ensures they don’t stretch too wide */
        }

        .extra-controller {
            background: linear-gradient(135deg, rgba(247, 217, 85, 0.2), rgba(255, 107, 53, 0.2));
            border: 2px solid rgba(247, 217, 85, 0.5);
        }

        .extra-controller:hover {
            border-color: #f7d955;
            box-shadow: 0 20px 40px rgba(247, 217, 85, 0.3);
        }

        .pricing-card {
            background: #2c2d2f4d;
            border: 2px solid transparent;
            border-radius: 20px;
            padding: 40px 30px;
            text-align: center;
            position: relative;
            overflow: hidden;
            transition: all 0.4s ease;
            backdrop-filter: blur(10px);
        }

        .pricing-card::before {
            content: '';
            position: absolute;
            top: -2px;
            left: -2px;
            right: -2px;
            bottom: -2px;
            /* background: linear-gradient(45deg, #ff6b35, #00d4ff, #ff6b35, #00d4ff); */
            border-radius: 20px;
            z-index: -1;
            animation: borderGlow 3s linear infinite;
        }


        .pricing-card:hover {
            transform: translateY(-10px) scale(1.02);
            box-shadow: 0 20px 40px #f7d955;
            ;
        }

        .pricing-card.popular {
            transform: scale(1.05);
        }

        .pricing-card.popular::after {
            content: 'MOST POPULAR';
            position: absolute;
            top: 20px;
            right: -30px;
            background: linear-gradient(90deg, #f7d955 0%, #000000 100%);
            color: white;
            padding: 8px 40px;
            font-size: 0.8rem;
            font-weight: bold;
            transform: rotate(45deg);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
        }

        .card-icon {
            font-size: 4rem;
            margin-bottom: 20px;
            display: block;
        }

        .card-title {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #fff;
        }

        .card-price {
            font-size: 2rem;
            padding: 20px 0;
            font-weight: bold;
            margin-bottom: 10px;
            background: linear-gradient(90deg, #f7d955 0%, #000000 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .card-duration {
            color: #bbb;
            margin-bottom: 30px;
            font-size: 1.1rem;
        }










        /* Responsive Design */
        @media (max-width: 768px) {
            .logo {
                font-size: 2rem;
            }

            .page-title h1 {
                font-size: 2.5rem;
            }

            .pricing-card {
                padding: 30px 20px;
            }

            .card-price {
                font-size: 2.5rem;
            }

            .containers {
                padding: 20px 15px;
            }
        }

        /* Animation for moving sections to top */
    </style>
    </head>

    <body>




        <div class="containers">


            <!-- Category Navigation -->
      <div class="category-nav nav  " role="tablist">
    <button class="category-btn   active" data-bs-toggle="tab" data-bs-target="#pc-section" type="button" role="tab">PC Gaming</button>
    <button class="category-btn  " data-bs-toggle="tab" data-bs-target="#racing-simulator-section" type="button" role="tab">Steering Wheel</button>
    <button class="category-btn  " data-bs-toggle="tab" data-bs-target="#playstation-section" type="button" role="tab">VIP</button>
</div>
<div class="tab-content mt-3">

    <!-- PC Gaming Section -->
    <div class="tab-pane fade show active" id="pc-section" role="tabpanel">
        <h2 class="category-title">💻 PC Gaming</h2>
        <div class="pricing-grid">
                    <div class="pricing-card">
                        <span class="card-icon">🕐</span>
                        <h3 class="card-title">1 Hour</h3>
                        <div class="card-price">1.5 JD</div>

                    </div>

                    <div class="pricing-card">
                        <span class="card-icon">🕒</span>
                        <h3 class="card-title">3 Hours</h3>
                        <div class="card-price">3 JD</div>

                    </div>

                    <div class="pricing-card  ">
                        <span class="card-icon">🕖</span>
                        <h3 class="card-title">7 Hours</h3>
                        <div class="card-price">5 JD</div>

                    </div>

                    <div class="pricing-card">
                        <span class="card-icon">🕙</span>
                        <h3 class="card-title">10 Hours</h3>
                        <div class="card-price">7 JD</div>

                    </div>

                    <div class="pricing-card">
                        <span class="card-icon">🌟</span>
                        <h3 class="card-title">20 Hours</h3>
                        <div class="card-price">11 JD</div>

                    </div>

                    <div class="pricing-card extra-controller">
                        <span class="card-icon">🎮</span>
                        <h3 class="card-title">Extra Controller</h3>
                        <div class="card-price">2 JD</div>

                    </div>
                </div>
    </div>

    <!-- PlayStation Gaming Section -->
    <div class="tab-pane fade" id="playstation-section" role="tabpanel">
        <h2 class="category-title"><i class="fas fa-crown"></i> VIP</h2>
               <div class="pricing-grid">
                    <div class="pricing-card">
                        <span class="card-icon">🕐</span>
                        <h3 class="card-title">1 Hour</h3>
                        <div class="card-price">2 JD</div>

                    </div>

                    <div class="pricing-card">
                        <span class="card-icon">🕒</span>
                        <h3 class="card-title">3 Hours</h3>
                        <div class="card-price">4 JD</div>

                    </div>

                    <div class="pricing-card  ">
                        <span class="card-icon">🕔</span>
                        <h3 class="card-title">5 Hours</h3>
                        <div class="card-price">5 JD</div>

                    </div>

                    <div class="pricing-card">
                        <span class="card-icon">🕙</span>
                        <h3 class="card-title">10 Hours</h3>
                        <div class="card-price">8 JD</div>

                    </div>

                    <div class="pricing-card">
                        <span class="card-icon">🌟</span>
                        <h3 class="card-title">20 Hours</h3>
                        <div class="card-price">14 JD</div>

                    </div>


                </div>
    </div>

    <!-- Steering Wheel Gaming Section -->
    <div class="tab-pane fade" id="racing-simulator-section" role="tabpanel">
        <h2 class="category-title">🏎️ Steering Wheel</h2>
             <div class="pricing-grid">
                    <div class="pricing-card">
                        <span class="card-icon">🕧</span>
                        <h3 class="card-title">30 min</h3>
                        <div class="card-price">3 JD</div>
                   
                    </div>

                    <div class="pricing-card">
                        <span class="card-icon">🕐</span>
                        <h3 class="card-title">1 Hours</h3>
                        <div class="card-price">5 JD</div>
                   
                    </div>

                

              
                </div>
    </div>

</div>

            <!-- PC Gaming Section -->
            {{-- <div class="category-section" id="pc-section" data-category="pc">
                <h2 class="category-title">💻 PC Gaming</h2>
                <div class="pricing-grid">
                    <div class="pricing-card">
                        <span class="card-icon">🕐</span>
                        <h3 class="card-title">1 Hour</h3>
                        <div class="card-price">1.5 JD</div>

                    </div>

                    <div class="pricing-card">
                        <span class="card-icon">🕒</span>
                        <h3 class="card-title">3 Hours</h3>
                        <div class="card-price">3 JD</div>

                    </div>

                    <div class="pricing-card  ">
                        <span class="card-icon">🕖</span>
                        <h3 class="card-title">7 Hours</h3>
                        <div class="card-price">5 JD</div>

                    </div>

                    <div class="pricing-card">
                        <span class="card-icon">🕙</span>
                        <h3 class="card-title">10 Hours</h3>
                        <div class="card-price">7 JD</div>

                    </div>

                    <div class="pricing-card">
                        <span class="card-icon">🌟</span>
                        <h3 class="card-title">20 Hours</h3>
                        <div class="card-price">11 JD</div>

                    </div>

                    <div class="pricing-card extra-controller">
                        <span class="card-icon">🎮</span>
                        <h3 class="card-title">Extra Controller</h3>
                        <div class="card-price">2 JD</div>

                    </div>
                </div>
            </div> --}}

            <!-- PlayStation Gaming Section -->
            {{-- <div class="category-section" id="playstation-section" data-category="playstation">
                <h2 class="category-title"><i class="fas fa-crown"></i> VIP </h2>
                <div class="pricing-grid">
                    <div class="pricing-card">
                        <span class="card-icon">🕐</span>
                        <h3 class="card-title">1 Hour</h3>
                        <div class="card-price">2 JD</div>

                    </div>

                    <div class="pricing-card">
                        <span class="card-icon">🕒</span>
                        <h3 class="card-title">3 Hours</h3>
                        <div class="card-price">4 JD</div>

                    </div>

                    <div class="pricing-card  ">
                        <span class="card-icon">🕔</span>
                        <h3 class="card-title">5 Hours</h3>
                        <div class="card-price">5 JD</div>

                    </div>

                    <div class="pricing-card">
                        <span class="card-icon">🕙</span>
                        <h3 class="card-title">10 Hours</h3>
                        <div class="card-price">8 JD</div>

                    </div>

                    <div class="pricing-card">
                        <span class="card-icon">🌟</span>
                        <h3 class="card-title">20 Hours</h3>
                        <div class="card-price">14 JD</div>

                    </div>


                </div>
            </div> --}}

            <!-- Steering Wheel Gaming Section -->
            {{-- <div class="category-section" id="racing-simulator-section">
                <h2 class="category-title">🏎️  steering wheel</h2>
                <div class="pricing-grid">
                    <div class="pricing-card">
                        <span class="card-icon">🕧</span>
                        <h3 class="card-title">30 min</h3>
                        <div class="card-price">3 JD</div>
                   
                    </div>

                    <div class="pricing-card">
                        <span class="card-icon">🕐</span>
                        <h3 class="card-title">1 Hours</h3>
                        <div class="card-price">5 JD</div>
                   
                    </div>

                

              
                </div>
            </div> --}}

            {{-- <div class="services-section">
            <h2 class="services-title">Additional Services</h2>
            <div class="services-grid">
                <div class="service-card">
                    <span class="service-icon">🎂</span>
                    <h4 class="service-name">Birthday Party Package</h4>
                    <div class="service-price">$199</div>
                </div>
                <div class="service-card">
                    <span class="service-icon">🏆</span>
                    <h4 class="service-name">Tournament Entry</h4>
                    <div class="service-price">$50</div>
                </div>
                <div class="service-card">
                    <span class="service-icon">🕹️</span>
                    <h4 class="service-name">Console Gaming</h4>
                    <div class="service-price">$12/hr</div>
                </div>
                <div class="service-card">
                    <span class="service-icon">🥤</span>
                    <h4 class="service-name">Snack Combo</h4>
                    <div class="service-price">$8</div>
                </div>
                <div class="service-card">
                    <span class="service-icon">📚</span>
                    <h4 class="service-name">Gaming Coaching</h4>
                    <div class="service-price">$30/hr</div>
                </div>
                <div class="service-card">
                    <span class="service-icon">🎥</span>
                    <h4 class="service-name">Stream Setup</h4>
                    <div class="service-price">$45/hr</div>
                </div>
            </div>
        </div> --}}
        </div>

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    @endsection
