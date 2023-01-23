@extends('admin.index')
@section('title', 'Riwayat')
@section('content-title', 'Riwayat')

@section('konten')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel pengambilan</h6>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Kembali</th>
                        </tr>
                    </thead>
                <tbody>
                @foreach ($riwayats as $riwayat)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $riwayat->buku->judul }}</td>
                        <td>Belum Diambil</td>
                        <td>{{ $riwayat->pinjam-tanggal }}</td>
                        <td>23-01-2023</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <br><br><br>
    <div class="row">
        <div class="col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tabel peminjaman</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection