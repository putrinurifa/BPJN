@extends('layouts.layanan')

@section('content')
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<br><br><br><br><br><br><br><br>
<div class="container">
    <div id="signupbox" style="margin-top:50px"
        class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Formulir Surat Keematian</div>
            </div>
            <div class="panel-body">
                <form action="{{ route('kematian.store') }}" method="POST" enctype="multipart/form-data" id="signupform" class="form-horizontal" role="form">
@csrf
                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>



                    <div class="form-group">
                        <label for="nama" class="col-md-3 control-label">Nama</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama" placeholder="Nama">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="nik" class="col-md-3 control-label">NIK</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nik" placeholder="NIK">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jk" class="col-md-3 control-label">Jenis Kelamin</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="jk" placeholder="Jenis Kelamin">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tempat_tgl_lahir" class="col-md-3 control-label">Tempat/Tanggal Lahir</label>
                        <div class="col-md-9">
                            <input type="tempat_tgl_lahir" class="form-control" name="tempat_tgl_lahir" placeholder="Tempat/Tanggal Lahir">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="agama" class="col-md-3 control-label">Agama</label>
                        <div class="col-md-9">
                            <input type="agama" class="form-control" name="agama" placeholder="Agama">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="hari" class="col-md-3 control-label">Hari</label>
                        <div class="col-md-9">
                            <input type="hari" class="form-control" name="hari" placeholder="hari">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tgl" class="col-md-3 control-label">Tanggal</label>
                        <div class="col-md-9">
                            <input type="tgl" class="form-control" name="tgl" placeholder="Tanggal">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="bertempat" class="col-md-3 control-label">Bertempat</label>
                        <div class="col-md-9">
                            <input type="bertempat" class="form-control" name="bertempat" placeholder="Bertempat">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="penyebab" class="col-md-3 control-label">Penyebab</label>
                        <div class="col-md-9">
                            <input type="penyebab" class="form-control" name="penyebab" placeholder="Penyebab">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_pelapor" class="col-md-3 control-label">Nama Pelapor</label>
                        <div class="col-md-9">
                            <input type="nama_pelapor" class="form-control" name="nama_pelapor" placeholder="Nama Pelapor">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nik_pelapor" class="col-md-3 control-label">NIK Pelapor</label>
                        <div class="col-md-9">
                            <input type="nik_pelapor" class="form-control" name="nik_pelapor" placeholder="NIK Pelapor">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tempat_tgl_lahir_pelapor" class="col-md-3 control-label">Tempat/Tanggal Lahir Pelapor</label>
                        <div class="col-md-9">
                            <input type="tempat_tgl_lahir_pelapor" class="form-control" name="tempat_tgl_lahir_pelapor" placeholder="Tempat/Tanggal Lahir Pelapor">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="pekerjaan" class="col-md-3 control-label">Pekerjaan</label>
                        <div class="col-md-9">
                            <input type="pekerjaan" class="form-control" name="pekerjaan" placeholder="Pekerjaan">
                        </div>
                    </div>

                    <div style="float:right" class="form-group">
                        <!-- Button -->

                        <button type="submit" class="btn btn-primary" id="btn-fblogin">Kirim </button>
                    </div>
                </form>
            </div>
        </div>




    </div>
</div>
<br><br>

@endsection