@extends('index')
@section('title', 'Menu')
@section('content')
    <style>
        input {
            display: none;
        }

        .menu_img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        /* Base styles - Mobile first approach */
        .book {
            display: flex;
            justify-content: center;
            align-items: center;
            right: -70px;
            border-radius: 10px;
            padding: 20px;
            /* Remove large top padding for mobile, add via media query for desktop */
            padding-top: 175px;
        }

        #cover {
            width: min(95vw, 500px);
            height: min(95vw, 500px);
            min-width: 220px;
            min-height: 220px;
            background-color: #F7D955;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #000;
            font-size: clamp(14px, 5vw, 28px);
            font-weight: bold;
            text-align: center;
            padding: clamp(8px, 3vw, 20px);
            box-sizing: border-box;
        }

        .flip-book {
            width: min(95vw, 500px);
            height: min(95vw, 500px);
            min-width: 220px;
            min-height: 220px;
            position: relative;
            perspective: 1500px;
        }

        .flip {
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            transform-origin: left;
            transform-style: preserve-3d;
            transform: rotateY(0deg);
            transition: .5s;
            color: #FFFFFF;
        }

        .front,
        .back {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            box-sizing: border-box;
            padding: clamp(12px, 3vw, 20px);
            backface-visibility: hidden;
        }

        .front {
            background-color: #F7D955;
            box-shadow: inset 20px 0 50px rgba(0, 0, 0, 0.1), 0 2px 5px rgba(0, 0, 0, .1);
        }

        .back {
            background-color: #000000;
            transform: rotateY(180deg);
            border-left: 1px solid #F7D955;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .menu-content {
            overflow-y: auto;
            flex-grow: 1;
            padding-right: 10px; /* Add some space for scrollbar */
        }

        /* Custom scrollbar for menu content */
        .menu-content::-webkit-scrollbar {
            width: 5px;
        }

        .menu-content::-webkit-scrollbar-track {
            background: #333;
        }

        .menu-content::-webkit-scrollbar-thumb {
            background: #F7D955;
            border-radius: 3px;
        }

        .category {
            font-size: clamp(14px, 4vw, 24px);
            color: #FFFFFF;
            font-weight: bold;
            margin-bottom: clamp(8px, 2.5vw, 20px);
            border-bottom: 2px solid #F7D955;
            padding-bottom: clamp(5px, 1.5vw, 10px);
            position: sticky;
            top: 0;
            background-color: #000;
            z-index: 1;
        }

        .menu-items {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: clamp(8px, 2vw, 12px) 0;
            border-bottom: 1px solid #333;
        }

        .menu-items:last-child {
            border-bottom: none;
        }

        .product {
            font-size: clamp(12px, 3.5vw, 20px);
            font-weight: bold;
            color: #FFFFFF;
            flex: 1;
            margin-right: 10px;
        }

        .price {
            font-weight: bold;
            color: #F7D955;
            font-size: clamp(11px, 3vw, 18px);
            white-space: nowrap;
        }

        .next-btn,
        .back-btn {
            position: absolute;
            bottom: clamp(10px, 2.5vw, 20px);
            right: clamp(10px, 2.5vw, 20px);
            padding: clamp(10px, 2vw, 18px) clamp(18px, 4vw, 28px);
            background-color: #F7D955;
            color: #000000;
            border: none;
            border-radius: clamp(3px, 1vw, 8px);
            cursor: pointer;
            font-weight: bold;
            text-transform: uppercase;
            font-size: clamp(12px, 3vw, 18px);
            min-height: clamp(36px, 8vw, 48px);
            min-width: clamp(44px, 10vw, 60px);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 100;
            height: 40px;
            bottom: 23px;
            width: 80px;
            right: 25px;
        }

        .back-btn {
            left: clamp(10px, 2.5vw, 20px);
            right: auto;
        }

        @media screen and (min-width: 1200px) {
            .book {
                padding-top: 200px;
            }

            #cover,
            .flip-book {
                width: 500px !important;
                height: 500px !important;
            }
        }

        @media screen and (max-width: 991px) {
            .book {
                padding-top: 150px !important;
            }

            #cover,
            .flip-book {
                width: min(90vw, 400px) !important;
                height: min(90vw, 400px) !important;
            }
        }

        @media screen and (max-width: 768px) {
            .book {
                padding-top: 10px;
            }

            #cover,
            .flip-book {
                width: min(98vw, 340px) !important;
                height: min(98vw, 340px) !important;
            }

            .main-wrapper {
                overflow-x: auto;
            }
        }

        @media screen and (max-width: 480px) {
            .book {
                padding-top: 0;
            }

            #cover,
            .flip-book {
                width: min(80vw, 260px) !important;
                height: min(80vw, 260px) !important;
                min-width: 180px;
                min-height: 180px;
            }

            .category {
                font-size: 18px;
            }
            
            .product {
                font-size: 14px;
            }
            
            .price {
                font-size: 14px;
            }
        }

        /* Z-index ordering for pages */
        #p0 { z-index: 29; }
        #p1 { z-index: 28; }
        #p2 { z-index: 27; }
        #p3 { z-index: 26; }
        #p4 { z-index: 25; }
        #p5 { z-index: 24; }
        #p6 { z-index: 23; }
        #p7 { z-index: 22; }
        #p8 { z-index: 21; }
        #p9 { z-index: 20; }
        #p10 { z-index: 19; }
        #p11 { z-index: 18; }
        #p12 { z-index: 17; }
        #p13 { z-index: 16; }
        #p14 { z-index: 15; }
        #p15 { z-index: 14; }
        #p16 { z-index: 13; }
        #p17 { z-index: 12; }
        #p18 { z-index: 11; }
        #p19 { z-index: 10; }
        #p20 { z-index: 9; }
        #p21 { z-index: 8; }
        #p22 { z-index: 7; }
        #p23 { z-index: 6; }
        #p24 { z-index: 5; }
        #p25 { z-index: 4; }
        #p26 { z-index: 3; }
        #p27 { z-index: 2; }
        #p28 { z-index: 1; }

        /* Checked states for flipping pages */
        #c0:checked~.flip-book #p0 { transform: rotateY(-180deg); z-index: 1; }
        #c1:checked~.flip-book #p1 { transform: rotateY(-180deg); z-index: 2; }
        #c2:checked~.flip-book #p2 { transform: rotateY(-180deg); z-index: 3; }
        #c3:checked~.flip-book #p3 { transform: rotateY(-180deg); z-index: 4; }
        #c4:checked~.flip-book #p4 { transform: rotateY(-180deg); z-index: 5; }
        #c5:checked~.flip-book #p5 { transform: rotateY(-180deg); z-index: 6; }
        #c6:checked~.flip-book #p6 { transform: rotateY(-180deg); z-index: 7; }
        #c7:checked~.flip-book #p7 { transform: rotateY(-180deg); z-index: 8; }
        #c8:checked~.flip-book #p8 { transform: rotateY(-180deg); z-index: 9; }
        #c9:checked~.flip-book #p9 { transform: rotateY(-180deg); z-index: 10; }
        #c10:checked~.flip-book #p10 { transform: rotateY(-180deg); z-index: 11; }
        #c11:checked~.flip-book #p11 { transform: rotateY(-180deg); z-index: 12; }
        #c12:checked~.flip-book #p12 { transform: rotateY(-180deg); z-index: 13; }
        #c13:checked~.flip-book #p13 { transform: rotateY(-180deg); z-index: 14; }
        #c14:checked~.flip-book #p14 { transform: rotateY(-180deg); z-index: 15; }
        #c15:checked~.flip-book #p15 { transform: rotateY(-180deg); z-index: 16; }
        #c16:checked~.flip-book #p16 { transform: rotateY(-180deg); z-index: 17; }
        #c17:checked~.flip-book #p17 { transform: rotateY(-180deg); z-index: 18; }
        #c18:checked~.flip-book #p18 { transform: rotateY(-180deg); z-index: 19; }
        #c19:checked~.flip-book #p19 { transform: rotateY(-180deg); z-index: 20; }
        #c20:checked~.flip-book #p20 { transform: rotateY(-180deg); z-index: 21; }
        #c21:checked~.flip-book #p21 { transform: rotateY(-180deg); z-index: 22; }
        #c22:checked~.flip-book #p22 { transform: rotateY(-180deg); z-index: 23; }
        #c23:checked~.flip-book #p23 { transform: rotateY(-180deg); z-index: 24; }
        #c24:checked~.flip-book #p24 { transform: rotateY(-180deg); z-index: 25; }
        #c25:checked~.flip-book #p25 { transform: rotateY(-180deg); z-index: 26; }
        #c26:checked~.flip-book #p26 { transform: rotateY(-180deg); z-index: 27; }
        #c27:checked~.flip-book #p27 { transform: rotateY(-180deg); z-index: 28; }
        #c28:checked~.flip-book #p28 { transform: rotateY(-180deg); z-index: 29; }
    </style>

    <div class="book" id="menu-padding">
        <input type="checkbox" id="c0">
        <input type="checkbox" id="c1">
        <input type="checkbox" id="c2">
        <input type="checkbox" id="c3">
        <input type="checkbox" id="c4">
        <input type="checkbox" id="c5">
        <input type="checkbox" id="c6">
        <input type="checkbox" id="c7">
        <input type="checkbox" id="c8">
        <input type="checkbox" id="c9">
        <input type="checkbox" id="c10">
        <input type="checkbox" id="c11">
        <input type="checkbox" id="c12">
        <input type="checkbox" id="c13">
        <input type="checkbox" id="c14">
        <input type="checkbox" id="c15">
        <input type="checkbox" id="c16">
        <input type="checkbox" id="c17">
        <input type="checkbox" id="c18">
        <input type="checkbox" id="c19">
        <input type="checkbox" id="c20">
        <input type="checkbox" id="c21">
        <input type="checkbox" id="c22">
        <input type="checkbox" id="c23">
        <input type="checkbox" id="c24">
        <input type="checkbox" id="c25">
        <input type="checkbox" id="c26">
        <input type="checkbox" id="c27">
        <input type="checkbox" id="c28">

        <div id="cover">
            <div>Mines Gaming Center<br><br> Menu</div>
        </div>

        <div class="flip-book">
            <div class="flip" id="p0">
                <div class="back">
                    <div class="menu-content">
                        <div class="category">Hot Drinks</div>
                        
                        <div class="menu-items">
                            <div class="product">Espresso</div>
                            <div class="price">2.00 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Cappuccino</div>
                            <div class="price">2.50 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Cortado</div>
                            <div class="price">2.00 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Americano</div>
                            <div class="price">2.00 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Latte</div>
                            <div class="price">2.00 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Hot Chocolate</div>
                            <div class="price">2.00 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Turkish Coffee</div>
                            <div class="price">1.00 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Nescafe</div>
                            <div class="price">0.75 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Tea</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Milk Tea</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Herbs</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <br>
                        <br>
                        <br>
                        
                         
                        
                     
                        
                   
                        
                   
                    </div>
                    <label class="back-btn" for="c0">Back</label>
                </div>
                <div class="front">
                    <img class="menu_img"
                        src="assets/media/menu/bar.jpg"
                        alt="Starters">
                    <label class="next-btn" for="c0">Next</label>
                </div>
            </div>

            <div class="flip" id="p1">
                <div class="back">
                    <div class="menu-content">
                        <div class="category">Cold Drinks</div>
                        
                        <div class="menu-items">
                            <div class="product">Iced Amricano</div>
                            <div class="price">2.00 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Iced Latte</div>
                            <div class="price">2.00 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Spanish Latte</div>
                            <div class="price">3.00 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Caramel Macchiato</div>
                            <div class="price">3.00 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">White Mocha</div>
                            <div class="price">3.00 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Cinnabon Mocha</div>
                            <div class="price">2.75 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Iced Mocha</div>
                            <div class="price">2.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Pistachio Latte</div>
                            <div class="price">3.00 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Caramal Latte</div>
                            <div class="price">2.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Vanilla Latte</div>
                            <div class="price">2.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Hazelnut Latte</div>
                            <div class="price">2.50 JD</div>
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>
                    <label class="back-btn" for="c1">Back</label>
                </div>
                <div class="front">
                    <img class="menu_img"
                        src="assets/media/menu/drink.jpg"
                        alt="Salads">
                    <label class="next-btn" for="c1">Next</label>
                </div>
            </div>

            <div class="flip" id="p2">
                <div class="back">
                    <div class="menu-content">
                        <div class="category">Mappuccino</div>
                        
                        <div class="menu-items">
                            <div class="product">Caramel Frappe</div>
                            <div class="price">2.75 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">White Choc Frappe</div>
                            <div class="price">2.75 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Cinnabon Frappe</div>
                            <div class="price">2.75 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Pistachio Frappe</div>
                            <div class="price">3.50 JD</div>
                        </div>
                        
                      <br>
                      <br>
                      <br>
                    </div>
                    <label class="back-btn" for="c2">Back</label>
                </div>
                <div class="front">
                    <img class="menu_img"
                        src="assets/media/menu/drink.jpg"
                        alt="Main Courses">
                    <label class="next-btn" for="c2">Next</label>
                </div>
            </div>

            <div class="flip" id="p3">
                <div class="back">
                    <div class="menu-content">
                        <div class="category">Ice Tea</div>
                        
                        <div class="menu-items">
                            <div class="product">Iced Tea - Peach</div>
                            <div class="price">2.00 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Iced Tea - Mango</div>
                            <div class="price">2.00 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Iced Tea - Mix Berries</div>
                            <div class="price">2.00 JD</div>
                        </div>
                        
                       
                        
                      <br>
                      <br>
                      <br>
                    </div>
                    <label class="back-btn" for="c3">Back</label>
                </div>
                <div class="front">
                    <img class="menu_img"
                        src="assets/media/menu/drink.jpg"
                        alt="Pasta">
                    <label class="next-btn" for="c3">Next</label>
                </div>
            </div>

            <div class="flip" id="p4">
                <div class="back">
                    <div class="menu-content">
                        <div class="category">Smoothies</div>
                        
                        <div class="menu-items">
                            <div class="product">Mango</div>
                            <div class="price">2.50 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Mix Berries Pineapple</div>
                            <div class="price">2.50 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product"> Pina Colada</div>
                            <div class="price">2.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product"> Passion Fruit</div>
                            <div class="price">2.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product"> Pineapple X Apple</div>
                            <div class="price">3.00 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Mango X Passion</div>
                            <div class="price">3.00 JD</div>
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>
                    <label class="back-btn" for="c4">Back</label>
                </div>
                <div class="front">
                    <img class="menu_img"
                        src="assets/media/menu/drink.jpg"
                        alt="Desserts">
                    <label class="next-btn" for="c4">Next</label>
                </div>
            </div>

            <div class="flip" id="p5">
                <div class="back">
                    <div class="menu-content">
                        <div class="category">Mojito</div>
                        
                        <div class="menu-items">
                            <div class="product">Red Bull Mojito</div>
                            <div class="price">3.50 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Boom Boom Mojito</div>
                            <div class="price">2.75 JD</div>
                        </div>
                        
                        <div class="menu-items">
                            <div class="product">Code Red Mojito</div>
                            <div class="price"> 2.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Kenza Mojito</div>
                            <div class="price"> 2.00 JD</div>
                        </div>
                        <br>
                        <br>
                        <br>
                    </div>
                    <label class="back-btn" for="c5">Back</label>
                </div>
                <div class="front">
                    <img class="menu_img"
                        src="assets/media/menu/drink.jpg"
                        alt="Drinks">
                    <label class="next-btn" for="c5">Next</label>
                </div>
            </div>

            <div class="flip" id="p6">
                <div class="back">
                    <div class="menu-content">
                        <div class="category">Extras</div>
                        
                        <div class="menu-items">
                            <div class="product">Caramel</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Vanilla</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Hazelnut</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Espresso Shot</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Ice</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <br>
                        <br>
                        <br>
                        
                      
                    </div>
                    <label class="back-btn" for="c6">Back</label>
                </div>
                <div class="front">
                    <img class="menu_img"
                        src="assets/media/menu/drink.jpg"
                        alt="Chef's Specials">
                    <label class="next-btn" for="c6">Next</label>
                </div>
            </div>
            <div class="flip" id="p7">
                <div class="back">
                    <div class="menu-content">
                        <div class="category">Soft Drinks</div>
                        
                        <div class="menu-items">
                            <div class="product">Kenza Cola</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Kenza Lemon</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Kenza Orange</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Vimto</div>
                            <div class="price">0.75 JD</div>
                        </div>
                       
                        <br>
                        <br>
                        <br>
                        
                      
                    </div>
                    <label class="back-btn" for="c7">Back</label>
                </div>
                <div class="front">
                    <img class="menu_img"
                        src="assets/media/menu/drink.jpg"
                        alt="Chef's Specials">
                    <label class="next-btn" for="c7">Next</label>
                </div>
            </div>
            <div class="flip" id="p8">
                <div class="back">
                    <div class="menu-content">
                        <div class="category">Energy Drink</div>
                        
                        <div class="menu-items">
                            <div class="product">Red Bull</div>
                            <div class="price">1.75 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Boom Boom</div>
                            <div class="price">1.00 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Code Red</div>
                            <div class="price">1.00 JD</div>
                        </div>
                 
                        <br>
                        <br>
                        <br>
                        
                      
                    </div>
                    <label class="back-btn" for="c8">Back</label>
                </div>
                <div class="front">
                    <img class="menu_img"
                        src="assets/media/menu/drink.jpg"
                        alt="Chef's Specials">
                    <label class="next-btn" for="c8">Next</label>
                </div>
            </div>
            <div class="flip" id="p9">
                <div class="back">
                    <div class="menu-content">
                        <div class="category">Juices & Milk</div>
                        
                        <div class="menu-items">
                            <div class="product">Mango</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">orange</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Baladna Milk - strawberry</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Baladna Milk - Chocolate</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Shaneineh</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <br>
                        <br>
                        <br>
                        
                      
                    </div>
                    <label class="back-btn" for="c9">Back</label>
                </div>
                <div class="front">
                    <img class="menu_img"
                        src="assets/media/menu/drink.jpg"
                        alt="Chef's Specials">
                    <label class="next-btn" for="c9">Next</label>
                </div>
            </div>
            <div class="flip" id="p10">
                <div class="back">
                    <div class="menu-content">
                        <div class="category">Snaks</div>
                        
                        <div class="menu-items">
                            <div class="product">Mr.Chips</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Lays Chips</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Pringles Chips</div>
                            <div class="price">0.75 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Doritos Chips</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Snickers</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Kit Kat</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Bounty</div>
                            <div class="price">0.75 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Kinder Bueno</div>
                            <div class="price">0.75 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Twix</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Cookies</div>
                            <div class="price">1.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Indomie Pop Mie</div>
                            <div class="price">0.50 JD</div>
                        </div>
                        <br>
                        <br>
                        <br>
                        
                      
                    </div>
                    <label class="back-btn" for="c10">Back</label>
                </div>
                <div class="front">
                    <img class="menu_img"
                        src="assets/media/menu/drink.jpg"
                        alt="Chef's Specials">
                    <label class="next-btn" for="c10">Next</label>
                </div>
            </div>
            <div class="flip" id="p11">
                <div class="back">
                    <div class="menu-content">
                        <div class="category">Sandwiches & Salad</div>
                        
                        <div class="menu-items">
                            <div class="product">Hotdog Sandwich</div>
                            <div class="price">2.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Zinger Sandwich</div>
                            <div class="price">2.50 JD</div>
                        </div>
                        <div class="menu-items">
                            <div class="product">Salad</div>
                            <div class="price">2.00 JD</div>
                        </div>
                   
                        <br>
                        <br>
                        <br>
                        
                      
                    </div>
                    <label class="back-btn" for="c11">Back</label>
                </div>
                <div class="front">
                    <img class="menu_img"
                        src="assets/media/menu/drink.jpg"
                        alt="Chef's Specials">
                    <label class="next-btn" for="c11">Next</label>
                </div>
            </div>

            <div class="flip" id="p12">
                <div class="back">
                    <div class="menu-content" style="text-align: center; padding: 40px;">
                        <h2>Thank You!</h2>
                        <p>We hope you enjoyed browsing our menu. We look forward to serving you!</p>
                    </div>
                    <label class="back-btn" for="c12">Back</label>
                </div>
                <div class="front">
                    <img class="menu_img"
                        src="assets/media/menu/drink.jpg"
                        alt="Restaurant Interior">
                    <label class="next-btn" for="c12">Next</label>
                </div>
            </div>
        </div>
    </div>
@endsection