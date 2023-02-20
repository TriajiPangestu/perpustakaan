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
                            <th scope="col">Judul</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Kembali</th>
                        </tr>
                    </thead>
                    @foreach ($user as $user)
                    <tbody>
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $user->user->name }}</td>
                            <td>{{ $user->buku->judul}}</td>
                            <td>
                            @if($user->status == 0)
                            <div class="badge bg-warning text-white">Belum diambil</div>
                            @elseif($user->status == 1)
                            <div class="badge bg-primary text-white">Dipinjam</div>
                            @elseif($user->tanggal_kembali < now())
                            <div class="badge bg-danger text-white">Belum di Kembalikan</div>
                            @else
                            <div class="badge bg-success text-white">Selesai</div>
                            @endif
                            </td>
                            <td>{{date('d F Y',  strtotime($user->tanggal_pinjam))}}</td>
                            <td>{{date('d F Y',  strtotime($user->tanggal_kembali))}}</td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
        </div>
</div>
@endsection