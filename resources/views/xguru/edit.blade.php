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
                        <form action="/xguru/{{$xguru->id}}/update" method="POST" enctype="multipart/form-data"> <!-- memanggil controller create-->
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Guru</label>
                                <input name ="nm_xguru" type="text" class="form-control" id="exampleInputEmail1" 
                                    aria-describedby="emailHelp" placeholder="Nama Guru" value="{{$xguru->nm_xguru}}">
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Alamat</label>
                                <textarea name ="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$xguru->alamat}}
                                </textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Telp</label>
                                <input name ="telp" type="text" class="form-control" id="exampleInputEmail1" 
                                    aria-describedby="emailHelp" placeholder="Telp" value="{{$xguru->telp}}">
                            </div>

                           
                            <div class="form-group">
                                <label for="exampleFormControlTextarea1">Avatar</label>
                                <input type="file" name="avatar_" class="form-control">
                                
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
