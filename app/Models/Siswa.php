<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'idSiswa',
        'nama',
        'nisn',
        'asalSekolah',
        'nilaiIPA',
        'nilaiIPS',
        'nilaiMTK',
        'nilaiBING',
        'nilaiBINDO',
        'nilaiPPKN',
        'nilai_hasil',
        'kesimpulan'
    ];

    protected $primaryKey = 'idSiswa';


}
