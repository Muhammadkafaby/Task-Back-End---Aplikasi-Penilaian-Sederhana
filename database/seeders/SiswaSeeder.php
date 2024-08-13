<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Siswa;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $siswa = [
            ['nama'=> 'Satria', 'kelas' => '3A', 'nilai' => 90, 'matematika' => 90, 'kimia' => 88, 'fisika' => 100, 'biologi' => 82],
            ['nama' => 'Rio', 'kelas' => '3A', 'nilai' => 87, 'matematika' => 87, 'kimia' => 87, 'fisika' => 87, 'biologi' => 87],
            ['nama' => 'Santi', 'kelas' => '3C', 'nilai' => 86, 'matematika' => 86, 'kimia' => 86, 'fisika' => 86, 'biologi' => 86],
            ['nama' => 'Rani', 'kelas' => '3B', 'nilai' => 80, 'matematika' => 80, 'kimia' => 80, 'fisika' => 80, 'biologi' => 80],
            ['nama' => 'Andi', 'kelas' => '3A', 'nilai' => 75, 'matematika' => 75, 'kimia' => 75, 'fisika' => 75, 'biologi' => 75],
            ['nama' => 'Yuni', 'kelas' => '3B', 'nilai' => 74, 'matematika' => 74, 'kimia' => 74, 'fisika' => 74, 'biologi' => 74],
            ['nama' => 'Vera', 'kelas' => '3C', 'nilai' => 70, 'matematika' => 70, 'kimia' => 70, 'fisika' => 70, 'biologi' => 70],
                   ];

        foreach ($siswa as $data) {
            Siswa::create($data);
        }
    }
}