<!-- views -> siswa -> index.blade.php -->
@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit Data Siswa</h1>
                    @if (session('sukses'))
                        <div class="alert alert-success" role="alert">
                            {{session('sukses')}}
                        </div>
                    @endif
                    
                    <div class="row">  
                        <div class="col-lg-12">  
                        <form action="/xsiswa/{{$xsiswa->id}}/update" method="POST" enctype="multipart/form-data"> <!-- memanggil controller create-->
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Siswa</label>
                                <input name ="nm_xsiswa" type="text" class="form-control" id="exampleInputEmail1" 
                                    aria-describedby="emailHelp" placeholder="Nama Siswa" value="{{$xsiswa->nm_xsiswa}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kelas</label>
                                <select name ="kelas" class="form-control" id="exampleFormControlSelect1">
                                <option value="IA" @if($xsiswa->kelas == 'IA') selected @endif>IA</option>
                                <option value="IB" @if($xsiswa->kelas == 'IB') selected @endif>IB</option>
                                <option value="IIA" @if($xsiswa->kelas == 'IIA') selected @endif>IIA</option>
                                <option value="IIB" @if($xsiswa->kelas == 'IIB') selected @endif>IIB</option>
                                <option value="IIIA" @if($xsiswa->kelas == 'IIIA') selected @endif>IIIA</option>
                                <option value="IIIB" @if($xsiswa->kelas == 'IIIB') selected @endif>IIIB</option>
                                <option value="IV" @if($xsiswa->kelas == 'IV') selected @endif>IV</option>
                                <option value="V" @if($xsiswa->kelas == 'V') selected @endif>V</option>
                                <option value="VI" @if($xsiswa->kelas == 'VI') selected @endif>VI</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
                                <select name ="jk" class="form-control" id="exampleFormControlSelect1">
                                <option value="Pria" @if($xsiswa->jk == 'Pria') selected @endif>Pria</option>
                                <option value="Wanita" @if($xsiswa->jk == 'Wanita') selected @endif>Wanita</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Agama</label>
                                <select name ="agama" class="form-control" id="exampleFormControlSelect1">
                                <option value="Islam" @if($xsiswa->agama == 'Islam') selected @endif>Islam</option>
                                <option value="Kristen" @if($xsiswa->agama == 'Kristen') selected @endif>Kristen</option>
                                <option value="Katholik" @if($xsiswa->agama == 'Katholik') selected @endif>Katholik</option>
                                <option value="Hindu" @if($xsiswa->agama == 'Hindu') selected @endif>Hindu</option>
                                <option value="Budha" @if($xsiswa->agama == 'Budha') selected @endif>Budha</option>
                                <option value="Kong Hu Chu" @if($xsiswa->agama == 'Kong Hu Chu') selected @endif>Kong Hu Chu</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea name ="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$xsiswa->alamat}}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Telp</label>
                                <input name ="telp" type="text" class="form-control" id="exampleInputEmail1" 
                                    aria-describedby="emailHelp" placeholder="Telp" value="{{$xsiswa->telp}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Ayah</label>
                                <input name ="nm_ayah" type="text" class="form-control" id="exampleInputEmail1" 
                                    aria-describedby="emailHelp" placeholder="Nama Ayah" value="{{$xsiswa->nm_ayah}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Pekerjaan Ayah</label>
                                <input name ="pekerjaan_ayah" type="text" class="form-control" id="exampleInputEmail1" 
                                    aria-describedby="emailHelp" placeholder="Pekerjaan Ayah" value="{{$xsiswa->pekerjaan_ayah}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Ibu</label>
                                <input name ="nm_ibu" type="text" class="form-control" id="exampleInputEmail1" 
                                    aria-describedby="emailHelp" placeholder="Nama Ibu" value="{{$xsiswa->nm_ibu}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Pekerjaan Ibu</label>
                                <input name ="pekerjaan_ibu" type="text" class="form-control" id="exampleInputEmail1" 
                                    aria-describedby="emailHelp" placeholder="Pekerjaan Ibu" value="{{$xsiswa->pekerjaan_ibu}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Avatar</label>
                                <input type="file" name="avatar" class="form-control">
                                
                            </div>

                        </div>
                        <button type="submit" class="btn btn-warning">Update</button>
                        </form>

                    </div> 
                    </div>    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
@section('content1')
            
@endsection
