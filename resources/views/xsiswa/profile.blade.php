@extends('layouts.master')
@section('header')
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/css/bootstrap-editable.css" rel="stylesheet"/>
@endsection
@section('content')
    <div class="main">

        <!-- MAIN CONTENT -->
        <div class="main-content">
            <div class="container-fluid">
                @if (session('sukses'))
                    <div class="alert alert-success" role="alert">
                        {{session('sukses')}}
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger" role="alert">
                        {{session('error')}}
                    </div>
                @endif
                <div class="panel panel-profile">
                <div class="clearfix">
                <!-- LEFT COLUMN -->
                <div class="profile-left">

                    <!-- PROFILE HEADER -->
                    <div class="profile-header">
                        <div class="overlay"></div>
                        <div class="profile-main">
                            <img src="{{$xsiswa->getAvatar()}}" class="img-circle" alt="Avatar">
                            <h3 class="name">{{$xsiswa->nama_depan}}</h3>
                            <span class="online-status status-available">Available</span>
                        </div>
                        <div class="profile-stat">
                            <div class="row">
                                <div class="col-md-4 stat-item">
                                    <!-- datasiswa -> tabelmapel -> jumlah mapel-->
                                    {{$xsiswa->xmapel->count()}} <span>Mata Pelajaran</span>
                                </div>
                                <div class="col-md-4 stat-item">
                                    {{$xsiswa->rataRataNilai()}} <span>Rata-rata Nilai</span>
                                </div>
                                <div class="col-md-4 stat-item">
                                    2174 <span>Points</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE HEADER -->

                    <!-- PROFILE DETAIL -->
                    <div class="profile-detail">
                        <div class="profile-info">
                            <h4 class="heading">DATA DIRI SISWA</h4>
                            <ul class="list-unstyled list-justify">
                                <li>Jenis Kelamin <span>{{$xsiswa->jk}}</span></li>
                                <li>Agama <span>{{$xsiswa->agama}}</span></li>
                                <li>Alamat <span>{{$xsiswa->alamat}}</span></li>
                                <li>Telp <span>{{$xsiswa->telp}}</span></li>
                                <li>Nama Ayah <span>{{$xsiswa->nm_ayah}}</span></li>
                                <li>Pekerjaan Ayah<span>{{$xsiswa->pekerjaan_ayah}}</span></li>
                                <li>Nama Ibu <span>{{$xsiswa->nm_ibu}}</span></li>
                                <li>Pekerjaan Ibu<span>{{$xsiswa->pekerjaan_ibu}}</span></li>
                            </ul>
                        </div>
                        <div class="text-center">
                            <a href="/xsiswa/{{$xsiswa->id}}/edit" class="btn btn-warning">
                                Edit Profile
                            </a>
                        </div>
                    </div>
                    <!-- END PROFILE DETAIL -->
                </div>
                <!-- END LEFT COLUMN -->

                <!-- RIGHT COLUMN -->
           
                <!-- END RIGHT COLUMN -->
                </div>
                </div>

            </div>
        </div>
        <!-- END MAIN CONTENT -->
    </div>
        
@stop

@section('footer')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/bootstrap3-editable/js/bootstrap-editable.min.js"></script>
    <script>
        Highcharts.chart('chartNilai', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Laporan Nilai Siswa'
            },
            xAxis: {
                categories: {!!json_encode($xcategories)!!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Nilai'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Nilai',
                data: {!!json_encode($xdata)!!}
            }]
        });
        $(document).ready(function() {
            $('.nilai').editable();
        });
    </script>
@endsection