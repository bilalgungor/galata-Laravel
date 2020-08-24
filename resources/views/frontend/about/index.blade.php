@extends('frontend.layout')
@section('content')
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="banner">
                        <h2>HAKKIMIZDA</h2>
                        <ul class="breadcrumb-area">
                            <li><a href="{{route('default.Index')}}">Anasayfa</a></li>
                            <li>{{$about->about_title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Welcome About Us Area Start -->
    <div class="about-us-welcome-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="about-us-text about-us2-title">
                        <h2>{{$about->about_title}}</h2>
                        <p>{!! $about->about_content !!}</p>

                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="about-us-featured-slider">
                        <div class="slider-image">
                            <a href="#"><img src="/images/about/{{$about->about_file}}" alt=""></a>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




    <div class="our-doctor-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h2>Kurucularımız</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="doctor-section">
                    @foreach($staff as $data)
                        @if($data->staff_role==1)
                            <div class="single-doctor-area">
                                <div class="media">
                                    <div class="media-body doctor-content">
                                        <h2 class="media-heading"><a href="#">{{$data->staff_name}}</a></h2>
                                        <h4 class="designation">{{$data->staff_title}}</h4>
                                        <p>{{$data->staff_content}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>

@endsection
