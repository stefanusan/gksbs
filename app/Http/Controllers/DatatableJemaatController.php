<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\DB;
use App\Models\Jiwa;
use App\Models\AnakRemajaPemuda;
use App\Models\BaptisSidiPertobatanTunanganPernikahan;
use App\Models\LahirMasukPindahMeninggalKeluar;
use App\Models\PelayanKatekisasiPelayanIbadahAnak;
use App\Models\PesertaKatekisasi;

class DatatableJemaatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $jiwa = Jiwa::all();
        $jiwa = DB::select('SELECT kelompok, kk, 
                                (l_dewasa+p_dewasa+l_pemuda+p_pemuda+l_remaja+p_remaja+l_anak+p_anak) 
                                AS jumlah FROM jiwas');

        // $anakremajapemuda = AnakRemajaPemuda::all();
        $anakremajapemuda = DB::select('SELECT kelompok, (l_anak+p_anak) AS jumlah_anak, 
                                        (l_remaja+p_remaja) AS jumlah_remaja, (l_pemuda+p_pemuda) AS jumlah_pemuda
                                        FROM anak_remaja_pemudas');

        // $baptissidipertobatantunanganpernikahan = BaptisSidiPertobatanTunanganPernikahan::all();
        // $lahirmasukpindahmeninggalkeluar = LahirMasukPindahMeninggalKeluar::all();

        // $pelayanankatekisasipelayananibadahanak = PelayanKatekisasiPelayanIbadahAnak::all();
        // $pesertakatekisasi = PesertaKatekisasi::all();

        return view('pages.datatablejemaat', 
            ['jiwa' => $jiwa], 
            ['anakremajapemuda' => $anakremajapemuda], 
            // ['baptissidipertobatantunanganpernikahan' => $baptissidipertobatantunanganpernikahan], 
            // ['lahirmasukpindahmeninggalkeluar' => $lahirmasukpindahmeninggalkeluar], 
            // ['pelayanankatekisasipelayananibadahanak' => $pelayanankatekisasipelayananibadahanak], 
            // ['pesertakatekisasi' => $pesertakatekisasi]
        );
    }

    public function indexadmin()
    {
        return view('admin.datatablejemaat');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
