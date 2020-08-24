@extends('frontend.layout')
@section('content')
    <div class="banner-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="banner">
                        <h2>{{$blog->blog_title}}</h2>
                        <ul class="breadcrumb-area">
                            <li><a href="{{route('default.Index')}}">Anasayfa</a></li>
                            <li><a href="{{route('blog.Index')}}">Blog</a></li>
                            <li>{{$blog->blog_title}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="total-blog-area border-hover">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                    <div class="single-blog-post">
                        <div class="blog-image">
                            <a href="javascript:void(0)"><img src="/images/blog/{{$blog->blog_file}}" alt="blog"></a>
                        </div>
                        <h2><a href="javascript:void(0)">{{$blog->blog_title}}</a></h2>

                        <div class="post-info single-blog-post">
                            <ul>
                                <li><a href="#"><i class="fa fa-user"></i> Yazar: Admin</a> </li>
                                <li class="right shareby"><p>Yazıyı Paylaş <i class="fa fa-angle-double-right"></i></p>
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <p>{!! $blog->blog_content !!}</p>
                    </div>

                </div>
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                    <div class="blog-sidebar-area">
                        <div class="single-sidebar">
                            <h2>Son Yazılar</h2>
                            <div class="sidebar-recent-post">
                                @foreach($data['blog'] as $blog)
                                    <div class="media single-post">
                                        <div class="pull-left">
                                            <a href="{{route('blogDetail.Index',$blog->blog_slug)}}">
                                                <img class="media-object" src="/images/blog/{{$blog->blog_file}}" alt="post">
                                            </a>
                                        </div>
                                        <div class="media-body">
                                            <h4 class="media-heading"><a href="{{route('blogDetail.Index',$blog->blog_slug)}}">{{$blog->blog_title,$blog->blog_slug}}</a></h4>
                                            <p>{!! Str::limit($blog->blog_content,40) !!}</p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
