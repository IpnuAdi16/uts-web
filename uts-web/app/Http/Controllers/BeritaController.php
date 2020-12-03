<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeritaController extends Controller
{
    public function add()
    {
        return view("berita.form");
    }

    public function pro(request $request)
    {

        $validasi = $request->validate([
            "Judul" => ["required"],
            "berita" => ['required'],
            "penulis" => ['required'],
            "Umur" =>['numeric'],
        ]);

        $nama_file =  time().".".$request->file("gambar")->extension();

        $request->file("gambar")->move(public_path(), $nama_file);

        echo "<img src='/$nama_file'>";

        echo $request->get("Judul");
        echo $request->get("berita");
        echo $request->get("penulis");

        echo"<br>form ini di proses";
    }
}