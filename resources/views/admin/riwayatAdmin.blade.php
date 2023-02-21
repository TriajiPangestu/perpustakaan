@extends('admin.admin')
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
                            <th scope="col">Nomor Telepon</th>
                            <th scope="col">Buku</th>
                            <th scope="col">Status</th>
                            <th scope="col">Tanggal Pinjam</th>
                            <th scope="col">Tanggal Kembali</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                <tbody>
                @foreach ($riwayat as $pinjam)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $pinjam->nama }}</td>
                        <td>{{ $pinjam->kelas }}</td>
                        <td>{{ $pinjam->jurusan }}</td>
                        <td>{{ $pinjam->no_telp }}</td>
                        <td value="{{ $pinjam->id_buku }}">{{ $pinjam->buku->judul }}</td>
                        <td>
                            @if($pinjam->status == 0)
                            <div class="badge bg-warning text-white">Belum diambil</div>
                            @elseif($pinjam->status == 1)
                            <div class="badge bg-primary text-white">Dipinjam</div>
                            @elseif($pinjam->tanggal_kembali < now())
                            <div class="badge bg-danger text-white">Belum di Kembalikan</div>
                            @else
                            <div class="badge bg-success text-white">Selesai</div>
                            @endif
                        </td>
                        <td>{{date('d F Y',  strtotime($pinjam->tanggal_pinjam))}}</td>
                        <td>{{date('d F Y',  strtotime($pinjam->tanggal_kembali))}}</td>
                        @if($pinjam->status == 0)
                        <td class="text-nowrap">
                            <form class="d-inline" action="{{route('riwayatadmin.update', $pinjam->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="btn btn-sm btn-primary">Lanjut</button>
                            </form>
                            <form class="d-inline" action="{{ route('riwayatadmin.destroy', $pinjam->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger type="submit">Hapus</button>
                        </form>
                        </td>
                        @else
                        <td class="text-nowrap">
                        <form class="d-inline" action="{{route('button.update', $pinjam->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-sm btn-success">Selesai</button>
                        </form>
                        <form class="d-inline" action="{{ route('riwayatadmin.destroy', $pinjam->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger type="submit">Hapus</button>
                        </form>
                        </td>
                        @endif
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection