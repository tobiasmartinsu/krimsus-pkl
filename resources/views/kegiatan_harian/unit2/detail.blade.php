@extends('layout.krimsus')
@section('title')
    Halaman Detail Kegiatan Harian Unit 2
@endsection
@section('content')

<div class="col">
    <a href="/kegiatanharian2" class="btn btn-warning btn-block btn-md my-3">Kembali</a>
</div>
<div class="card">
    <img class="card-img-top my-3" src="{{asset('filekegiatanharian/' . $kegiatanharian2->bukti_kegiatan)}}" alt="" height="500 px">
    <div class="card-body">

        <h3 class="text-primary">{{$kegiatanharian2->nama_kegiatan}} </h3>
        <p>{{$kegiatanharian2->detail_kegiatan}}</p>
    </div>

</div>


@endsection
