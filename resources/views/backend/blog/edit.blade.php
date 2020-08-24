@extends('backend.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blog</h1>
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
            <form action="{{route('blog.update',$blog->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Blog Ekle</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="file" class="col-sm-2 col-form-label">Önizleme</label>
                            <div class="col-sm-10">
                                <img class="gallery" src="/images/blog/{{$blog->blog_file}}" alt="">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="file" class="col-sm-2 col-form-label">Fotoğraf Seç</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="blog_file" id="file" type="file">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Başlık</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="blog_title" value="{{$blog->blog_title}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Slug</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="blog_slug" value="{{$blog->blog_slug}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="desc" class="col-sm-2 col-form-label">Durum</label>
                            <div class="col-sm-10">
                                <input class="flat-red" type="radio" id="blog_status" name="blog_status" value="1" {{$blog->blog_status=="1" ? "checked=''" : ""}}>
                                <label for="blog_status">
                                    Aktif
                                </label>
                                <input class="flat-red"  type="radio" id="blog_status1" name="blog_status" value="0" {{$blog->blog_status=="0" ? "checked=''" : ""}}>
                                <label for="blog_status1">
                                    Pasif
                                </label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Yazı</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" id="editor1" name="blog_content">{{$blog->blog_content}}</textarea>
                                <script>
                                    CKEDITOR.replace( 'editor1' );
                                </script>
                            </div>
                        </div>
                        <input type="hidden" name="old_file" value="{{$blog->blog_file}}">
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-info float-right">Düzenle</button>
                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection

