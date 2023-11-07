<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $table = 'forms';

    protected $fillable = [
        'nama',
        'nip',
        'posisi',
        'direktorat',
        'tgl_masuk',
        'periode',
        'atasan',
        'view_amil_1',
        'view_amil_2',
        'view_amil_3',
        'view_amil_4',
        'skor_1',
        'skor_2',
        'skor_3',
        'skor_4',
        'skor_5',
        'skor_6',
        'skor_7',
        'skor_8',
        'skor_9',
        'view_atasan_1',
        'view_atasan_2',
        'view_atasan_3',
        'view_atasan_4',
        'view_atasan_5',
        'view_atasan_6',
        'view_atasan_7',
        'ttd_atasan',
        'ttd_atasan_tgl',
        'ttd_amil',
        'ttd_amil_tgl',
        'ttd_manajer',
        'ttd_manajer_tgl',
        'wa_amil',
        'wa_atasan',
    ];
}
