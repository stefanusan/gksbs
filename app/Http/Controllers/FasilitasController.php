<?php

namespace App\Http\Controllers;

use App\Models\Fasilitas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class FasilitasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages.fasilitas');
    }

    public function indexadmin()
    {
        //
        DB::statement(DB::raw('set @row:=0'));
        $fasilitas = DB::table('fasilitas')
        ->select(DB::raw('@row:=@row+1 as row'),'id', 'nama', 'gambar')->get();
        // $fasilitas = Fasilitas::all();
        return view('admin.fasilitas', ['fasilitas'=>$fasilitas]);

    }

    public function create()
    {
        return view('crud_tambah.addfasilitas');
    }

    public function store(Request $request)
    {
        $fasilitas = new Fasilitas;
        $fasilitas->nama = $request->input('nama');

        if($request->hasfile('gambar'))
        {
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/fasilitas/', $filename);
            $fasilitas->gambar = $filename;
        }

        $fasilitas->save();
        return redirect()->action([FasilitasController::class, 'indexadmin'])->with('status','Fasilitas Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $fasilitas = Fasilitas::find($id);
        return view('crud_edit.editfasilitas', compact('fasilitas'));
    }

    public function update(Request $request, $id)
    {
        $fasilitas = Fasilitas::find($id);
        $fasilitas->nama = $request->input('nama');

        if($request->hasfile('gambar'))
        {
            $destination = 'uploads/fasilitas/'.$fasilitas->gambar;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/fasilitas/', $filename);
            $fasilitas->gambar = $filename;
        }

        $fasilitas->update();
        return redirect()->action([FasilitasController::class, 'indexadmin'])->with('status','Fasilitas Berhasil Diubah');
    }

    public function destroy($id)
    {
        $fasilitas = Fasilitas::find($id);
        $destination = 'uploads/fasilitas/'.$fasilitas->gambar;
        if(File::exists($destination))
        {
            File::delete($destination);
        }
        $fasilitas->delete();
        return redirect()->back()->with('status','Fasilitas Berhasil Dihapus');
    }
}
