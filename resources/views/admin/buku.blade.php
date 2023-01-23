@extends('admin.index')
@section('title', 'buku')
@section('content-title', 'buku')
@section('konten')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        @foreach ($bukus as $buku)
        <div class="col-xl-3 col-md-12 mb-4 mr-5">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-s font-weight-bold text-primary text-uppercase mb-1">{{ $buku->judul }} </div>
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">{{ $buku->Kategori->name }}</div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $buku->sinopsis }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-calendar fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<!-- /.container-fluid -->
@endsection
