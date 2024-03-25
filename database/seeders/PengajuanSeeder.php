<?php

namespace Database\Seeders;
use App\Models\Pengajuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pengajuan::create([

            'nomor_pengajuan'  => '1222222',
            'tanggal_pengajuan'=> '2024-04-30',
            'keterangan'=> 'DID',

        ]);
    }
}
