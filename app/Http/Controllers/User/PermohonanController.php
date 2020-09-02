<?php

namespace App\Http\Controllers\User;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Pemohon;
use App\Models\Permohonan;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class PermohonanController extends CustomController
{
    //
    /**
     * PermohonanController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $permohonan = Permohonan::with(['pemohon'])->get();

        return view('admin.permohonan.permohonan')->with(['permohonan' => $permohonan]);
    }

    public function detail($id)
    {

        $permohonan = Permohonan::with(['pemohon'])->where('no_permohonan', $id)->firstOrFail();

        return view('detail')->with(['permohonan' => $permohonan]);
    }

}
