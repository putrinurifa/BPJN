
@extends('layouts.layanan')

@section('content')
<br><br><br><br><br><br><br><br>
<h2><center> PERMINTAAN SURAT</h2><br>
<div class = "container">
<table class="table table-sm" border="1">
<?php $no = 0;?>     
@foreach($lahir as $lahir)
<tr>
            <th>No</th>
            <th>Nama</th>
            <th>Action</th>
        </tr>
    
        <tr>
        <?php $no++ ;?>
                                    <td>{{ $no }}</td>
            <td>{{$lahir->nama_anak}}</td>
            <td> <a href="{{ route('print') }}" class="btn btn-sm btn-primary" target="_blank">CETAK PDF</a></td>
        </tr>
        @endforeach
</table>
</div>
<br><br><br>
@endsection