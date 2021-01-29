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
                                <h3 class="panel-title">Data Mata Pelajaran</h3>
                                <div class="right">
                                    <a href="/xmapel/exportExcel" class="btn btn-sm btn-primary">Export Excel</a>
                                    <a href="/xmapel/exportPDF" class="btn btn-sm btn-danger">Export PDF</a>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                </div>
                                
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td>Mata Pelajaran</td>
                                            <td>Kelas</td>
                                            <td>Semester</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_xmapel as $xmapel)
                                        <tr>
                                            <td><a href="/xmapel/{{$xmapel->id}}/profile">{{$xmapel->nm_xmapel}}</a></td>
                                            <td>{{$xmapel->kelas}}</td> 
                                            <td>{{$xmapel->semester}}</td>
                                            <td>
                                                <a href="/xmapel/{{$xmapel->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/xmapel/{{$xmapel->id}}/delete" class="btn btn-danger btn-sm delete-xmapel" kode={{$xmapel->id}}>Delete</a>
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
                    <form action="xmapel/create" method="POST" enctype="multipart/form-data"> <!-- memanggil controller create-->
                        {{csrf_field()}}
                        <div class="form-group {{$errors->has('nm_xmapel') ? ' has-error' : ''}}">
                          <label for="exampleInputEmail1">Mata Pelajaran</label>
                          <input name ="nm_xmapel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Depan" value="{{old('nm_xmapel')}}">
                          @if ($errors->has('nm_xmapel'))
                              <span class="help-block">{{$errors->first('nm_xmapel')}}</span>
                          @endif
                        </div>

                        <div class="form-group {{$errors->has('kelas') ? ' has-error' : ''}}">
                            <label for="exampleFormControlSelect1">Kelas</label>
                            <select name ="kelas" class="form-control" id="exampleFormControlSelect1">
                              <option value="IA {{(old('kelas') == 'IA') ? 'selected' : ''}}">IA</option>
                              <option value="IB {{(old('kelas') == 'IB') ? 'selected' : ''}}">IB</option>
                              <option value="IIA {{(old('kelas') == 'IIA') ? 'selected' : ''}}">IIA</option>
                              <option value="IIB {{(old('kelas') == 'IIB') ? 'selected' : ''}}">IIB</option>
                              <option value="IIIB {{(old('kelas') == 'IIIA') ? 'selected' : ''}}">IIIA</option>
                              <option value="IIIB {{(old('kelas') == 'IIIB') ? 'selected' : ''}}">IIIB</option>
                              <option value="IV {{(old('kelas') == 'IV') ? 'selected' : ''}}">IV</option>
                              <option value="V {{(old('kelas') == 'V') ? 'selected' : ''}}">V</option>
                              <option value="VI {{(old('kelas') == 'VI') ? 'selected' : ''}}">VI</option>
                            </select>
                            @if ($errors->has('kelas'))
                                <span class="help-block">{{$errors->first('kelas')}}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Semester</label>
                            <input name ="semester" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Semester" value="{{old('semester')}}">
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
        $('.delete-xmapel').click(function(){
            var kode = $(this).attr('kode');
            swal({
                title: "Yakin  ? ",
                text: "Mau menghapus data mapel dengan id "+kode+" ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                console.log(willDelete);
                if (willDelete) {
                    window.location = "/xmapel/"+kode+"/delete";
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
        });
    </script>
@endsection