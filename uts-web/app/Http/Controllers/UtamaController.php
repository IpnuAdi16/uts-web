<?php

namespace App\Http\Controllers;

class UtamaController extends Controller
{
    public function test()
{
    return view("view-1");
}

    public function index()
{
        return view("test-tema"); // view dengan tamplate
}

}
