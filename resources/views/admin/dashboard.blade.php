@extends('admin.index')
@section('title', 'Dashboard')
@section('content-title', 'Dashboard')
@section('konten')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="">
                <p class="fs-1 text-center">Selamat Datang {{ auth()->user()->name }}</p>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
