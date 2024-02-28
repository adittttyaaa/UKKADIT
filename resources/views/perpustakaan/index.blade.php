@extends('layout/aplikasi')

@section('konten')
<div class="container py-3">
    <a href="perpustakaan/create" class="btn btn-outline-primary">+ Tambah Buku</a>
    <form class="form float-end" method="get" action="search">
        <div class="form-group w-100 mb-3">
            <input type="text" name="search" class="form-control w-75 d-inline" id="search" placeholder="Cari Judul Buku...">
            <button type="submit" class="btn btn-outline-success mb-1"><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
    </form>
</div>
<table class="table table-bordered border-success">
    <tr class="table table-dark text-center">
            <th>Buku ID</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $item)
        <tbody class="text-center">
            <td>{{ $item->bukuid}}</td>
            <td>{{ $item->judul}}</td>
            <td>{{ $item->penulis}}</td>
            <td>{{ $item->penerbit}}</td>
            <td>{{ $item->tahunterbit}}</td>
            <td>
                <a class="btn btn-outline-secondary btn-sm" 
                href="{{'/perpustakaan/'.$item->bukuid.'/edit'}}">
                Update <i class="fa-solid fa-pen-clip"></i>
                </a>
                -
                <form onsubmit="return confrim('yakin mau hapus data??')" class="d-inline" 
                action="{{'/perpustakaan/'.$item->bukuid}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger btn-sm" type="submit"><i class="fa-regular fa-trash-can"></i></button>
                </form>
            </td>
        @endforeach
        </tbody>
    </table>
    {{ $data->links()}}
@endsection