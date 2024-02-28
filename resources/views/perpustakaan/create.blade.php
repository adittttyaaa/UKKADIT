@extends('layout/aplikasi')

@section('konten')
<form method="POST" action="/perpustakaan" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="bukuid" class="form-label">Buku Id</label>
        <input type="bukuid" class="form-control" id="bukuid" name="bukuid" value="{{ Session::get('bukuid')}}">
    </div>
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="judul" class="form-control" id="judul" name="judul" value="{{ Session::get('judul')}}">
    </div>
    <div class="mb-3">
        <label for="penulis" class="form-label">Penulis</label>
        <input type="penulis" class="form-control" id="penulis" name="penulis" value="{{ Session::get('penulis')}}">
    </div>
    <div class="mb-3">
        <label for="penerbit" class="form-label">Penerbit</label>
        <input type="penerbit" class="form-control" id="penerbit" name="penerbit" value="{{ Session::get('penerbit')}}">
    </div>
    <div class="mb-3">
        <label for="tahunterbit" class="form-label">Tahun Terbit</label>
        <input type="tahunterbit" class="form-control" id="tahunterbit" name="tahunterbit"value="{{ Session::get('tahunterbit')}}">
    </div>
    <div class="mb-3">
        <label for="foto" class="form-label">Foto</label>
        <input type="file" class="form-control" id="foto" name="foto">
    </div>
    <div>
        <button type="submit" class="btn btn-primary">SIMPAN</button>
        <a href="/perpustakaan" class="btn btn-dark">KEMBALI</a>
    </div>
@endsection