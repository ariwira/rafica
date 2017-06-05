<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crud extends Model
{
    protected $table = 'crud';
    protected $primaryKey ='id';
    protected $fillable = ['judul', 'tahun', 'deskripsi'];
    public $timestamps = false;
    public function datainput(){
        return $this->hasOne('App\DataInput');
    }
}
