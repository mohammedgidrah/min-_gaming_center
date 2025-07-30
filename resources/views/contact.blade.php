 @extends('index')
 @section('title', 'Contact')
 @section('content')

 

        <!-- Main Content Start -->
        <div class="page-content" id="contact_page">

            <!-- Contact Area Start -->
            <section class="contact p-40" >
                <div class="container">
                    <h3 class="mb-32">Let's Get in Touch</h3>
                    <div class="row pb-40">
                        <div class="col-lg-4">
                            <div class="link-block mb-32 mb-lg-0">
                                <i class="fal fa-map-marker-alt"></i>
                                <h6>123 Main Street, Anytown, USA.</h6>
                            </div>
                         </div>
                        <div class="col-lg-4">
                            <a href="tel:0123456789" class="link-block mb-32 mb-lg-0">
                                <i class="fal fa-phone-alt"></i>
                                <span>+962771999994</span>
                            </a>
                         </div>
                        <div class="col-lg-4">
                            <a href="mailto:info@example.com" class="link-block mb-32 mb-lg-0">
                                <i class="fal fa-envelope"></i>
                                <span>INFO@MINESGAMINGCENTER.COM</span>
                            </a>
                         </div>
                    </div>
             <div class="contact-form-block pt-40">
    <div class="row">
        <div class="col-xl-6 col-lg-8 col-md-10 offset-xl-3 offset-lg-2 offset-md-1">
            <h3 class="mb-32">Contact Form</h3>

            @if(session('success'))
                <div class="alert alert-success text-center mb-4">
                    {{ session('success') }}
                </div>
            @endif

            <form  action="{{ route('contact.send') }}" method="post" class="contact-form form-validator" >
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="mb-24">
                            <input type="text" class="form-control" id="name" name="name" required placeholder="Your Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="mb-24">
                            <input type="email" class="form-control" id="email" name="email" required placeholder=" Your Email">
                        </div>
                    </div>
                </div>
                <div class="mb-24">
                    <input type="text" class="form-control" id="phone-number" name="phone-number" required placeholder="Phone Number">
                </div>
                <div class="mb-24">
                    <textarea class="form-control" rows="4" id="detail-message" name="message" required placeholder="Write your message here"></textarea>
                </div>
                <button type="submit" class="cus-btn primary b-unstyle w-100">Send Message</button>
                <!-- Alert Message -->
                <div id="alert-message" class="alert-msg"></div>
            </form>
        </div>
    </div>
</div>

                </div>
            </section>
            <!-- Contact Area End -->

        </div>

        <!-- Main Content End -->

 @endsection