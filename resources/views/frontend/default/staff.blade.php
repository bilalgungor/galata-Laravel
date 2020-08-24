@extends('frontend.layout')
@section('content')
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="banner">
                        <h2>Ekip</h2>
                        <ul class="breadcrumb-area">
                            <li><a href="{{route('default.Index')}}">Anasayfa</a></li>
                            <li>Kadromuz</li>
                        </ul>
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
                @foreach($staff as $data)
                    @if($data->staff_role==1)
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="our-single-doctor-area">
                        <div class="media">
                            <div class="media-body doctor-content">
                                <h2 class="media-heading"><a href="#">{{$data->staff_name}}</a></h2>
                                <h4 class="designation">{{$data->staff_title}}</h4>
                                <p>{{$data->staff_content}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <div class="our-doctor-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h2>Kadromuz</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($staff as $data)
                    @if($data->staff_role==0)
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="our-single-doctor-area">
                                <div class="media">
                                    <div class="media-body doctor-content">
                                        <h2 class="media-heading"><a href="#">{{$data->staff_name}}</a></h2>
                                        <h4 class="designation">{{$data->staff_title}}</h4>
                                        <p>{{$data->staff_content}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
