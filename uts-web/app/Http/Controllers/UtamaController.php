<?php

namespace App\Http\Controllers;

class UtamaController extends Controller
{

    function home() {
        return view('welcome');
    }

    function bro() {
        return view("user.view-2");
    }

    function saya() {
        return view("user.view-1");
    }


    function bot() {
        return view("user.detail");
    }

    function apakabar() {
        return "apa kabar cok";
    }

    function hello($nama="") {
        return view("hello");
    }

    function haii($nama) {
        return "Hello $nama";
    }


    



    public function index()
{
    return view("test-tema"); // view dengan tamplate
}

}
