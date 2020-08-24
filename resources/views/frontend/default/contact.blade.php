@extends('frontend.layout')
@section('content')
    <div class="wrapper doctor-appointment contact-us">
        <!-- Banner Area Start -->
        <div class="banner-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="banner">
                            <h2>İletişim</h2>
                            <ul class="breadcrumb-area">
                                <li><a href="{{route('default.Index')}}">Anasayfa</a></li>
                                <li>İletişim</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Banner Area End -->

        <div class="make-appointment-area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="appointment-form first-part">
                            <h2>İletişim</h2>
                            @if(session()->has('success'))
                                <div class="alert alert-success">
                                    <p>{{session('success')}}</p>
                                </div>
                            @endif
                            @if($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form method="post">
                                @csrf
                                <fieldset>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="name" placeholder="Ad*" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="mail" placeholder="E-Posta*" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="tel" class="form-control" name="phone" placeholder="Telefon*">
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" name="subject" placeholder="Konu*" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <textarea cols="40" rows="5" class="textarea form-control" name="message" placeholder="Mesajınız" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button class="btn-send appointment-buttom" type="submit">GÖNDER</button>
                                        </div>
                                    </div>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <div class="appointment-form">
                            <h2>Merkez Ofis</h2>
                            <div class="office-adress">
                                <h2>Galata İhracat & Danışmanlık</h2>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i><span>{{$adres}}</span></li>
                                    <li><i class="fa fa-phone"></i><span>{{$phone_gsm}}</span></li>
                                    @if($phone_sabit != null) <li><i class="fa fa-phone"></i><span>{{$phone_gsm}} (Sabit Telefon)</span></li> @endif
                                    <li><a href="#"><i class="fa fa-envelope-o"></i> <span>{{$mail}}</span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Doctor Appointment Area End -->
        <div class="contact-us-buttom">
            <div class="container">
                <div class="row">
                    <h2>Ofislerimiz:</h2>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="office-adress">
                            <h2><i class="fa fa-map-marker"></i>Rusya</h2>
                            <ul>
                                <li>{!! $r_adres !!}</li>
                                <li><i class="fa fa-phone"></i><span>{{$r_phone_gsm}}</span></li>
                                @if($r_phone_sabit != null) <li><i class="fa fa-phone"></i><span>{{$r_phone_gsm}} (Sabit Telefon)</span></li> @endif
                                <li><a href="#"><i class="fa fa-envelope-o"></i> <span>{{$r_mail}}</span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="office-adress">
                            <h2><i class="fa fa-map-marker"></i>Türkiye</h2>
                            <ul>
                                <li>{!! $adres !!}</li>
                                <li><i class="fa fa-phone"></i><span>{{$phone_gsm}}</span></li>
                                @if($phone_sabit != null) <li><i class="fa fa-phone"></i><span>{{$phone_gsm}} (Sabit Telefon)</span></li> @endif
                                <li><a href="#"><i class="fa fa-envelope-o"></i> <span>{{$mail}}</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Client Area Start -->
        @isset($reference[0])
        <div class="our-client-area">
            <div class="container">
                <div class="row">
                    <div class="client-logo">
                        <div class="single-logo">
                            <a href="#"><img src="/frontend/img/client/referans-png-5.png" alt=""></a>
                        </div>
                        <div class="single-logo">
                            <a href="#"><img src="/frontend/img/client/referans-png-5.png" alt=""></a>
                        </div>
                        <div class="single-logo">
                            <a href="#"><img src="/frontend/img/client/referans-png-5.png" alt=""></a>
                        </div>
                        <div class="single-logo">
                            <a href="#"><img src="/frontend/img/client/referans-png-5.png" alt=""></a>
                        </div>
                        <div class="single-logo">
                            <a href="#"><img src="/frontend/img/client/referans-png-5.png" alt=""></a>
                        </div>
                        <div class="single-logo">
                            <a href="#"><img src="/frontend/img/client/referans-png-5.png" alt=""></a>
                        </div>
                        <div class="single-logo">
                            <a href="#"><img src="/frontend/img/client/referans-png-5.png" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endisset
    </div>
@endsection
