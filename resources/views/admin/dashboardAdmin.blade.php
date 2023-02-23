@extends('admin.admin')
@section('title', 'Dashboard')
@section('content-title', 'Dashboard')
@section('konten')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="">
      <div>
        <div class="card bg-dark text-white">
          <img class="card-img" src="landing-page/img/smk1.jpg" alt="Card image">
          <div class="card-img-overlay">
                <h1 class="fs-1 text-center text-dark" style="font-family: garamond;">Selamat Datang {{ auth()->user()->name }}</h1>
                <h5 class="card-title text-center text-dark">Website Perpustakaan SMKN 1 Surabaya</h5>
                <p class="card-text text-center text-dark"></p>
                <p class="card-text text-center text-dark"></p>
            </div>
          </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection
