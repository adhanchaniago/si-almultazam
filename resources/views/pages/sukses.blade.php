@extends('layouts.template')
@section('content')
<div class="row text-center">
        <div class="col-sm-6 col-sm-offset-3">
        <h2 style="color:#0fad00;">Sukses</h2>
        <h3>Baarakallahu fiikum</h3>
        <p style="font-size:20px;color:#5C5C5C;">Data yang Anda isikan telah berhasil dimasukkan ke dalam database. Anda telah resmi tercatat sebagai jamaah Al Multazam Tour &amp; Travel.</p>
        <a href="{{route('input')}}" class="btn btn-success">Input Kembali</a>
    <br><br>
        </div>
	</div>
@endsection()