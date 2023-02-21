@extends('admin.admin')
@section('title', 'Dashboard')
@section('content-title', 'Dashboard')
@section('konten')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="">
                <h1 class="text-center">Selamat Datang {{ auth()->user()->name }}</h1>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
