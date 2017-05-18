<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DataInput extends Model
{
    protected  $table = 'input';

    protected $fillable = [
        'cabang_id', 'score1', 'score2', 'score3', 'score4', 'score5'
    ];
    public function cabang(){
        return $this->belongsTo('App\Cabang', 'cabang_id');
    }
}
