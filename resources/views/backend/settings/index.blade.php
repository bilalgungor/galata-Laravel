@extends('backend.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Ayarlar</h1>
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
                    <h3 class="card-title">Site Ayarları</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive-md">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Başlık</th>
                            <th>İçerik</th>
                            <th style="width: 40px">Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cat1 as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->settings_description}}</td>
                                <td>{{$data->settings_value}}</td>
                                <td><a href="{{route('settings.edit',$data->id)}}" class="fa fa-edit"></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- /.card -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Logo</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive-md">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Başlık</th>
                            <th>İçerik</th>
                            <th style="width: 40px">Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cat2 as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->settings_description}}</td>
                                <td>{{$data->settings_value}}</td>
                                <td><a href="{{route('settings.edit',$data->id)}}" class="fa fa-edit"></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">İletişim Bilgileri</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive-md">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Başlık</th>
                            <th>İçerik</th>
                            <th style="width: 40px">Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cat3 as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->settings_description}}</td>
                            <td>{{$data->settings_value}}</td>
                            <td><a href="{{route('settings.edit',$data->id)}}" class="fa fa-edit"></a></td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Rusya İletişim Bilgileri</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive-md">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Başlık</th>
                            <th>İçerik</th>
                            <th style="width: 40px">Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cat6 as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->settings_description}}</td>
                                <td>{{$data->settings_value}}</td>
                                <td><a href="{{route('settings.edit',$data->id)}}" class="fa fa-edit"></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Footer(Tema Alt Bölümü)</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive-md">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Başlık</th>
                            <th>İçerik</th>
                            <th style="width: 40px">Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cat4 as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->settings_description}}</td>
                                <td>{{$data->settings_value}}</td>
                                <td><a href="{{route('settings.edit',$data->id)}}" class="fa fa-edit"></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Anasayfa 3'lü Yer</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                            <i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
                            <i class="fas fa-times"></i></button>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive-md">
                        <thead>
                        <tr>
                            <th style="width: 10px">#</th>
                            <th>Başlık</th>
                            <th>İçerik</th>
                            <th style="width: 40px">Düzenle</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($cat7 as $data)
                            <tr>
                                <td>{{$data->id}}</td>
                                <td>{{$data->settings_description}}</td>
                                <td>{{$data->settings_value}}</td>
                                <td><a href="{{route('settings.edit',$data->id)}}" class="fa fa-edit"></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

