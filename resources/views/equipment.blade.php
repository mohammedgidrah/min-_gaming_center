@extends('index')
@section('title', 'Equipment')
@section('content')

    <!-- Header Area end -->

    <!-- Hero Slider start -->

    <!-- Main Content Start -->
    <div class="page-content" id="equipment-padding">

        <section id="equipment">
            <div class="container">
                <div class="heading">
                    <h2>equipment</h2>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                        <a class="blog-card">
                            <div class="category-block">
                                <img src="assets/media/shapes/blog-vector.png" alt=""
                                    style="padding-bottom: 2px" />
                                <h5 class="c-title">Keyboard</h5>
                            </div>
                            <div class="img-block" id="img">
                                <img src="assets/media/equpments/keybord.jpg" alt="" />
                                <div class="overlay"></div>
                        
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                        <a class="blog-card">
                            <div class="category-block">
                                <img src="assets/media/shapes/blog-vector.png" alt=""
                                    style="padding-bottom: 2px" />
                                <h5 class="c-title">pc</h5>
                            </div>
                            <div class="img-block" id="img">
                                <img src="assets/media/equpments/pccace.jpg" alt="" />
                                <div class="overlay"></div>
                           
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                        <a class="blog-card">
                            <div class="category-block">
                                <img src="assets/media/shapes/blog-vector.png" alt=""
                                    style="padding-bottom: 2px" />
                                <h5 class="c-title">controller</h5>
                            </div>
                            <div class="img-block" id="img">
                                <img src="assets/media/equpments/playstation.jpg" alt="" />
                                <div class="overlay"></div>
                          
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6 mb-30">
                        <a class="blog-card">
                            <div class="category-block">
                                <img src="assets/media/shapes/blog-vector.png" alt=""
                                    style="padding-bottom: 2px" />
                                <h5 class="c-title">racing wheel</h5>
                            </div>
                            <div class="img-block" id="img">
                                <img src="assets/media/equpments/steringwhell.jpg" alt="" />
                                <div class="overlay"></div>
                        
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Main Content End -->

    <!-- Footer Area Start  -->

@endsection

<style>
/* Ensure all cards have uniform height and width */
.blog-card {
    display: block;
    height: 100%;
    min-height: 350px; /* Set minimum height for consistency */
}

#img {
    height: 250px; /* Fixed height for image blocks */
    overflow: hidden;
}

#img img {
    width: 100%;
    height: 100%;
    object-fit: cover; /* Ensures images fill the container while maintaining aspect ratio */
}

 
 
 
 
</style>