<?php

namespace App\Exports;

use App\Models\Pengajuan;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class PengajuanExport implements FromCollection, WithMapping, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection


    */

    protected $pengajuanId;

     public function __construct($pengajuanId)
    {
    $this->pengajuanId = $pengajuanId;
    }

    public function collection()
    {

        return Pengajuan::where('id', $this->pengajuanId)->with('detail')->get();
    }

    /**
     * @var Pengajuan $pengajuan
     */
    public function map($pengajuan): array
    {
        $detailData = [];


        foreach ($pengajuan->detail as $detail) {
            array_push($detailData, $detail->nominal);
        }
        return [
            $pengajuan->id,
            $pengajuan->nomor_pengajuan,
            $pengajuan->tanggal_pengajuan,
            $pengajuan->keterangan,
            implode(", ", $detailData),
        ];
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'id',
            'nomor_pengajuan',
            'tanggal_pengajuan',
            'keterangan',
            'nominal',
        ];
    }
}
