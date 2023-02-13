@extends('layouts.parent')
@section('content')
<!--hero header-->
<section class="py-7 py-md-0 bg-hero" id="home" style="background-image: url('landing-page/img/buku.jpg');">
    <div class="container">
        <div class="row vh-md-100">
            <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                <h1 class="heading-black text-capitalize">Selamat Datang !</h1>
                <p class="lead py-3">Silahkan login terlebih dahulu untuk mengakses website perpustakaan !</p>
                <a href="/buku"><button type="submit" class="btn text-white d-inline-flex flex-row align-items-center" style="background-color: #ce2029;">
                    Login
                    <em class="ml-2" data-feather="arrow-right"></em>
                </button></a>
            </div>
        </div>
    </div>
</section>
@endsection