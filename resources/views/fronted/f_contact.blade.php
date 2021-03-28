<!DOCTYPE html>
<html lang="en">
<head>
   @include('fronted.fheader')
</head>
<body>

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Contact Us</h1>
            <ul>
                <li title="Braintech - IT Solutions and Technology Startup HTML Template">
                    <a class="active" href="/">Home</a>
                </li>
                <li>Contact Us</li>                       
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    <div class="rs-contact pt-120 md-pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 md-mb-60">
                   <div class="contact-box">
                        <div class="sec-title mb-45">
                            <span class="sub-text new-text white-color">Let's Talk</span>
                            <h2 class="title white-color">Speak With Expert Engineers.</h2>
                        </div>
                       <div class="address-box mb-25">
                           <div class="address-icon">
                               <i class="fa fa-home"></i>
                           </div>
                           <div class="address-text">
                                <span class="label">Email:</span>
                                <a href="mailto:info@ajspire.com">info@ajspire.com</a>
                           </div>
                       </div>
                       <div class="address-box mb-25">
                           <div class="address-icon">
                               <i class="fa fa-phone"></i>
                           </div>
                           <div class="address-text">
                               <span class="label">Phone:</span>
                               <a href="tel:+919595775123">+91 9595775123 </a>
                           </div>
                       </div>
                       <div class="address-box">
                           <div class="address-icon">
                               <i class="fa fa-map-marker"></i>
                           </div>
                           <div class="address-text">
                               <span class="label">Address:</span>
                               <div class="desc"> Opp Hotel City Inn, MIDC, Baramati, Maharashtra.</div>
                           </div>
                       </div>
                   </div>
                </div> 
                <div class="col-lg-8 pl-70 md-pl-15">
                    <div class="contact-widget">
                       <div class="sec-title2 mb-40">
                           <span class="sub-text contact mb-15">Get In Touch</span>
                           <h2 class="title testi-title">Fill The Form Below</h2>

                       </div>
                        {{-- <div id="form-messages"></div> --}}
                        <form id="contact-form" method="post" action="insert_contact">
                            @csrf
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                    </div> 
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                    </div>   
                                
                                    <div class="col-lg-12 mb-30">
                                        <textarea class="from-control" id="message" name="comment" placeholder="Your message Here" required=""></textarea>
                                    </div>
                                </div>
                                <div class="btn-part">                                            
                                    <div class="form-group mb-0">
                                        <input class="readon learn-more submit" type="submit" value="Submit Now">
                                    </div>
                                </div> 
                            </fieldset>
                        </form> 
                    </div>
                </div>
            </div>
        </div>
        <div class="map-canvas pt-120 md-pt-80">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15162.941695246487!2d74.6038136!3d18.176098!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd5463f385bb99c10!2sAjspire%20Technologies%20Pvt.%20Ltd.!5e0!3m2!1sen!2sin!4v1616222391343!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div> 
    </div>
    <!-- Contact Section Start -->

    
    @include('fronted.ffooter')
</body>
</html>