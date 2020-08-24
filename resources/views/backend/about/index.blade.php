@extends('backend.layout')
@section('content')
    <div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Hakkımızda</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Blank Page</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>


        <section class="content">

            <form action="{{route('about.update',$data->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Düzenle</h3>
                </div>
                <div class="card-body">
                        @isset($data->about_file)
                                <div class="form-group">
                                    <label>Resim Önizleme</label>
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <img width="100" src="/images/about/{{$data->about_file}}" alt="">
                                        </div>
                                    </div>
                                </div>
                                @endisset
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Resim Seç</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="about_file" type="file">
                                        </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Başlık</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"  type="text" name="about_title" value="{{$data->about_title}}">
                                        </div>
                                </div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Twitter</label>
                                        <div class="col-sm-10">
                                            <input class="form-control"  type="text" name="about_twitter" value="{{$data->about_twitter}}">
                                        </div>
                                </div>


                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Facebook</label>
                            <div class="col-sm-10">
                                <input class="form-control"  type="text" name="about_facebook" value="{{$data->about_facebook}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Instagram</label>
                            <div class="col-sm-10">
                                <input class="form-control"  type="text" name="about_instagram" value="{{$data->about_instagram}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Linkendin</label>
                            <div class="col-sm-10">
                                <input class="form-control"  type="text" name="about_linkedin" value="{{$data->about_linkendin}}">
                            </div>
                        </div>


                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">İçerik</label>
                                        <div class="col-sm-10">
                                            <textarea class="form-control" id="editor1" name="about_content">{{$data->about_content}}</textarea>
                                            <script>
                                                CKEDITOR.replace( 'editor1' );
                                            </script>
                                        </div>
                                </div>


                                <input type="hidden" name="old_file" value="{{$data->about_file}}">




                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-info float-right">Kaydet</button>
                </div>
                <!-- /.card-footer-->
            </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
@endsection

