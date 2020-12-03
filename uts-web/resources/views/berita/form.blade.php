@extends('layouts.frontend.master')

@section('content')
    <h1>Form Berita</h1.>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


    <form action="{{ route("berita_proses") }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="judul">Judul</label>
        <input type="text" name="Judul" class="form-control" placeholder="Masukan judul">

        <label for="gambar">Gambar</label>
        <input type="file" name="gambar" class="form-control" placeholder="Masukan gambar kejadian>

        <label for="tanggal">Tanggal</label>
        <input type="tanggal" name="tanggal" class="form-control" placeholder="Masukan tanggal kejadian">

        <label for="berita">Berita</label>
        <textarea name="berita" class="form-control" rows="12"></textarea>

        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" class="form-control" placeholder="Masukan nama penulis berita">

        <label for="umur">Umur</label>
        <input type="text" name="umur" class="form-control" placeholder="Masukan umur">


        <button type="submit" class="btn btn-primary">simpan</button>

@endsection
