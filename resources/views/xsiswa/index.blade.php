<!-- views -> siswa -> index.blade.php -->
@extends('layouts.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title">Data Siswa</h3>
                                <div class="right">
                                    <a href="/xsiswa/exportExcel" class="btn btn-sm btn-success">Export Excel</a>
                                    <a href="/xsiswa/exportPDF" class="btn btn-sm btn-danger">Export PDF</a>
                                    <button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
                                </div>
                                
                            </div>
                            <div class="panel-body">
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <td>Nama SIswa</td>
                                            <td>Kelas</td>
                                            <td>Jenis Kelamin</td>
                                            <td>Agama</td>
                                            <td>Alamat</td>
                                            <td>Telp</td>
                                            <td>Nama Ayah</td>
                                            <td>Pekerjaan Ayah</td>
                                            <td>Nama Ibu</td>
                                            <td>Pekerjaan Ibu</td>
                                            <td>Aksi</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data_xsiswa as $xsiswa)
                                        <tr>
                                            <td><a href="/xsiswa/{{$xsiswa->id}}/profile">{{$xsiswa->nm_xsiswa}}</a></td>
                                            <td>{{$xsiswa->kelas}}</td>
                                            <td>{{$xsiswa->jk}}</td>
                                            <td>{{$xsiswa->agama}}</td>
                                            <td>{{$xsiswa->alamat}}</td> 
                                            <td>{{$xsiswa->telp}}</td>
                                            <td>{{$xsiswa->nm_ayah}}</td>
                                            <td>{{$xsiswa->pekerjaan_ayah}}</td>
                                            <td>{{$xsiswa->nm_ibu}}</td>
                                            <td>{{$xsiswa->pekerjaan_ibu}}</td>
                                            <td>
                                                <a href="/xsiswa/{{$xsiswa->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
                                                <a href="/xsiswa/{{$xsiswa->id}}/delete" class="btn btn-danger btn-sm delete-xsiswa" kd_xsiswa={{$xsiswa->id}}>Delete</a>
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
                    <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="xsiswa/create" method="POST" enctype="multipart/form-data"> <!-- memanggil controller create-->
                        {{csrf_field()}}

                        <div class="form-group {{$errors->has('nm_xsiswa') ? ' has-error' : ''}}">
                          <label for="exampleInputEmail1">Nama Siswa</label>
                          <input name ="nm_xsiswa" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Siswa" value="{{old('nm_xsiswa')}}">
                          @if ($errors->has('nm_xsiswa'))
                              <span class="help-block">{{$errors->first('nm_xsiswa')}}</span>
                          @endif
                        </div>

                        <div class="form-group {{$errors->has('email') ? 'has-error' : ''}}">
                            <label for="exampleInputEmail1">Email</label>
                            <input name ="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" value="{{old('email')}}">
                            @if ($errors->has('email'))
                                <span class="help-block">{{$errors->first('email')}}</span>
                            @endif
                        </div>

                        <!-- Combo Box -->
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

                        <div class="form-group {{$errors->has('jk') ? ' has-error' : ''}}">
                            <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                            <select name ="jk" class="form-control" id="exampleFormControlSelect1">
                              <option value="Pria" {{(old('jk') == 'Pria') ? 'selected' : ''}}>Pria</option>
                              <option value="Wanita" {{(old('jk') == 'Wanita') ? 'selected' : ''}}>Wanita</option>
                            </select>
                            @if ($errors->has('jk'))
                                <span class="help-block">{{$errors->first('jk')}}</span>
                            @endif
                        </div>

                        <div class="form-group {{$errors->has('agama') ? ' has-error' : ''}}">
                            <label for="exampleFormControlSelect1">Agama</label>
                            <select name ="agama" class="form-control" id="exampleFormControlSelect1">
                              <option value="Islam" {{(old('agama') == 'Islam') ? 'selected' : ''}}>Islam</option>
                              <option value="Kristen" {{(old('agama') == 'Kristen') ? 'selected' : ''}}>Kristen</option>
                              <option value="Katholik" {{(old('agama') == 'Katholik') ? 'selected' : ''}}>Katholik</option>
                              <option value="Hindu" {{(old('agama') == 'Hindu') ? 'selected' : ''}}>Hindu</option>
                              <option value="Budha" {{(old('agama') == 'Budha') ? 'selected' : ''}}>Budha</option>
                              <option value="Kong Hu Chu" {{(old('agama') == 'Kong Hu Chu') ? 'selected' : ''}}>Kong Hu Chu</option>
                            </select>
                            @if ($errors->has('agama'))
                                <span class="help-block">{{$errors->first('agama')}}</span>
                            @endif
                        </div>
                        <!-- End Combo Box -->

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Alamat</label>
                            <textarea name ="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{old('alamat')}}</textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Telp</label>
                            <input name ="telp" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Telp" value="{{old('telp')}}">
                        </div>

                        <!-- Form Ortu-->
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ayah</label>
                            <input name ="nm_ayah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ayah" value="{{old('nm_ayah')}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Pekerjaan Ayah</label>
                            <input name ="pekerjaan_ayah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pekerjaan Ayah" value="{{old('pekerjaan_ayah')}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Ibu</label>
                            <input name ="nm_ibu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Ibu" value="{{old('nm_ibu')}}">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Pekerjaan Ibu</label>
                            <input name ="pekerjaan_ibu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Pekerjaan Ibu" value="{{old('pekerjaan_ibu')}}">
                        </div>


                        <!--Input Avatar-->
                        <div class="form-group {{$errors->has('avatar') ? ' has-error' : ''}}">
                            <label for="exampleFormControlTextarea1">Avatar</label>
                            <input type="file" name="avatar" class="form-control">
                            @if ($errors->has('avatar'))
                                <span class="help-block">{{$errors->first('avatar')}}</span>
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
        $('.delete-xsiswa').click(function(){
            var kd_xsiswa = $(this).attr('kd-xsiswa');
            swal({
                title: "Yakin  ? ",
                text: "Mau menghapus data siswa dengan id "+kd_xsiswa+" ?",
                icon: "warning",
                buttons: true,
                dangerMode: true,
                })
                .then((willDelete) => {
                console.log(willDelete);
                if (willDelete) {
                    window.location = "/xsiswa/"+kd_xsiswa+"/delete";
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
        });
    </script>
@endsection