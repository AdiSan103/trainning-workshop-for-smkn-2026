<?php

namespace Database\Seeders;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $kelas = collect([
            'X RPL 1',
            'XI RPL 1',
            'XI RPL 2',
            'XII RPL 1',
        ])->map(fn ($nama) => Kelas::firstOrCreate(['nama_kelas' => $nama]));

        $siswa = [
            ['nis' => '2024.01.001', 'nama' => 'Ahmad Fauzi', 'jenis_kelamin' => 'L'],
            ['nis' => '2024.01.002', 'nama' => 'Bella Saraswati', 'jenis_kelamin' => 'P'],
            ['nis' => '2024.01.003', 'nama' => 'Candra Wijaya', 'jenis_kelamin' => 'L'],
            ['nis' => '2024.01.004', 'nama' => 'Dewi Anggraini', 'jenis_kelamin' => 'P'],
            ['nis' => '2024.01.005', 'nama' => 'Eko Prasetyo', 'jenis_kelamin' => 'L'],
            ['nis' => '2024.01.006', 'nama' => 'Fitri Handayani', 'jenis_kelamin' => 'P'],
            ['nis' => '2024.01.007', 'nama' => 'Gede Bayu', 'jenis_kelamin' => 'L'],
            ['nis' => '2024.01.008', 'nama' => 'Komang Ayu', 'jenis_kelamin' => 'P'],
        ];

        foreach ($siswa as $i => $data) {
            Siswa::firstOrCreate(
                ['nis' => $data['nis']],
                $data + ['kelas_id' => $kelas[$i % $kelas->count()]->id]
            );
        }
    }
}
