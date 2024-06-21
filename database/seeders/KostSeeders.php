<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KostSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kost')->insert([
            'nama' => 'Kost Mendalo',
            'jenis_kost' => 'Campuran',
            'alamat_kost' => 'Mendalo Asri',
            'telepon' => '08964354278',
            'nominal_harga' => '500.000/bulan',
            'spesifikasi_tipe_kamar' => 'estetik',
            'fasilitas_kamar' => 'wifi dll',
            'fasilitas_kamar_mandi' => 'lengkap',
            'fasilitas_umum' => 'parkiran',
            'peraturan' => 'tidak boleh melawan orang tua',
            'ketentuan_pengajuan_sewa' => 'harus bayar',
            'unggulan' => 'tidak',
            'gambar' => '-'

        ]);
    }
}
