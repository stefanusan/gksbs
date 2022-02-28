<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\Agenda;
use App\Models\Agenda2;
use App\Models\Agenda3;
use App\Models\Agenda4;
use App\Models\Agenda5;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agenda = Agenda::all();
        $agenda2 = Agenda2::all();
        $agenda3 = Agenda3::all();
        $agenda4 = Agenda4::all();
        $agenda5 = Agenda5::all();
        return view('pages.agenda', 
                        ['agenda' => $agenda, 
                        'agenda2' => $agenda2, 
                        'agenda3' => $agenda3, 
                        'agenda4' => $agenda4, 
                        'agenda5' => $agenda5]);        
        
    }

    public function indexadmin()
    {
        //
        return view('admin.agenda');
        
    }

    public function indexadminagenda1()
    {
        //
        $agenda = Agenda::all();
        return view('admin.agenda1', ['agenda' => $agenda]);        
        
    }

    public function indexadminagenda2()
    {
        //
        $agenda2 = Agenda2::all();
        return view('admin.agenda2', ['agenda2' => $agenda2]);        
        
    }

    public function indexadminagenda3()
    {
        //
        $agenda3 = Agenda3::all();
        return view('admin.agenda3', ['agenda3' => $agenda3]);        
        
    }

    public function indexadminagenda4()
    {
        //
        $agenda4 = Agenda4::all();
        return view('admin.agenda4', ['agenda4' => $agenda4]);        
        
    }

    public function indexadminagenda5()
    {
        //
        $agenda5 = Agenda5::all();
        return view('admin.agenda5', ['agenda5' => $agenda5]);        
        
    }

    public function indexadminagenda6()
    {
        //
        $agenda6 = Agenda6::all();
        return view('admin.agenda6', ['agenda6' => $agenda6]);        
        
    }

    public function create()
    {
        return view('crud_tambah.addagenda1');
    }

    public function store(Request $request)
    {
        $agenda = new Agenda;
        $agenda->kegiatan = $request->input('kegiatan');
        $agenda->waktu = $request->input('waktu');
        $agenda->sasaran = $request->input('sasaran');
        $agenda->jejaring = $request->input('jejaring');
        $agenda->pelaksana = $request->input('pelaksana');
        $agenda->tahun = $request->input('tahun');
        $agenda->output = $request->input('output');
        
        $agenda->save();
        return redirect()->action([AgendaController::class, 'indexadminagenda1'])->with('status','Agenda Berhasil Ditambahkan');
    }

    public function edit($id)
    {
        $agenda = Agenda::find($id);
        return view('crud_edit.editagenda1', compact('agenda'));
    }

    public function update(Request $request, $id)
    {
        $agenda = Agenda::find($id);
        $agenda->kegiatan = $request->input('kegiatan');
        $agenda->waktu = $request->input('waktu');
        $agenda->sasaran = $request->input('sasaran');
        $agenda->jejaring = $request->input('jejaring');
        $agenda->pelaksana = $request->input('pelaksana');
        $agenda->tahun = $request->input('tahun');
        $agenda->output = $request->input('output');

        $agenda->update();
        return redirect()->action([AgendaController::class, 'indexadminagenda1'])->with('status','Agenda1 Berhasil Diubah');
    }

    public function destroy($id)
    {
        $agenda = Agenda::find($id);
        
        $agenda->delete();
        return redirect()->back()->with('status','Agenda1 Berhasil Dihapus');
    }

}
