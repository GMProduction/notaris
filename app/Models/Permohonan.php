<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permohonan extends Model
{
    //
    protected $table = 'permohonan';

    public function pemohon()
    {
        return $this->belongsTo(Pemohon::class);
    }
}
