@extends('backend.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Hizmetler</h1>
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
            <form action="{{route('service.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Hizmet Ekle</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Fotoğraf Seç</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="page_file" id="file" type="file">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Başlık</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="page_title" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Slug</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="page_slug" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="desc" class="col-sm-2 col-form-label">Durum</label>
                            <div class="col-sm-10">
                                <input class="flat-red" type="radio" id="page_status" name="page_status" value="1" checked>
                                <label for="page_status">
                                    Aktif
                                </label>
                                <input class="flat-red"  type="radio" id="page_status1" name="page_status" value="0" >
                                <label for="page_status1">
                                    Pasif
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="desc" class="col-sm-2 col-form-label">Kategori</label>
                            <div class="col-sm-10">
                                <input class="flat-red" type="radio" id="page_category" name="page_category" value="1">
                                <label for="page_category">
                                    İthalat
                                </label>
                                <input class="flat-red"  type="radio" id="page_category1" name="page_category" value="0" >
                                <label for="page_category1">
                                    İhracat
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Sayfa Sırası</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="page_must">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Yazı</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="editor1" name="page_content"></textarea>
                                <script>
                                    CKEDITOR.replace( 'editor1' );
                                </script>
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

