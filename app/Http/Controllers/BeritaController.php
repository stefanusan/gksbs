<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.berita');
    }

    public function create()
    {
        return view('crud_tambah.addberita');
    }


    public function store(Request $request)
    {
        $berita = new Berita;
        $berita->judul = $request->input('judul');
        $berita->deskripsi = $request->input('deskripsi');

        if($request->hasfile('gambar'))
        {
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/berita/', $filename);
            $berita->gambar = $filename;
        }

        $berita->save();
        return redirect()->action([HomeController::class, 'index'])->with('status','Berita Berhasil Ditambahkan');
    }
    
}
