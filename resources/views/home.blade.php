@extends('layouts.app')

@section('breadcrump')
    <li class="active">Home</li>
@endsection

@section('content')
@include('layouts.aside')
<div class="col-md-9">
    <div class="jumbotron">
        <p>Selamat datang  di <strong>SISTEM PAKAR PENYAKIT PADA MOTOR MATIC</strong>, untuk memulai konsultasi silahkan klik tombol dibawah ini :</p> 
        <p><a href="{{ route('pasienForm') }}" class="btn btn-primary">Konsultasi</a></p>
        <br><center><p>Repost by <a href='https://stokcoding.com/' title='StokCoding.com' target='_blank'>StokCoding.com</a></p></center>
        
    </div>
</div>
@endsection
