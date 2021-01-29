<!-- views -> guru -> index.blade.php -->
@extends('layouts.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Guru</h3>
                                <div class="right">
                                    <a href="/xguru/exportExcel" class="btn btn-sm btn-primary">Export Excel</a>
                                    <a href="/xguru/exportPDF" class="btn btn-sm btn-danger">Export PDF</a>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                </div>
                                
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td>Nama Guru</td>
                                            <td>Alamat</td>
                                            <td>Telp</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_xguru as $xguru)
                                        <tr>
                                            <td><a href="/xguru/{{$xguru->id}}/profile">{{$xguru->nm_xguru}}</a></td>
                                            <td>{{$xguru->alamat}}</td> 
                                            <td>{{$xguru->telp}}</td>
                                            <td>
                                                <a href="/xguru/{{$xguru->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/xguru/{{$xguru->id}}/delete" class="btn btn-danger btn-sm delete-xguru" kd_xguru={{$xguru->id}}>Delete</a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="xguru/create" method="POST" enctype="multipart/form-data"> <!-- memanggil controller create-->
                        {{csrf_field()}}
                        <div class="form-group {{$errors->has('nm_xguru') ? ' has-error' : ''}}">
                          <label for="exampleInputEmail1">Nama Guru</label>
                          <input name ="nm_xguru" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{old('nm_xguru')}}">
                          @if ($errors->has('nm_xguru'))
                              <span class="help-block">{{$errors->first('nm_xguru')}}</span>
                          @endif
                        </div>

                        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            <label for="exampleInputEmail1">Email</label>
                            <input name ="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <span class="help-block">{{$errors->first('email')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name ="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('alamat')}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Telp</label>
                            <input name ="telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telp" value="{{old('telp')}}">
                        </div>

                        <!--Input Avatar-->
                        <div class="form-group {{$errors->has('avatar_') ? ' has-error' : ''}}">
                            <label for="exampleFormControlTextarea1">Avatar</label>
                            <input type="file" name="avatar" class="form-control">
                            @if ($errors->has('avatar_'))
                                <span class="help-block">{{$errors->first('avatar_')}}</span>
                            @endif
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@stop

@section('footer')
    <script>
        //Hapus Data Siswa Dengan Tampilan Sweet Alert
        $('.delete-xguru').click(function(){
            var kd_xguru = $(this).attr('kd-xguru');
            swal({
                title: "Yakin  ? ",
                text: "Mau menghapus data guru dengan id "+kd_xguru+" ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                console.log(willDelete);
                if (willDelete) {
                    window.location = "/xguru/"+kd_xguru+"/delete";
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
        });
    </script>
@endsection