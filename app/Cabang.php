<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    protected  $table = 'cabang';

    protected $fillable = [
        'user_id', 'nama'
    ];
    public $timestamps = false;
    public function user(){
        return $this->belongsTo('App\User', 'user_id');
    }
    public function data_input(){
        return $this->hasMany('App\DataInput');
    }
    public function data(){
        return $this->hasMany('App\Data');
    }
}
