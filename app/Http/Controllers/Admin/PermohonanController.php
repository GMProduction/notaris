<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Models\Pemohon;
use App\Models\Permohonan;
use Illuminate\Http\Request;

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

    public function addForm()
    {
        $pemohon = Pemohon::all();
        return view('admin.permohonan.tambahpermohonan')->with(['pemohon' => $pemohon]);
    }

    public function add()
    {
        $permohonan = $this->generateImageName('filePermohonan');
        $data = [
            'pemohon_id' => $this->postField('pemohon_id'),
            'nama_dokumen' => $this->postField('namaDokumen'),
            'tgl_permohonan' => $this->postField('tgl_permohonan'),
            'luas_sementara' => $this->postField('luas_sementara'),
            'hak_milik' => $this->postField('hak_milik'),
            'status' => '0',
            'lokasi' => $this->postField('lokasi'),
            'no_permohonan' => 'PR-' . date('YmdHis'),
            'url' => $permohonan,
        ];
        $this->uploadImage('filePermohonan', $permohonan, 'permohonan');
        $this->insert(Permohonan::class, $data);
        return redirect()->back()->with(['success' => 'Success']);
    }
}
