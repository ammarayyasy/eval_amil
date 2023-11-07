<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \App\Models\Form;
use \App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin'),
        ]);

        Form::create([
            'nama' => 'Muhammad Ammar Ayyasy',
            'nip' => '0110221082',
            'posisi' => 'Magang',
            'direktorat' => 'Fullstack Programmer',
            'tgl_masuk' => '2023-08-20',
            'periode' => '6 bulan',
            'atasan' => 'Rosa Tri Rahardi',
            'view_amil_1' => 'Banyak',
            'view_amil_2' => 'BsDQEFCD',
            'view_amil_3' => 'Bdcscfvdc',
            'view_amil_4' => 'Bdcrefdcs',
            'skor_1' => '5',
            'skor_2' => '5',
            'skor_3' => '4',
            'skor_4' => '5',
            'skor_5' => '5',
            'skor_6' => '5',
            'skor_7' => '5',
            'skor_8' => '4',
            'skor_9' => '5',
            'view_atasan_1' => 'Keren',
            'view_atasan_2' => 'Kdcsfvvf',
            'view_atasan_3' => 'edcx cdfgvf',
            'view_atasan_4' => 'wfdvcx refv',
            'view_atasan_5' => 'qveadvcftgav',
            'view_atasan_6' => 'qveadvsaxfcddc',
            'view_atasan_7' => 'diperbarui',
            'wa_amil' => '081399808859',
            'wa_atasan' => '081399808859',
        ]);

        Form::create([
            'nama' => 'Gagas Amukti',
            'nip' => '0110221073',
            'posisi' => 'Magang',
            'direktorat' => 'Fullstack Programmer',
            'tgl_masuk' => '2023-08-20',
            'periode' => '6 bulan',
            'atasan' => 'Rosa Tri Rahardi',
            'view_amil_1' => 'Banyak',
            'view_amil_2' => 'BsDQEFCD',
            'view_amil_3' => 'Bdcscfvdc',
            'view_amil_4' => 'Bdcrefdcs',
            'skor_1' => '5',
            'skor_2' => '5',
            'skor_3' => '4',
            'skor_4' => '5',
            'skor_5' => '5',
            'skor_6' => '5',
            'skor_7' => '5',
            'skor_8' => '4',
            'skor_9' => '5',
            'view_atasan_1' => 'Keren',
            'view_atasan_2' => 'Kdcsfvvf',
            'view_atasan_3' => 'edcx cdfgvf',
            'view_atasan_4' => 'wfdvcx refv',
            'view_atasan_5' => 'qveadvcftgav',
            'view_atasan_6' => 'qveadvsaxfcddc',
            'view_atasan_7' => 'dihentikan',
            'wa_amil' => '081399808859',
            'wa_atasan' => '081399808859',
        ]);
    }
}
