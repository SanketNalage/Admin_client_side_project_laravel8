<!DOCTYPE html>
<html lang="en">
<head>
   @include('fronted.fheader')
</head>
<body>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img2">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title">Client Feedback</h1>
        <ul>
            <li>
                <a class="active" href="/">Home</a>
            </li>
            <li>Client Feedback</li>
        </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

{{-- Start here coding of php --}}





<div class="rs-testimonial style3 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                @foreach ($row as $item)
                <div class="col-lg-4 col-md-6 md-mb-25">
                    <div class="testi-item">
                        <div class="author-desc">                                
                            <div class="desc"><img class="quote" src="{{asset('user/images/testimonial/main-home/quote-white.png')}}" alt="">@php echo htmlspecialchars_decode($item->client_description); @endphp</div>
                        </div>
                        <div class="testi-content">
                            <div class="images-wrap">
                                <img src="{{ asset('uploads/client/'.$item->client_img) }}" alt="">
                            </div>
                            <a class="name" href="feedback">{{$item->client_name}}</a>
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