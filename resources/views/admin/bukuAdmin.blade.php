@extends('admin.admin')
@section('title', 'Input_Buku')
@section('content-title', 'Input_Buku')

@section('konten')

<div class="row">
    <div class="col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-body">
                <a href="{{route('kategori.index') }}" class="mb-2 text-end btn btn-sm btn-warning">Tambah Kategori</a>
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
                    <div class="form-group ">
                            <label">Kategori Buku</label>
                            @if ($kategori -> isEmpty()) 
                                <select name="" class="form-control form-select" id="">
                                    <option>Tambahkan Kategori Terlebih Dahulu</option>
                                </select>    
                            @else 
                            <select name="id_kategori" class="form-control form-select" id="">
                                    @foreach ($kategori as $item)
                                    <option value="{{$item->id}}">{{$item->name}}</option>
                                    @endforeach
                                </select>               
                            @endif
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