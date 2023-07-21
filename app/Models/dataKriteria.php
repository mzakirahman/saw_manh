<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dataKriteria extends Model
{
    // use HasFactory;
    use SoftDeletes;
    protected $table = 'data_kriteria';
    protected $primaryKey = 'id_datakriteria';
    protected $fillable = ['kode_kriteria','nama_kriteria','bobot'];
    protected $dates = ['deleted_at'];


    public function sub()
    {
        // $valu_dt = new value_data_uji;
        return $this->hasOne(bobots::class,'id_datakriteria','id');
    }
}
