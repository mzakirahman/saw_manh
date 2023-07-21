<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kriterias extends Model
{
    use HasFactory;

    protected $fillable = [
        'idKriteria',
        'idSiswa',
        'namaSiswa',
        'kriteria1',
        'kriteria2',
        'kriteria3',
        'kriteria4',
        'kriteria5',
        'kriteria6'
    ];

    protected $primaryKey = 'idKriteria';

    // public function bobot()
    // {
    //     return $this->hasMany(Bobot::class);
    // }
}
