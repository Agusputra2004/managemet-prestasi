<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Artikel;
use App\Models\Slide;
use App\Models\Iklan;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index() 
    {
        $category = Kategori::all();
        $artikel = Artikel::all();
        $slide = Slide::all();
        return view('front.home', [
            'category' => $category,
            'artikel' => $artikel,
            'slide' => $slide
        ]);
    }

    public function detail($slug){
        $category = Kategori::all();

        $artikel1 = Artikel::all();

        $iklanA = Iklan::where('id', '1')->first();

        $artikel = Artikel::where('slug', $slug)->first();

        $postinganTerbaru = Artikel::orderBy('created_at', 'DESC')->limit('5')->get();

        return view('front.artikel.detail-artikel', [
            'artikel' => $artikel,
            'artikel1' => $artikel1,
            'category' => $category,
            'iklanA' => $iklanA,
            'postinganTerbaru' => $postinganTerbaru,
        ]);
    }
}
