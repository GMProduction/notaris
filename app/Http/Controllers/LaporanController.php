<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\model\t_advokat;
use App\model\t_jadwal;
use App\model\t_kasus;
use App\model\t_pemohon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LaporanController extends Controller
{
    public function adminDataPemohon(Request $request)
    {
//        $pemohon = t_pemohon::all();
        return view('admin.pemohon.cetak')->with(['pemohons' => "pemohon"]);
    }

    public function cetakAdminDataPemohon(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataPemohon($request))->setPaper('b4', 'potrait');
        return $pdf->stream();
//        return $this->adminDataPemohon($request);
    }

    public function adminDataPermohonan(Request $request)
    {
//        $pemohon = t_pemohon::all();
        return view('admin.permohonan.cetak')->with(['permohonans' => "pemohon"]);
    }

    public function cetakAdminDataPermohonan(Request $request)
    {

        $pdf = \App::make('dompdf.wrapper');
        $pdf->loadHTML($this->adminDataPermohonan($request))->setPaper('b4', 'potrait');
        return $pdf->stream();
//        return $this->adminDataPemohon($request);
    }
}
