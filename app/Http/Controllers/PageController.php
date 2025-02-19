<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index() {
        return 'Selamat Datang';
    }

    public function about() {
        return 'Nama : Firman Dzaki Rahman <br>
                NIM : 2341760098';
    }

    public function articles($id) {
        return 'Artikel dengan ID : '.$id;
    }
}
