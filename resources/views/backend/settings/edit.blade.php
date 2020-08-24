@extends('backend.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{$settings['settings_description']}}</h1>
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

            <!-- Default box -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Düzenle</h3>


                </div>
                <form class="form-horizontal" action="{{route('settings.update',$settings->id)}}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="desc" class="col-sm-2 col-form-label">Açıklama</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="desc" value="{{$settings['settings_description']}}" readonly>
                            </div>
                        </div>
                        @if($settings['settings_type']=='file')
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Logo</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="settings_value" id="file" required type="file">
                            </div>
                        </div>
                        @endif
                        <div class="form-group row">
                            @csrf
                            @if($settings['settings_type']!='file')
                                <label for="value" class="col-sm-2 col-form-label">İçerik</label>
                            @endif
                                    @if($settings['settings_type']=='text')
                                <div class="col-sm-10">
                                        <input class="form-control" type="text" name="settings_value" id="value" value="{{$settings['settings_value']}}">
                                </div>
                                    @endif
                                    @if($settings['settings_type']=='textarea')
                                        <div class="col-sm-10">
                                        <textarea class="form-control" name="settings_value">{{$settings['settings_value']}}</textarea>
                                        </div>
                                    @endif
                                    @if($settings['settings_type']=='ckeditor')
                                                <div class="col-sm-10">
                                        <textarea class="form-control" id="editor1" name="settings_value">{{$settings['settings_value']}}</textarea>
                                                </div>
                                    @endif

                                    @if($settings['settings_type']=='file')
                                        <div class="col-sm-10">
                                        <img width="150px" height="150px" src="/images/settings/{{$settings['settings_value']}}" alt="">
                                        </div>
                                    @endif
                                    <script>
                                        CKEDITOR.replace( 'editor1' );
                                    </script>

                            @if($settings['settings_type']=='file')
                                <input type="hidden" name="old_file" value="{{$settings['settings_value']}}">
                            @endif


                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info float-right">Kaydet</button>
                    </div>
                    <!-- /.card-footer -->
                </form>
            </div>
            <!-- /.card -->


        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

