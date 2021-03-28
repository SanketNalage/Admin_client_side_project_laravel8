<!DOCTYPE html>
<html lang="en">
<head>
   @include('fronted.fheader')
</head>
<body>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img1">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title new-title pb-10">Blog</h1>
        <ul>
            <li>
                <a class="active" href="/">Home</a>
            </li>
            <li >Blog</li>
           </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

{{-- Start here coding of php --}}





<div id="rs-blog" class="rs-blog pt-108 pb-120 md-pt-70 md-pb-70">
        <div class="container">
            <div class="row">
                @foreach ($row as $item)
                <div class="col-lg-4 col-md-6 md-mb-25">
                    <div class="blog-item">
                        <div class="image-wrap">
                            <a href=""><img src="{{ asset('uploads/blog/'.$item->blog_img) }}" alt=""></a>
                            <ul class="post-categories">
                                <li><a href="inquiry">{{$item->blog_name}}</a></li>
                            </ul>
                        </div>
                        <div class="blog-content">
                           <ul class="blog-meta">
                               <li class="date"><i class="fa fa-calendar-check-o"></i>{{$item->created_at}}</li>
                               <li class="admin"><i class="fa fa-user-o"></i>Admin</li>
                           </ul>
                           <p class="desc">@php echo htmlspecialchars_decode($item->blog_description); @endphp</p>
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