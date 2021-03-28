<!DOCTYPE html>
<html lang="en">
<head>
   @include('fronted.fheader')
</head>
<body>
    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img1">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">About</h1>
            <ul>
                <li>
                    <a class="active" href="/">Home</a>
                </li>
                <li>About</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div class="rs-about gray-color pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 md-mb-30">
                    <div class="rs-animation-shape">
                        <div class="images">
                           <img src="{{ asset('user/images/about/about-3.png')}}" alt=""> 
                        </div>
                        <div class="middle-image2">
                          <img class="top dance" src="{{asset('user/images/about/dotted-3.png')}}" alt="">
                          
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 pl-60 md-pl-15">
                    <div class="contact-wrap">
                        <div class="sec-title mb-30">
                            <div class="sub-text style-bg">About Us</div>
                            <h2 class="title pb-38">
                                We Are Increasing Business Success With Technology
                            </h2>
                            <div class="desc pb-35">
                               Over 7 years working in IT services developing software applications and mobile apps for clients all over the world.
                            </div>
                            <p class="margin-0 pb-15">
                                Ajspire Technologies Pvt. Ltd. is a proficient Software development company established in Phaltan & Baramati. We imparts a great numbers of IT services based on web designing and development. Till now, we have a huge quantity of effective projects to be delivered. Ajspire Technologies mainly considers on distinctive IT Solutions which including custom Website Design and Development services that assist you to enhance your business.

                                Our first priority is to give quality services to the clients all over the globe on the basis of long term relationship. Aspire Pvt. Ltd imparting splendid services in distinctive fields such as Web Designing, Web Development and customize software development ,Android development , Digital Marketing , Logo Design and much more. We believes in providing unique,wonderful and superb web solutions, that gives us a positive testimonial from our clients.</p>
                        </div>
                        <div class="btn-part">
                            <a class="readon learn-more" href="contactus">Learn-More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-image">
                <img class="top dance" src="{{asset('user/images/about/dotted-3.png')}}" alt="">
                <img class="bottom dance" src="{{asset('user/images/about/shape3.png')}}" alt=""></div>
        </div>
    </div>
    <!-- About Section End -->

    
@include('fronted.ffooter')
</body>
</html>