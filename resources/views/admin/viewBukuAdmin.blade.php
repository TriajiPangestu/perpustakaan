@extends('admin.admin')
@section('title', 'buku')
@section('content-title', 'buku')
@section('konten')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        @foreach ($buku as $item)
        <div class="col-xl-3 col-md-12 mb-4 mr-5">
            <div class="card">
                <img src="{{asset('/template/img/'.$item->foto)}}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h5 class="card-title">{{ $item->kode }}</h5>
                        <h5 class="card-title">{{ $item->judul }}</h5>
                        <p class="card-text"><small class="text-muted">{{ $item->kategori }}</small></p>
                        <p class="card-text">{{ $item->sinopsis}}.</p>
                        <p class="card-text"><small class="text-muted">Stok : {{ $item->qty }}</small></p>
                        <a href="{{route('viewbuku.edit', $item->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="{{route('viewbuku.hapus', $item->id) }}" class="btn btn-sm btn-danger">Hapus</a>
                    </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
<!-- /.container-fluid -->
@endsection
