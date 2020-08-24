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

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Kadro</h3>
                    <a href="{{route('staff.create')}}"><button class="btn btn-primary float-right"><i class="fa fa-plus-square"></i> Yeni Ekle</button></a>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-responsive-md">
                        <thead>
                        <tr>
                            <th>Ad</th>
                            <th>Alan</th>
                            <th>İçerik</th>
                            <th>Rol</th>
                            <th style="width: 40px">Düzenle</th>
                            <th style="width: 40px">Sil</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($staff as $data)
                            <tr id="item-{{$data->id}}">
                                <td>{{$data->staff_name}}</td>
                                <td>{{$data->staff_title}}</td>
                                <td>{{$data->staff_content}}</td>
                                <td>{{$data->staff_role}}</td>
                                <td><a href="{{route('staff.edit',$data->id)}}" class="fa fa-edit"></a></td>
                                <td><a href="javascript:void(0)"><i id="@php echo $data->id @endphp" class="btn btn-danger fa fa-trash"></i></a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
    <script type="text/javascript">

        $(function () {
            $.ajaxSetup({
                headers:{
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            $(".fa-trash").click(function () {
                destroy_id=$(this).attr('id');

                alertify.confirm('Silmek İstiyor musunuz?','Bu işlem geri alınamaz',
                    function ()
                    {
                        $.ajax({
                            type:"DELETE",
                            url:"staff/"+destroy_id,
                            success: function (msg) {
                                if(msg)
                                {
                                    $("#item-"+destroy_id).remove();
                                    alertify.success('Başarıyla Silindi')
                                }
                                else
                                {
                                    alertify.error('Silme işlemi başarısız')
                                }
                            }
                        });
                    },
                    function ()
                    {
                        alertify.error('Silme işlemi iptal edildi')
                    }
                )
            });
        });
    </script>
@endsection

