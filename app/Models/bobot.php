<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bobot extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'c1',
        'c2',
        'c3',
        'c4',
        'c5',
        'c6',
       
    ];

    protected $primaryKey = 'id';
}
