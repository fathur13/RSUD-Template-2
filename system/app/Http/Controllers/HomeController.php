<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $header = Http::get('http://127.0.0.1:8000/api/theme/header');
        $content = Http::get('http://127.0.0.1:8000/api/theme/content');
        $footer = Http::get('http://127.0.0.1:8000/api/theme/footer');
        $berita = Http::get('http://127.0.0.1:8000/api/post/berita');
        $gambar = Http::get('http://127.0.0.1:8000/api/media/gambar');
        $dataheader = $header->json();
        $datacontent = $content->json();
        $datafooter = $footer->json();
        $databerita = $berita->json();
        $datagambar = $gambar->json();
        $a = 'Rsud Template 4';

        return view('base', compact(
            'dataheader',
            'datacontent',
            'datafooter',
            'databerita',
            'datagambar',
            "a"
        ));
    }
}
