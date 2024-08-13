<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'kelas',
        'nilai',
        'matematika',
        'kimia',
        'fisika',
        'biologi',
        'sejarah',
    ];
}
