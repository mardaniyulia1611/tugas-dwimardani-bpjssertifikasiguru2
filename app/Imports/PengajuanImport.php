<?php

namespace App\Imports;

use App\Models\Pengajuan;
use Maatwebsite\Excel\Concerns\ToModel;

class PengajuanImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Pengajuan([
            'nomor_pengajuan' =>$row[1],
            'tanggal_pengajuan'=>$row[2],
            'keterangan'=> $row['3'],
            
        ]);
    }
}
