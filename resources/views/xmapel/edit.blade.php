<!-- views -> siswa -> index.blade.php -->
@extends('layouts.master')
@section('content')
<div class="main">
    <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h1>Edit Data Guru</h1>
                    @if (session('sukses'))
                        <div class="alert alert-success" role="alert">
                            {{session('sukses')}}
                        </div>
                    @endif
                    
                    <div class="row">  
                        <div class="col-lg-12">  
                        <form action="/xmapel/{{$xmapel->id}}/update" method="POST" enctype="multipart/form-data"> <!-- memanggil controller create-->
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Mata Pelajaran</label>
                                <input name ="nm_xmapel" type="text" class="form-control" id="exampleInputEmail1" 
                                    aria-describedby="emailHelp" placeholder="Mata Pelajaran" value="{{$xmapel->nm_xmapel}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect1">Kelas</label>
                                <select name ="kelas" class="form-control" id="exampleFormControlSelect1">
                                <option value="I" @if($xmapel->kelas == 'I') selected @endif>I</option>
                                <option value="II" @if($xmapel->kelas == 'II') selected @endif>II</option>
                                <option value="III" @if($xmapel->kelas == 'III') selected @endif>III</option>
                                <option value="IV" @if($xmapel->kelas == 'IV') selected @endif>IV</option>
                                <option value="V" @if($xmapel->kelas == 'V') selected @endif>V</option>
                                <option value="VI" @if($xmapel->kelas == 'VI') selected @endif>VI</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Semester</label>
                                <input name ="telp" type="text" class="form-control" id="exampleInputEmail1" 
                                    aria-describedby="emailHelp" placeholder="Telp" value="{{$xmapel->telp}}">
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
