<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Models\Post;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class CetakController extends Controller
{
    public function cetakBuku()
    {
        // $buku = \App\Models\Post::all();
        // $pdf = PDF::loadview('buku_pdf',['buku'=>$buku]);
        // return $pdf->stream();

        $buku = Post::with('category')->get();
        return view('dashboard.posts.cetakBuku', compact('buku'));
    }
}
