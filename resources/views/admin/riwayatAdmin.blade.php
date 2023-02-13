@extends('admin.index')
@section('title', 'Riwayat')
@section('content-title', 'Riwayat')

@section('konten')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Tabel Peminjaman</h6>
            </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jurusan</th>
                            <th scope="col">Buku</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                <tbody>
                @foreach ($peminjaman as $pinjam)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pinjam->nama }}</td>
                        <td>{{ $pinjam->kelas }}</td>
                        <td>{{ $pinjam->jurusan }}</td>
                        <td value="{{ $pinjam->id_buku }}">{{ $pinjam->buku->judul }}</td>
                        <td>{{date('d F Y',  strtotime($pinjam->tanggal_pinjam))}}</td>
                        <td>{{date('d F Y',  strtotime('+7 days', strtotime($pinjam->tanggal_pinjam)))}}</td>
                        <td>status</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection