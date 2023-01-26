@extends('admin.index')
@section('title', 'peminjaman')
@section('content-title', 'peminjaman')

@section('konten')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                {{-- @if(count($errors) >0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif --}}
                <form method="POST" action="">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" value="" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control form-select" name="jurusan" id="jurusan">
                            <option value="">RPL</option>
                            <option value="">DKV</option>
                            <option value="">PSPT</option>
                            <option value="">OTKP</option>
                            <option value="">AKL</option>
                            <option value="">BDPM</option>
                            <option value="">PH</option>
                            <option value="">TKJ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control form-select" id="kelas" name="kelas">
                            <option value="">10</option>
                            <option value="">11</option>
                            <option value="">12</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="kelas">Judul Buku</label>
                      <select class="form-control form-select" id="buku" name="buku">
                       @foreach ($bukus as $buku)
                          <option value="">{{ $buku->judul }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" id="tanggal" name="tanggal">
                    </div>
                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="number" class="form-control" id="notelp" name="notelp" >
                    </div>
                    <div class="form-group">
                        <form action="{{ route('peminjaman.store') }}" method="POST">
                            <input type="button" class="btn btn-sm btn-success" name="simpan" value="simpan">
                            <input type="button" class="btn btn-sm btn-danger" value="batal">
                        </form>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection