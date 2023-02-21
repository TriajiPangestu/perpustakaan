@extends('admin.admin')
@section('title', 'Input_Buku')
@section('content-title', 'Input_Buku')

@section('konten')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('bukuadmin.store') }}" enctype="multipart/form-data" method="POST">
                @csrf
                    <div class="form-group">
                        <label>Kode Buku</label>
                        <input type="number" required class="form-control" id="kode" name="kode">
                    </div>
                    <div class="form-group">
                        <label>Judul Buku</label>
                        <input type="text" required class="form-control" id="judul" name="judul">
                    </div>
                    <div class="form-group">
                        <label">Kategori Buku</label>
                        <input type="text" required class="form-control" id="kategori" name="kategori">
                    </div>
                    <div class="form-group">
                      <label>Sinopsis Buku</label>
                      <input type="text" required class="form-control" id="sinopsis" name="sinopsis">
                    </div>
                    <div class="form-group">
                        <label>Stok Buku</label>
                        <input type="number" required class="form-control" required id="qty" name="qty">
                    </div>
                    <div class="form-group">
                        <label for="foto">Gambar Cover Buku</label>
                        <input required type="file" class="form-control" id="foto" name="foto" >
                    </div>
                        <input type="submit" class="btn btn-sm btn-success me-1" value="simpan">
                        <input type="button" class="btn btn-sm btn-danger" value="batal">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection