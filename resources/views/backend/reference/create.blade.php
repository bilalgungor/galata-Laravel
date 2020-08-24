@extends('backend.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Referans Ekle</h1>
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

            <form action="{{route('reference.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Ekle</h3>
                    </div>

                    <div class="card-body">
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Logo Seç</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="ref_file" id="file" required type="file">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="desc" class="col-sm-2 col-form-label">Firma</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="desc" type="text" name="ref_title">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="desc" class="col-sm-2 col-form-label">Url</label>
                            <div class="col-sm-10">
                                <input class="form-control" id="desc" type="text" name="ref_url">
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info float-right">Ekle</button>
                    </div>
                </div>
            </form>
        </section>
    </div>
@endsection

