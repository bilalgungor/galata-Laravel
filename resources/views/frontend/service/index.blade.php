@extends('frontend.layout')
@section('content')
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="banner">
                        <h2>{{$service->page_title}}</h2>
                        <ul class="breadcrumb-area">
                            <li><a href="{{route('default.Index')}}">Anasayfa</a></li>
                            <li>{{$service->page_category==1 ? "İthalat" : "İhracat"}}</li>
                            <li>{{$service->page_title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner Area End -->
    <!-- Blog Area Start -->
    <div class="total-blog-area border-hover">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="single-blog-post">
                        @isset($service->page_file)
                        <div class="blog-image">
                            <img src="/frontend/img/service/{{$service->page_file}}" alt="{{$service->page_title}}">
                        </div>
                        @endisset
                        <h2><a href="javascript:void(0)">{{$service->page_title}}</a></h2>


                        <p>{!! $service->page_content !!}</p>

                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="blog-sidebar-area">
                        <div class="single-sidebar">
                            <h2>Diğer Hizmetler</h2>
                            <div class="sidebar-recent-post">
                                <div class="media single-post">
                                    <div class="media-body">
                                        @foreach($page as $service)

                                        <h4 class="media-heading">
                                            <li> <a href="{{route('service.Index',$service->page_slug)}}">{{$service->page_title}}</a> </li>
                                        </h4>

                                            @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endsection
