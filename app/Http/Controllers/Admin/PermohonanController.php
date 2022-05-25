<?php

namespace App\Http\Controllers\Admin;

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

    public function dashboard()
    {
        $permohonan = Permohonan::with(['pemohon'])->get();

        return view('admin.dashboard')->with(['permohonan' => $permohonan]);
    }

    public function addForm()
    {
        $pemohon = Pemohon::all();

        return view('admin.permohonan.tambahpermohonan')->with(['pemohon' => $pemohon]);
    }

    public function add()
    {
        $permohonan = $this->generateImageName('filePermohonan');
        $data       = [
            'pemohon_id'     => $this->postField('pemohon_id'),
            'nama_dokumen'   => $this->postField('namaDokumen'),
            'tgl_permohonan' => $this->postField('tgl_permohonan'),
            'luas_sementara' => $this->postField('luas_sementara'),
            'hak_milik'      => $this->postField('hak_milik'),
            'status'         => '0',
            'lokasi'         => $this->postField('lokasi'),
            'no_permohonan'  => 'PR-'.date('YmdHis'),
            'url'            => $permohonan,
        ];
        $this->uploadImage('filePermohonan', $permohonan, 'permohonan');
        $this->insert(Permohonan::class, $data);

        return redirect()->back()->with(['success' => 'Success']);
    }

    public function detail($id)
    {

        $permohonan = Permohonan::with(['pemohon'])->where('id', $id)->firstOrFail();

        return view('admin.permohonan.detailpermohonan')->with(['permohonan' => $permohonan]);
    }

    public function edit($id)
    {
        if ($this->request->isMethod('POST')) {
            $data = [
                'pemohon_id'     => $this->postField('pemohon_id'),
                'nama_dokumen'   => $this->postField('namaDokumen'),
                'tgl_permohonan' => $this->postField('tgl_permohonan'),
                'luas_sementara' => $this->postField('luas_sementara'),
                'hak_milik'      => $this->postField('hak_milik'),
                'lokasi'         => $this->postField('lokasi'),
            ];
            if ($this->request->hasFile('filePermohonan')) {
                $permohonan = $this->generateImageName('filePermohonan');
                $data       = Arr::add($data, 'url', $permohonan);
                $this->uploadImage('filePermohonan', $permohonan, 'permohonan');
            }
            $this->update(Permohonan::class, $data);

            return redirect()->back()->with(['success' => 'success']);
        }
        $permohonan = Permohonan::with(['pemohon'])->where('id', $id)->firstOrFail();
        $pemohon    = Pemohon::all();
//        return $permohonan->toArray();
        $data['permohonan'] = $permohonan;
        $data['pemohon']    = $pemohon;

        return view('admin.permohonan.editpermohonan')->with($data);
    }

    public function patchUkur()
    {
        $data = [
            'luas_ukur' => $this->postField('luasukur'),
            'tgl_ukur'  => $this->postField('tgl_ukur'),
            'status'    => '1',
        ];
        $this->update(Permohonan::class, $data);

        return redirect()->back()->with(['success' => 'Success']);
    }

    public function edit_status()
    {
        try {
            $data = [
              'status' => $this->postField('status')
            ];
            $res = $this->update(Permohonan::class, $data);
            $data = [
              'data' => $res
            ];
            return $this->jsonResponse($data, 200);
        } catch (\Exception $err) {
            return $this->jsonResponse('error '.$err, 500);
        }
    }
}
