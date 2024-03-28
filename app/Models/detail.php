<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = ['nominal', 'pengajuan_id']; 


    public function pengajuan()
    {
        return $this->belongsTo(Pengajuan::class);
    }
}
