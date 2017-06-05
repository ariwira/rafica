<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataInput extends Model
{
    protected  $table = 'input';

    protected $fillable = [
        'crud_id','score1', 'score2', 'score3', 'score4', 'score5'
    ];
    public function cabang(){
        return $this->belongsToMany('App\DataInput', 'cabang_input', 'input_id', 'cabang_id');
    }
    public function crud(){
        return $this->belongsTo('App\Crud', 'crud_id');
    }
}
