<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected  $table = 'data';

    protected $fillable = [
        'cabang_id', 'score', 'tahun'
    ];

    public function cabang(){
        return $this->belongsTo('App\Cabang', 'cabang_id');
    }
}
