<?php

namespace App\Imports;

use App\Models\Pengajuan;
use App\Models\detail;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class PengajuanImport implements ToCollection
{
    public function collection(Collection $collection)
    {
        foreach ($collection as $index => $row) {
            if ($index > 0) {
                $pengajuan = Pengajuan::firstOrCreate([
                    'nomor_pengajuan' => !empty($row[0]) ? $row[0] : null,
                ], [
                    'tanggal_pengajuan' => !empty($row[1]) ? $this->transformDate($row[1]) : null,
                    'keterangan' => !empty($row[2]) ? $row[2] : null,
                ]);

                if (!empty($row[3])) {
                    $detailPengajuan = new detail([
                        'nominal' => $row[3],
                    ]);
                    $detailPengajuan->pengajuan_id = $pengajuan->id;
                    $detailPengajuan->save();
                }
            }
        }
    }

    /**
     *
     * @param mixed $value
     * @return string|null
     */
    private function transformDate($value)
    {
        if (empty($value)) {
            return null;
        }

        try {
            $date = \PhpOffice\PhpSpreadsheet\Shared\Date::excelToDateTimeObject($value);
            return $date->format('Y-m-d');
        } catch (\Throwable $th) {
            return null;
        }
    }
}
