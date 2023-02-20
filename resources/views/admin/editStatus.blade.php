@extends('admin.index')
@section('title', 'Edit Status')
@section('content-title', 'Edit Status')

@section('konten')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('riwayatadmin.update') }}" method="POST">
                @csrf
                @method('PUT')
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control form-select" name="jurusan" id="jurusan">
                            <option value="Belum Diambil">Belum Diambil</option>
                            <option value="Dipinjam">Dipinjam</option>
                            <option value="Belum Dikembalikan">Belum Dikembalikan</option>
                        </select>
                    </div>
                        <input type="submit" class="btn btn-sm btn-success me-1" value="simpan">
                        <input type="button" class="btn btn-sm btn-danger" value="batal">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection