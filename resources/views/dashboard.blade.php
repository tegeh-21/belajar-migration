@extends('pertanyaan.layout')
    
@section('content')

    <!-- header -->
    <div class ="row">
        <div class="col-md-6">
            <h2>Daftar Pertanyaan</h2>
        </div>
        <!-- <div class="col-md-6">
            <div class="text-right">
                <a class="btn btn-block btn-outline-primary" href="{{ route('pertanyaan.create') }}">Tambah Pertanyaan</a>
            </div>
        </div> -->
    </div>


    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong><p>{{ $message }}</p></strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    @endif

    <!-- LIST PERTANYAAN, DISINI TEMPAT ITERASI DATA -->
    @foreach($pertanyaans as $key => $pertanyaan)
    <div class="card card-widget">
        <div class="card-header">
            <div class="user-block">
                <span class="username"><a href="#">{{ $pertanyaan->judul }}</a></span>
                <span class="description">Nama yang posting - {{ $pertanyaan->tanggal_dibuat }}</span>
            </div>
        <!-- /.user-block -->

            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
                </button>
                <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
                </button>
            </div>
        <!-- /.card-tools -->
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <!-- ISI PERTANYAAN -->
            <p>{!! $pertanyaan->isi !!}</p>
            <!-- tombol vote -->
            <form action="/up-vote/{{ $pertanyaan->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <button type="submit" class="btn btn-default btn-sm"><i class="far fa-thumbs-up"></i> Upvote</button>
            </form>
            <form action="/down-vote/{{ $pertanyaan->id }}" method="post">
                {{ csrf_field() }}
                {{ method_field('PUT') }}
                <button type="submit" class="btn btn-default btn-sm"><i class="fas fa-thumbs-down"></i> Downvote</button>
            </form>
            @foreach($results as $key_result => $result)
                @if($pertanyaan->id == $result->id_pertanyaan)
                    <span class="float-right text-muted">Vote Poin : {{ $result->result }}</span>
                @endif
            @endforeach
        </div>
        <!-- /.card-body -->

        <!-- tempat komentar -->
        <div class="card-footer card-comments">
            <div class="card-comment">
                <!-- User image -->
                <img class="img-circle img-sm" src="../dist/img/user3-128x128.jpg" alt="User Image">
                <div class="comment-text">
                    <span class="username">
                        Nama profil yang kasih jawaban
                        <span class="text-muted float-right">Tanggal jawaban 0000-00-00</span>
                    </span><!-- /.username -->
                    isi jawaban lorem ipsum lorem ipsum lorem ipsum lorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsumlorem ipsum 
                </div>
                <!-- /.comment-text -->
            </div>
        <!-- /.card-comment -->
        </div>

        <!-- /.card-footer -->
        <div class="card-footer">
            <form action="#" method="post">
                <img class="img-fluid img-circle img-sm" src="../dist/img/user4-128x128.jpg" alt="Alt Text">
                <!-- .img-push is used to add margin to elements next to floating images -->
                <div class="img-push">
                <input type="text" class="form-control form-control-sm" placeholder="Press enter to post comment">
                </div>
            </form>
        </div>
        <!-- /.card-footer -->
    </div>
    <!-- /.card -->
    @endforeach

    
@endsection