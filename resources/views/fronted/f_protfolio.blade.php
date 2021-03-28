<!DOCTYPE html>
<html lang="en">
<head>
   @include('fronted.fheader')
</head>
<body>
<!-- Breadcrumbs Start -->
<div class="rs-breadcrumbs img4">
    <div class="breadcrumbs-inner text-center">
        <h1 class="page-title new-title pb-10">Protofolio</h1>
        <ul>
            <li>
                <a class="active" href="/">Home</a>
            </li>
            <li >Protofolio</li>
           </ul>
    </div>
</div>
<!-- Breadcrumbs End -->

{{-- Start here coding of php --}}



<div class="rs-project bg4 style2 pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row">
                @foreach ($row as $item)
                <div class="col-lg-4 col-md-6 md-mb-25" style="margin-bottom: 20px">
                    <div class="project-item">
                        <div class="project-img">
                            <a href="#"><img src="{{ asset('uploads/portfolio/'.$item->portfolio_img) }}" alt="image not found"></a>
                        </div>
                        <a href="inquiry">
                        <div class="project-content ">
                            <div class="vertical-middle">
                                <div class="vertical-middle-cell">
                                    <h3 class="title">{{$item->portfolio_name}}</h3>
                                    {{-- <span class="category">@php echo htmlspecialchars_decode($item->portfolio_description) @endphp</span> --}}
                                </div>
                            </div>
                        </div></a>
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