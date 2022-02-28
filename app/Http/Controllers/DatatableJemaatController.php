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
        $jiwa = DB::select('SELECT id, kelompok, kk, l_dewasa,p_dewasa,l_pemuda,p_pemuda,l_remaja,p_remaja,l_anak,p_anak
                                FROM jiwas');

        return view('admin.datatablejemaat', ['jiwa' => $jiwa]);
    }

    public function edit($id)
    {
        $jiwa = Jiwa::find($id);
        return view('crud_edit.editdatatablejemaat', compact('jiwa'));
    }

    public function update(Request $request, $id)
    {
        //
        $jiwa = Jiwa::find($id);
        $jiwa->kelompok = $request->input('kelompok');
        $jiwa->kk = $request->input('kk');
        $jiwa->l_dewasa = $request->input('l_dewasa');
        $jiwa->p_dewasa = $request->input('p_dewasa');
        $jiwa->l_pemuda = $request->input('l_pemuda');
        $jiwa->p_pemuda = $request->input('p_pemuda');
        $jiwa->l_remaja = $request->input('l_remaja');
        $jiwa->p_remaja = $request->input('p_remaja');
        $jiwa->l_anak = $request->input('l_anak');
        $jiwa->p_anak = $request->input('p_anak');

        $jiwa->update();
        return redirect()->action([DatatableJemaatController::class, 'indexadmin'])->with('status','Data Jemaat Berhasil Diubah');
    }

    public function destroy($id)
    {
        //

    }

}
