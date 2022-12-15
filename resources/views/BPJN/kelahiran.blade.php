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
                <div class="panel-title">Formulir Surat Kelahiran</div>
            </div>
            <div class="panel-body">
                <form id="signupform" class="form-horizontal" role="form">

                    <div id="signupalert" style="display:none" class="alert alert-danger">
                        <p>Error:</p>
                        <span></span>
                    </div>



                    <div class="form-group">
                        <label for="nama_anak" class="col-md-3 control-label">Nama Anak</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="nama_anak" placeholder="Nama">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="tgl_lhr" class="col-md-3 control-label">Tempat/Tanggal Lahir</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="tgl_lhr" placeholder="Tempat/Tanggal Lahir">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="jk" class="col-md-3 control-label">Jenis Kelamin</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" name="jk" placeholder="Jenis Kelamin">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat" class="col-md-3 control-label">Alamat</label>
                        <div class="col-md-9">
                            <input type="alamat" class="form-control" name="alamat" placeholder="Alamat">
                        </div>
                    </div>

                    
                    <div class="border mt-3 border-dashed"></div><br>

                    <div class="form-group">
                        <label for="nama_ayah" class="col-md-3 control-label">Nama Ayah</label>
                        <div class="col-md-9">
                            <input type="nama_ayah" class="form-control" name="nama_ayah" placeholder="Nama Ayah">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nama_ibu" class="col-md-3 control-label">Nama Ibu</label>
                        <div class="col-md-9">
                            <input type="nama_ibu" class="form-control" name="nama_ibu" placeholder="Nama Ibu">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="anakke" class="col-md-3 control-label">Anak Ke</label>
                        <div class="col-md-9">
                            <input type="anakke" class="form-control" name="anakke" placeholder="Anak Ke">
                        </div>
                    </div>

                    <div style="float:right" class="form-group">
                        <!-- Button -->

                        <div class="col-sm-12 controls">
                            <a id="btn-fblogin" href="#" class="btn btn-primary">Kirim</a>

                        </div>
                    </div>
                </form>
            </div>
        </div>




    </div>
</div>
<br><br>

@endsection