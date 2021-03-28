<!DOCTYPE html>
<html lang="en">
<head>
   @include('fronted.fheader')
</head>
<body>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img2">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Product</h1>
        <ul>
            <li>
                <a class="active" href="/">Home</a>
            </li>
            <li>Product</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

{{-- Start here coding of php --}}





<div class="rs-services style2 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                @foreach ($row as $item)
                <div class="col-lg-4 col-md-6 md-mb-25">
                   <div class="flip-box-inner">
                        <div class="flip-box-wrap">
                            <div class="front-part">
                               <div class="front-content-part">
                                    <div class="front-icon-part">
                                        <div class="icon-part">
                                            <img src="{{ asset('uploads/product/'.$item->product_img) }}" alt="image not found" width="50px"> 
                                        </div>
                                    </div>
                                    <div class="front-title-part">
                                        <h3 class="title"><a href="cloud-and-devops.html">{{$item->product_name}}</a></h3>
                                    </div>
                                    <div class="front-desc-part">
                                        <p>@php echo htmlspecialchars_decode($item->product_description); @endphp</p>
                                    </div>
                                </div>
                            </div>
                            <div class="back-front">
                                <div class="back-front-content">
                                    <div class="back-title-part">
                                        <h3 class="back-title">{{$item->product_name}}</h3>
                                    </div>
                                    <div class="back-desc-part">
                                        <p class="back-desc">@php echo htmlspecialchars_decode($item->product_description); @endphp</p>  </div>
                                    <div class="back-btn-part">
                                        <a class="readon view-more" href="/inquiry">Get In Touch</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                   </div> 
                </div>
                @endforeach
            </div>
        </div>
    </div>
    






{{--End of coding php --}}

@include('fronted.ffooter')
</body>
</html>