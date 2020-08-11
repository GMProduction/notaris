<?php

namespace App\Http\Controllers\Admin;

use App\Helper\CustomController;
use App\Http\Controllers\Controller;
use App\Model\Admin;
use App\Models\Pemohon;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;

class PemohonController extends CustomController
{
    //
    /**
     * PemohonController constructor.
     */
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $pemohon = Pemohon::all();
        return view('admin.pemohon.pemohon')->with(['pemohon' => $pemohon]);
    }

    public function addForm()
    {
        return view('admin.pemohon.tambahpemohon');
    }

    public function add()
    {
        $ktp = $this->generateImageName('f_ktp');
        $npwp = $this->generateImageName('f_npwp');
        $kk = $this->generateImageName('f_kk');
        $data = [
            'nama' => $this->postField('nama'),
            'ktp' => $this->postField('ktp'),
            'kk' => $this->postField('kk'),
            'npwp' => $this->postField('npwp'),
            'sppt' => $this->postField('sppt'),
            'no_c' => $this->postField('no_c'),
            'saksi' => $this->postField('saksi'),
            'no_telp' => $this->postField('no_telp'),
            'url_ktp' => $ktp,
            'url_kk' => $kk,
            'url_npwp' => $npwp,
        ];
        $this->uploadImage('f_ktp', $ktp, 'ktp');
        $this->uploadImage('f_npwp', $npwp, 'npwp');
        $this->uploadImage('f_kk', $kk, 'kk');
        $this->insert(Pemohon::class, $data);
        return redirect()->back()->with(['success' => 'Success']);
    }

    public function detail($id)
    {
        if($this->request->isMethod('POST')){
            $data = [
                'nama' => $this->postField('nama'),
                'ktp' => $this->postField('ktp'),
                'kk' => $this->postField('kk'),
                'npwp' => $this->postField('npwp'),
                'sppt' => $this->postField('sppt'),
                'no_c' => $this->postField('no_c'),
                'saksi' => $this->postField('saksi'),
                'no_telp' => $this->postField('no_telp'),
            ];

            if ($this->request->hasFile('f_ktp')) {
                $ktp  = $this->generateImageName('f_ktp');
                $data = Arr::add($data, 'url_ktp', $ktp);
                $this->uploadImage('f_ktp', $ktp, 'ktp');
            }
            if ($this->request->hasFile('f_npwp')) {
                $npwp = $this->generateImageName('f_npwp');
                $data = Arr::add($data, 'url_npwp', $npwp);
                $this->uploadImage('f_npwp', $npwp, 'npwp');
            }
            if ($this->request->hasFile('f_kk')) {
                $kk   = $this->generateImageName('f_kk');
                $data = Arr::add($data, 'url_kk', $kk);
                $this->uploadImage('f_kk', $kk, 'kk');
            }
//            dump($data);die();
            $this->update(Pemohon::class, $data);
            return redirect()->back()->with(['success' => 'Success']);
        }

        $pemohon = Pemohon::findOrFail($id);
        return view('admin.pemohon.detailpemohon')->with(['pemohon' => $pemohon]);
    }
}
