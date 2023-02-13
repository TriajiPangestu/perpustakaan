@extends('layouts.parent')
@section('content')
<!--hero header-->
<section class="py-7 py-md-0 bg-hero" id="home" style="background-image: url('landing-page/img/buku.jpg');">
    <div class="container">
        <div class="row vh-md-100">
            <div class="col-md-8 col-sm-10 col-12 mx-auto my-auto text-center">
                <h1 class="heading-black text-capitalize">Selamat Datang !</h1>
                <p class="lead py-3">Dalam website ini terdapat informasi tentang buku yang ada di perpustakaan dan terdapat fitur untuk meminjam buku</p>
                <a href="/buku"><button type="submit" class="btn text-white d-inline-flex flex-row align-items-center" style="background-color: #ce2029;">
                    Coba
                    <em class="ml-2" data-feather="arrow-right"></em>
                </button></a>
            </div>
        </div>
    </div>
</section>

<!-- features section -->
<section class="pt-6 pb-7" style="background-color: #ce2029;" id="features">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto text-center">
                <h2 class="heading-black">Dalam website ini terdapat fitur fitur :</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-10 mx-auto">
                <div class="row feature-boxes">
                    <div class="col-md-6 box">
                        <div>
                        <i class="fas fa-book fa-2xl"></i>
                    </div><br>
                        <h5>Buku</h5>
                        <div>
                        <p class="text-white">Dalam buku kalian bisa cek data buku yang tersedia pada perpustakaan</p>
                        </div>
                        <a href="{{ route('buku.index') }}"><button type="submit" class="btn btn-dark d-inline-flex flex-row align-items-center">
                    <em class="ml-2" data-feather="arrow-right"></em>
                </button></a>
                    </div>
                    <div class="col-md-6 box">
                        <div>
                        <i class="fas fa-user fa-2xl"></i>
                    </div> <br>
                        <h5>Peminjaman Buku</h5>
                        <div>
                        <p class="text-white">Dalam peminjaman kalian bisa mengisi form untuk meminjam buku yang kalian inginkan</p>
                        </div>
                        <a href="{{ route('peminjaman.index') }}"><button type="submit" class="btn btn-dark d-inline-flex flex-row align-items-center">
                    <em class="ml-2" data-feather="arrow-right"></em>
                </button></a>
                    </div>
                    <div class="col-md-12 box">
                        <div>
                        <i class="text-dark fa-solid fa-leaf fa-2xl"></i>
                    </div> <br>
                        <h5>Riwayat Peminjaman</h5>
                        <div>
                        <p class="text-white">Dalam riwayat peminjaman kalian bisa melihat riwayat dari peminjaman buku yang kalian lakukan</p>
                        </div>
                        <br>
                        <a href="{{ route('riwayat.index') }}"><button type="submit" class="btn btn-dark d-inline-flex flex-row align-items-center">
                    <em class="ml-2"  data-feather="arrow-right"></em>
                </button></a>
                    </div>
            </div>
        </div>
</section>
<!-- </section> -->
@endsection
