@extends('backend.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Slider Ekle</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <form action="{{route('slider.update',$slider->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Ekle</h3>
                    </div>

                    <div class="card-body">
                                <div class="form-group">
                                    <label for="file" class="col-sm-2 col-form-label">Önizleme</label>
                                        <div class="col-sm-10">
                                            <img class="gallery" src="/images/slider/{{$slider->slider_file}}" alt="">
                                        </div>
                                </div>

                            <div class="form-group row">
                                <label for="file" class="col-sm-2 col-form-label">Slider Seç</label>
                                <div class="col-sm-10">
                                    <input class="form-control" name="slider_file" id="file" type="file">
                                </div>
                            </div>

                        <div class="form-group row">
                            <label for="desc" class="col-sm-2 col-form-label">Başlık - 1</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="desc" type="text" name="slider_title" value="{{$slider->slider_title}}">
                            </div>
                        </div>

                            <div class="form-group row">
                                <label for="desc" class="col-sm-2 col-form-label">Başlık - 2</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="desc" type="text" name="slider_title2" value="{{$slider->slider_title2}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="slug" class="col-sm-2 col-form-label">URL</label>
                                <div class="col-sm-10">
                                    <input class="form-control" id="slug" type="text" name="slider_slug" value="{{$slider->slider_slug}}">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="desc" class="col-sm-2 col-form-label">Durum</label>
                                <div class="col-sm-10">
                                    <input class="flat-red" type="radio" id="staff_status" name="slider_status" value="1" {{$slider->slider_status=="1" ? "checked=''" : ""}}>
                                    <label for="staff_status">
                                        Aktif
                                    </label>
                                    <input class="flat-red"  type="radio" id="staff_status1" name="slider_status" value="0" {{$slider->slider_status=="0" ? "checked=''" : ""}}>
                                    <label for="staff_status1">
                                        Pasif
                                    </label>
                                </div>
                            </div>
                        <input type="hidden" name="old_file" value="{{$slider->slider_file}}">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info float-right">Düzenle</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection

