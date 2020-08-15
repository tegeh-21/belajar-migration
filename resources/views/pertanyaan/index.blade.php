@extends('pertanyaan.layout')
 
@section('content')
<!-- card -->
<div class="card">
    <div class="card-body">
    <div class="row">
        <div class="col-lg-12 margin-tb mt-3 mb-3">
            <!-- <div class="text-left"> -->
            <div>
                <h2>Daftar Pertanyaan Saya</h2>
            </div>
            <!-- <div class="text-right"> -->
            <div>
                <a class="btn btn-success" href="{{ route('pertanyaan.create') }}">Tambah Pertanyaan</a>
            </div>
        </div>
    </div>
    </div>
</div>
   
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><p>{{ $message }}</p></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

@foreach ($pertanyaans as $key => $pertanyaan)
<div class="card">
    <div class="card-header">
        <h3>{{ $pertanyaan->judul }}</h3>
        <p>{{ $pertanyaan->tanggal_dibuat }}</p>
    </div>
    <div class="card-body">
        <h5>{!! $pertanyaan->isi !!}</h5>
    </div>
    <div class="card-footer">
        <form action="{{ route('pertanyaan.destroy',$pertanyaan->id) }}" method="POST">
            <a class="btn btn-info" href="{{ route('pertanyaan.show',$pertanyaan->id) }}">Show</a>
            <a class="btn btn-primary" href="{{ route('pertanyaan.edit',$pertanyaan->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Delete</button>
        </form>
    </div>
</div>
@endforeach

<!-- <div class="card">
    <div class="card-body">
    <table class="table table-striped table-bordered">
        <tr>
            <th>No</th>
            <th>Judul</th>
            <th>Isi</th>
            <th>Tanggal Dibuat</th>
            <th>Tanggal Diperbaharui</th>
            <th>Jawaban Tepat Id</th>
            <th>Profil Id</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($pertanyaans as $key => $pertanyaan)
        <tr>
          
            <td>{{ $key+1 }}</td>
            <td>{{ $pertanyaan->judul }}</td>
            <td>{{ $pertanyaan->isi }}</td>
            <td>{{ $pertanyaan->tanggal_dibuat }}</td>
            <td>{{ $pertanyaan->tanggal_diperbaharui }}</td>
            <td>{{ $pertanyaan->jawaban_tepat_id }}</td>
            <td>{{ $pertanyaan->profil_id }}</td>
            <td>
                <form action="{{ route('pertanyaan.destroy',$pertanyaan->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('pertanyaan.show',$pertanyaan->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('pertanyaan.edit',$pertanyaan->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>        
    </div>
</div> -->
<!-- /.card -->

@endsection