<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    protected $fillable = ['id_kota','kode_kecamatan','nama_kecamatan'];
    public $timestamps = true;

    public function Kota()
    {
        return $this->belongsTo('App\Models\Kota', 'id_kota');
    }

    public function Kelurahan()
    {
        return $this->hasMany('App\Models\Kelurahan', 'id_kecamatan' );
    }
    use HasFactory;
}
