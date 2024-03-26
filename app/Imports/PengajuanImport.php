<?php

namespace App\Imports;
use App\Models\Pengajuan;
use illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;


class PengajuanImport implements ToCollection
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
     public function collection(Collection $collection)
     {
       $indexKe = 1;

       foreach ($collection as $row) {

        if ($indexKe > 1) {

            $data['nomor_pengajuan'] = !empty($row[0]) ? $row[0] : '';
            $data['tanggal_pengajuan'] = !empty($row[1]) ? $row[1] : '';
            $data['keterangan']      = !empty($row[2]) ? $row[2] : '';

            Pengajuan::create($data);

        }
        $indexKe++;
     }
}
}
