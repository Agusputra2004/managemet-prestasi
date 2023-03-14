<?php

namespace App\Http\Controllers;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;


class PdfController extends Controller
{
    public function index() {
        $artikel = Artikel::all();
        $ak = Artikel::where('kategori_id', '1')->count();
        $nak = Artikel::where('kategori_id', '2')->count();
        $date = Carbon::now()->format('d-m-Y');

        return view('front.pdf.index',compact('artikel','ak','nak','date'));
    }
 
    public function cetak_pdf() {
    	$artikel = Artikel::all();
        $ak = Artikel::where('kategori_id', '1')->count();
        $nak = Artikel::where('kategori_id', '2')->count();
        $date = Carbon::now()->format('d-m-Y');

    	// $pdf = PDF::loadView('laporanpdf', compact('artikel','ak','nak','date'));
    	return view('laporanpdf', compact('artikel','ak','nak','date'));
    }
}
