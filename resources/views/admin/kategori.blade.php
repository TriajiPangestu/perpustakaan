@extends('admin.admin')
@section('title', 'Tambah Kategori')
@section('content-title', 'Tambah Kategori')

@section('konten')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('kategori.store') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="nama">Kategori</label>
                        <input type="text" required class="form-control" id="name" name="name">
                    </div>
                        <input type="submit" class="btn btn-sm btn-success me-1" value="simpan">
                        <input type="button" class="btn btn-sm btn-danger" value="batal">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection