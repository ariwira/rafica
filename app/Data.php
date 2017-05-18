<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Data extends Model
{
    protected  $table = 'data';

    protected $fillable = [
        'user_id', 'cabang_id', 'score', 'minggu'
    ];
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    public function cabang(){
        return $this->belongsTo('App\Cabang', 'cabang_id');
    }
}
