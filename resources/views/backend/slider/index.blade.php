@extends('backend.layout')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Slider</h1>
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
                    <a href="{{route('slider.create')}}"><button class="btn btn-primary float-right"><i class="fa fa-plus-square"></i> Slider Ekle</button></a>
                </div>

                    <div class="card-body">
                        <table id="gallery_table" class="table table-striped">
                            <thead>
                            <tr>
                                <th>Fotoğraf</th>
                                <th>Başlık 1</th>
                                <th>Başlık 2</th>
                                <th>Durum</th>
                                <th style="width: 40px">Düzenle</th>
                                <th style="width: 40px">Sil</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data['slider'] as $data)
                                <tr id="item-{{$data->id}}">
                                    <td><img src="/images/slider/{{$data->slider_file}}" alt=""></td>
                                    <td style="vertical-align: middle">{{$data->slider_title}}</td>
                                    <td style="vertical-align: middle">{{$data->slider_title2}}</td>
                                    @if($data->slider_status==1)
                                        <td >Aktif <i class="dot-green"></i></td>
                                    @else
                                        <td>Pasif <i class="dot-red"></i></td>
                                    @endif
                                    <td><a href="{{route('slider.edit',$data->id)}}"><button class="btn btn-primary fa fa-edit"></button></a></td>
                                    <td>
                                        <a href="javascript:void(0)"><i id="@php echo $data->id @endphp" class="btn btn-danger fa fa-trash"></i></a>
                                    </td>

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
                            url:"slider/"+destroy_id,
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

