<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        DB::statement(DB::raw('set @row:=0'));
        $berita = DB::table('berita')
        ->select(DB::raw('@row:=@row+1 as row'),'id', 'judul', 'deskripsi', 'gambar')->get();
        // $berita = Berita::all();
        return view('home', ['berita'=>$berita]);
    }

    public function create()
    {
        return view('admin.tambahadmin');
    }

    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('crud_edit.editberita', compact('berita'));
    }

    public function update(Request $request, $id)
    {
        $berita = Berita::find($id);
        $berita->judul = $request->input('judul');
        $berita->deskripsi = $request->input('deskripsi');

        if($request->hasfile('gambar'))
        {
            $destination = 'uploads/berita/'.$berita->gambar;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/berita/', $filename);
            $berita->gambar = $filename;
        }

        $berita->update();
        return redirect()->action([HomeController::class, 'index'])->with('status','Fasilitas Berhasil Diubah');
    }

    public function destroy($id)
    {
        $berita = Berita::find($id);
        $destination = 'uploads/berita/'.$berita->gambar;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $berita->delete();
        return redirect()->back()->with('status','Berita Berhasil Dihapus');
    }

}
