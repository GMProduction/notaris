<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\model\t_advokat;
use App\model\t_jadwal;
use App\model\t_kasus;
use App\model\t_pemohon;
use App\Models\Pemohon;
use App\Models\Permohonan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function adminDataPemohon($id)
    {
        $pemohon = Pemohon::findOrFail($id);
//        return $pemohon->toArray();
        return view('admin.pemohon.cetak')->with(['p' => $pemohon]);
    }

    public function cetakAdminDataPemohon($id)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataPemohon($id))->setPaper('b4', 'potrait');
        return $pdf->stream();
//        return $this->adminDataPemohon($id);
    }

    public function adminDataPermohonan($id)
    {
//        $pemohon = t_pemohon::all();
        $permohonan = Permohonan::with(['pemohon'])->where('id', $id)->firstOrFail();
//        return $permohonan->toArray();
        return view('admin.permohonan.cetak')->with(['p' => $permohonan]);
    }

    public function cetakAdminDataPermohonan($id)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataPermohonan($id))->setPaper('b4', 'potrait');
        return $pdf->stream();
//        return $this->adminDataPermohonan($id);
    }
}
