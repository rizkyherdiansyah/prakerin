<?php

namespace App\Models;
App\Rw;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasus2 extends Model
{
    protected $fillable = ['jml_positif','jml_meninggal','jml_sembuh','tanggal','id_rw'];
    public $timestamps = true;

    public function Rw()
    {
        return $this->belongsTo('App\Models\Rw', 'id_rw');
    }
    use HasFactory;
}
