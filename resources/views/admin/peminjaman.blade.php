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
                    @foreach ($pinjams as $pinjam)
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" value="{{ $pinjam->user->name }}" class="form-control" id="name" name="name">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control form-select" name="jurusan" id="jurusan">
                            <option value="">{{ $pinjam->siswa->jurusan }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control form-select" id="kelas" name="kelas">
                            <option value="">{{ $pinjam->siswa->kelas }}</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="kelas">Judul Buku</label>
                      <select class="form-control form-select" id="buku" name="buku">
                          <option value="">{{ $pinjam->buku->judul }}</option>
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
                    @endforeach
                    <div class="form-group">
                        <form action="">
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