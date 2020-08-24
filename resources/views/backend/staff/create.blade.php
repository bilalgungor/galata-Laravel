@extends('backend.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Kadro</h1>
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
            <form action="{{route('staff.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Kadro Ekle</h3>
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Ad</label>
                            <div class="col-sm-10">
                                <input class="form-control"  type="text" name="staff_name" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alan</label>
                            <div class="col-sm-10">
                                <input class="form-control"  type="text" name="staff_title" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">İçerik</label>
                            <div class="col-sm-10">
                                <input class="form-control"  type="text" name="staff_content">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="desc" class="col-sm-2 col-form-label">Durum</label>
                            <div class="col-sm-10">
                                <input class="flat-red" type="radio" id="staff_role" name="staff_role" value="1" >
                                <label for="staff_role">
                                    Kurucu
                                </label>
                                <input class="flat-red"  type="radio" id="staff_role1" name="staff_role" value="0" checked >
                                <label for="staff_role1">
                                    Çalışan
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info float-right">Ekle</button>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

