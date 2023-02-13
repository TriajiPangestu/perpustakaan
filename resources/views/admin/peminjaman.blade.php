@extends('admin.index')
@section('title', 'peminjaman')
@section('content-title', 'peminjaman')

@section('konten')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <form action="{{ route('peminjaman.store') }}" method="POST">
                @csrf
                    <div class="form-group">
                        <label for="name">Nama</label>
                            <input type="hidden" class="form-control" name="id_user" value="{{ auth()->user()->id }}">
                            <input type="text" class="form-control" id="nama"  value="{{ auth()->user()->name }}" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select class="form-control form-select" name="jurusan" id="jurusan">
                            <option value="RPL">RPL</option>
                            <option value="DKV">DKV</option>
                            <option value="PSPT">PSPT</option>
                            <option value="OTKP">OTKP</option>
                            <option value="AKL">AKL</option>
                            <option value="BDPM">BDPM</option>
                            <option value="PH">PH</option>
                            <option value="TKJ">TKJ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <select class="form-control form-select" id="kelas" name="kelas">
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                    </div>
                    <div class="form-group">
                      <label for="kelas">Judul Buku : Stok</label>
                      <select class="form-control form-select" id="id_buku" name="id_buku">
                       @foreach ($buku as $item)
                          <option value="{{ $item->id }}">{{ $item->judul }} : {{$item->qty}}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                        <label for="tanggal">Tanggal</label>
                        <input type="date" class="form-control" required id="tanggal_pinjam" name="tanggal_pinjam">
                    </div>
                    <?php
                    //menangkap post tgl pinjam
		            $tgl_p='tanggal_pinjam';
                    //membuat tgl kembali
                    $tgl_k=date('Y-m-d', strtotime('+7 days', strtotime($tgl_p)));
                    ?>
                    <div class="form-group">
                        <label for="no_telp">Nomor Telepon</label>
                        <input type="number" required class="form-control" id="no_telp" name="no_telp">
                    </div>
                        <input type="submit" class="btn btn-sm btn-success me-1" value="simpan">
                        <input type="button" class="btn btn-sm btn-danger" value="batal">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection