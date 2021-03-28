<!DOCTYPE html>
<html lang="en">
<head>
   @include('fronted.fheader')
</head>
<body>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img4">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title new-title pb-10">Inquiry</h1>
        <ul>
            <li>
                <a class="active" href="/">Home</a>
            </li>
            <li >Inquiry</li>
           </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

<div class="rs-video-wrap md-pt-80">
    <div class="container">
        <div class="row margin-0">
            <div class="col-lg-6 padding-0">
                <div class="video-item">
                    <div class="rs-videos">
                        <div class="animate-border main-home style2">
                            <a class="popup-border popup-videos" href="https://www.youtube.com/watch?v=YLN1Argi7ik">
                                <i class="fa fa-play"></i>
                            </a>
                        </div>
                    </div> 
                </div>
            </div>
            <div class="col-lg-6 padding-0">
                <div class="rs-requset">
                    <div class="sec-title2 mb-33">
                        <span class="sub-text style-bg">Query</span>
                        <h2 class="title testi-title">
                           Request Free Consultation
                        </h2>
                    </div>
                    {{-- <div id="form-messages"></div> --}}
                    <form action="insert_inquiry" method="post">
                        @csrf
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-6 mb-25 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="name" name="name" placeholder="Name" required="">
                                </div> 
                                <div class="col-lg-6 mb-25 col-md-6 col-sm-6">
                                    <input class="from-control" type="text" id="email" name="email" placeholder="E-Mail" required="">
                                </div>  
                                <div class="col-lg-12 mb-25 col-md-12 col-sm-12">
                                    <select name="pro_id" class="from-control">
                                        @php
                                            $data = Illuminate\Support\Facades\DB::select("select * from products");
                                        @endphp
                                        @foreach ($data as $item)
                                            <option value="{{$item->product_id}}">{{$item->product_name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                          
                                <div class="col-lg-12 mb-35">
                                    <textarea class="from-control" id="message" name="inquiry" placeholder="Your message Here" required=""></textarea>
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
</div>
<!-- Video Section End -->



@include('fronted.ffooter')
</body>
</html>