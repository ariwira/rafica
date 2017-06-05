<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cabang extends Model
{
    protected  $table = 'cabang';

    protected $fillable = ['nama'
    ];
    public $timestamps = false;
    public function data_input(){
        return $this->belongsToMany('App\DataInput', 'cabang_input', 'cabang_id', 'input_id');
    }
    public function data(){
        return $this->hasMany('App\Data');
    }
}
