@extends('pertanyaan.layout')
  
@section('content')

<div class="container mt-5">
   
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header">
            Detail Pertanyaan
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><b>Judul: </b>{{$pertanyaan->judul}}</li>
                    <li class="list-group-item"><b>Isi: </b>{!! $pertanyaan->isi !!}</li>
                    <li class="list-group-item"><b>Tanggal dibuat: </b>{{$pertanyaan->tanggal_dibuat}}</li>
                    <li class="list-group-item"><b>Tanggal diperbaharui: </b>{{$pertanyaan->tanggal_diperbaharui}}</li>
                    <li class="list-group-item"><b>Jawaban tepat id: </b>{{$pertanyaan->jawaban_tepat_id}}</li>
                    <li class="list-group-item"><b>Profil id: </b>{{$pertanyaan->profil_id}}</li>
                </ul>
            </div>
            <a class="btn btn-success" href="{{ route('pertanyaan.index') }}">Kembali</a>

        </div>
    </div>
</div>
@endsection