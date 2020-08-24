@extends('frontend.layout')
@section('content')
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="banner">
                        <h2>Referanslar</h2>
                        <ul class="breadcrumb-area">
                            <li><a href="{{route('default.Index')}}">Anasayfa</a></li>
                            <li>Referanslar</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <h2>Refaranslarımız</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="our-doctor-area">
        <div class="container">
            <div class="row">
                @foreach($reference as $data)
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="single-logo">
                        <a href="@if($data->ref_url == null) # @else {{$data->ref_url}} @endif"><img src="/images/ref/{{$data->ref_file}}" alt="referans"></a>
                    </div>
                </div>
                    @endforeach
            </div>
        </div>
    </div>


@endsection
