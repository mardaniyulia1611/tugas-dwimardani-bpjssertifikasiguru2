<?php

namespace App\Imports;

use App\Models\Detail;
use Maatwebsite\Excel\Concerns\ToModel;

class DetailImport implements ToModel
{
    protected $pengajuanId;

    public function __construct($pengajuanId)
    {
        $this->pengajuanId = $pengajuanId;
    }

    public function model(array $row)
    {
        return new Detail([
            'pengajuan_id' => $this->pengajuanId,
            'nominal' => $row['nominal'],
            // Tambahkan kolom lain sesuai kebutuhan
        ]);
    }
}
