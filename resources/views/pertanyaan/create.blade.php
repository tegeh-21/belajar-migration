@extends('pertanyaan.layout')
  
@section('content')
   
<div class="container-fluid">
   
    <div class="row-fluid">
        <div class="card card-primary" >
            
              <!-- /.card-header -->
            <div class="card-header">
                <h3 class="card-title">Tambah Pertanyaan</h3>
            </div>

            <!-- <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> Terdapat masalah pada data yang diinputkan.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif -->

              <!-- form start -->
              <form method="post" action="{{ route('pertanyaan.store') }}" id="myForm">
              @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="title">Judul</label>
                        <input type="text" name="judul" class="form-control" id="judul" aria-describedby="judul" placeholder="Judul">
                    </div>
                    <div class="form-group">
                        <label for="writer">Isi</label>
                        <textarea name="isi" class="form-control ckeditor" id="ckeditor" aria-describedby="isi" placeholder="Isi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="publisher">Tanggal Dibuat</label>
                        <input type="date" name="tanggal_dibuat" class="form-control" id="tanggal_dibuat" aria-describedby="tanggal_dibuat" placeholder="Tanggal dibuat">
                    </div>
                    <div class="form-group">
                        <label for="publisher">Tanggal Diperbaharui</label>
                        <input type="date" name="tanggal_diperbaharui" class="form-control" id="tanggal_diperbaharui" aria-describedby="tanggal_diperbaharui" placeholder="Tanggal diperbaharui">
                    </div>
                    <div class="form-group">
                        <label for="writer">Jawaban Tepat Id</label>
                        <input type="text" name="jawaban_tepat_id" class="form-control" id="jawaban_tepat_id" aria-describedby="jawaban_tepat_id" placeholder="Jawaban tepat id">
                    </div>
                    <div class="form-group">
                        <label for="writer">Profil Id</label>
                        <input type="text" name="profil_id" class="form-control" id="profil_id" aria-describedby="profil_id" placeholder="Profil id">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->


            <!-- <form method="post" action="{{ route('pertanyaan.store') }}" id="myForm">
            
                <div class="form-group">
                    <label for="title">Judul</label>
                    <input type="text" name="judul" class="form-control" id="judul" aria-describedby="judul" placeholder="Judul">
                </div>
                <div class="form-group">
                    <label for="writer">Isi</label>
                    <input type="text" name="isi" class="form-control" id="isi" aria-describedby="isi" placeholder="Isi">
                </div>
                <div class="form-group">
                    <label for="publisher">Tanggal Dibuat</label>
                    <input type="date" name="tanggal_dibuat" class="form-control" id="tanggal_dibuat" aria-describedby="tanggal_dibuat" placeholder="Tanggal dibuat">
                </div>
                <div class="form-group">
                    <label for="publisher">Tanggal Diperbaharui</label>
                    <input type="date" name="tanggal_diperbaharui" class="form-control" id="tanggal_diperbaharui" aria-describedby="tanggal_diperbaharui" placeholder="Tanggal diperbaharui">
                </div>
                <div class="form-group">
                    <label for="writer">Jawaban Tepat Id</label>
                    <input type="text" name="jawaban_tepat_id" class="form-control" id="jawaban_tepat_id" aria-describedby="jawaban_tepat_id" placeholder="Jawaban tepat id">
                </div>
                <div class="form-group">
                    <label for="writer">Profil Id</label>
                    <input type="text" name="profil_id" class="form-control" id="profil_id" aria-describedby="profil_id" placeholder="Profil id">
                </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            </form> -->
            </div>
        </div>
    </div>
    </div>
@endsection