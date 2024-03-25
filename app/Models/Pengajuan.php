<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    use HasFactory;
protected $fillable = ['nomor_pengajuan', 'tanggal_pengajuan', 'keterangan'];


public function detail()
{
    return $this->hasMany(detail::class);
}

}
