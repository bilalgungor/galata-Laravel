@extends('frontend.layout')
@section('content')
    <h1 style="display: none">{{$title}}</h1>
    <div class="slider-wrap">
        <div class="fullwidthbanner-container" >
            <div class="fullwidthbanner-4">
                <ul>
                    @foreach($data['slider'] as $slider )
                    <li data-transition="random" data-slotamount="7" data-masterspeed="300" data-thumb="/images/slider/{{$slider->slider_file}}"  data-saveperformance="off"  data-title="Slide1">

                        <img src="/images/slider/{{$slider->slider_file}}"  alt="bg"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">



                        <div class="tp-caption medi_slider4_slide1_t1white h1 sfl tp-resizeme"
                             data-x="0"
                             data-y="center" data-voffset="-33"
                             data-speed="800"
                             data-start="500"
                             data-easing="easeInOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;"><h1>{{$slider->slider_title2}}</h1>
                        </div>


                        <div class="tp-caption medi_slider4_slide1_t2white h1 sfr tp-resizeme"
                             data-x="0"
                             data-y="center" data-voffset="15"
                             data-speed="800"
                             data-start="1000"
                             data-easing="easeInOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;"><h1>{{$slider->slider_title}}</h1>
                        </div>


                        <div class="tp-caption sfb tp-resizeme"
                             data-x="0"
                             data-y="center" data-voffset="115"
                             data-speed="800"
                             data-start="1500"
                             data-easing="easeInOutExpo"
                             data-splitin="none"
                             data-splitout="none"
                             data-elementdelay="0.1"
                             data-endelementdelay="0.1"
                             data-endspeed="300"

                             style="z-index: 7; max-width: auto; max-height: auto; white-space: nowrap;"><a href='{{$slider->slider_slug}}' class='readon border white medium'>AYRINTILI BİLGİ</a>
                        </div>
                    </li>
                        @endforeach
                </ul>
            </div>
        </div>
    </div>

    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 acurate">
                    <div class="single-service1" style="background: {{$main_1_r}}">
                        <div class="service">
                            <div class="service-icon">
                                <i class="fa fa-calendar-o"></i>
                            </div>
                            <h2><a href="#">{{$main_1_title}}</a></h2>
                            <p>{{$main_1}}</p>
                        </div>
                        <div class="service-overley"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 acurate">
                    <div class="single-service2" style="background: {{$main_2_r}}">
                        <div class="service">
                            <div class="service-icon">
                                <i class="fa fa-user"></i>
                            </div>
                            <h2><a href="#">{{$main_2_title}}</a></h2>
                            <p>{{$main_2}}</p>
                        </div>
                        <div class="service-overley"></div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 acurate">
                    <div class="single-service3" style="background: {{$main_3_r}}">
                        <div class="service">
                            <div class="service-icon">
                                <i class="fa fa-object-ungroup"></i>
                            </div>
                            <h2><a href="#">{{$main_3_title}}</a></h2>
                            <p>{{$main_3}}</p>
                        </div>
                        <div class="service-overley"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>


    <div class="about-us-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about-us">
                        <h2>GALATA İHRACAT</h2>
                        <p>{!! $data->about_content !!}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="advertise-area">
        <a href="{{route('contact.Index')}}"><span>İlk danışmanlığınızı almak için</span> İletişime Geçin!</a>
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
                <div class="doctor-section">
                    @foreach($staff as $data)
                        @if($data->staff_role==0)
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
    <div class="testimonial-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="patient-testmonial">
                        @foreach($customer['customer'] as $data)
                        <div class="testimonial-content">
                            <h2>Müşteri Yorumları</h2>
                            <p>{!! $data->customer_content !!}</p>
                            <h4>{{$data->customer_name}}</h4>
                            <h6>{{$data->customer_title}}</h6>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="store-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h2>Blog & Haber</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="online-store">
                        @foreach($blog['blog'] as $data)
                    <div class="single-product-store">
                        <div class="single-product">
                            <a href="#"><img src="images/blog/{{$data->blog_file}}" alt="product"></a>
                            <div class="overlay"></div>
                        </div>
                        <div class="product-content">
                            <h2 class="name"><a href="{{route('blogDetail.Index',$data->blog_slug)}}">{{$data->blog_title}}</a></h2>
                            <span class="regular-price">
									<span class="new-price">{!! Str::limit($data->blog_content,70) !!}</span>
								</span>
                        </div>
                    </div>
                            @endforeach
                </div>
            </div>
        </div>
    </div>
    @isset($reference[0])
    <div class="our-client-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <h2>Refaranslarımız</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="client-logo">
                    @foreach($reference as $data)
                    <div class="single-logo">
                        <a href="@if($data->ref_url == null) # @else {{$data->ref_url}} @endif"><img src="/images/ref/{{$data->ref_file}}" alt="referans"></a>
                    </div>
                        @endforeach
                </div>
            </div>
        </div>
    </div>
    @endisset
    @endsection
