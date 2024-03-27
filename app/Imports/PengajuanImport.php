<?php


namespace App\Imports;

use App\Models\Pengajuan;
use App\Models\detail; 
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use PhpOffice\PhpSpreadsheet\Shared\Date as ExcelDate;

class PengajuanImport implements ToCollection
{
    /**
     * @param array $row
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function collection(Collection $collection)
    {
        $indexKe = 1;

        foreach ($collection as $row) {
            if ($indexKe > 1) {
                $pengajuan = new Pengajuan();
                $pengajuan->nomor_pengajuan = !empty($row[0]) ? $row[0] : '';
                if (!empty($row[1])) {
                    $tanggalPengajuan = ExcelDate::excelToDateTimeObject($row[1]);
                    $pengajuan->tanggal_pengajuan = $tanggalPengajuan->format('Y-m-d');
                } else {
                    $pengajuan->tanggal_pengajuan = null;
                }
                $pengajuan->keterangan = !empty($row[2]) ? $row[2] : '';
                $pengajuan->save();

                $detailPengajuan = new detail();
                $detailPengajuan->nominal = !empty($row[3]) ? $row[3] : '';
                $detailPengajuan->pengajuan()->associate($pengajuan);
                $detailPengajuan->save();
            }
            $indexKe++;
        }
    }
}
