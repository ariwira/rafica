<?php
/**
 * Created by PhpStorm.
 * User: selamet
 * Date: 5/16/17
 * Time: 11:00 AM
 */

namespace App\Repositories;

use App\DataInput;

class DataInputRepo extends BaseRepo
{
    public function __construct()
    {
        $this->model = DataInput::class;
    }

    public function getByCabang($userId)
    {
        try{
            $data = DataInput::select('input.id','input.cabang_id','score1','score2','score3','score4','score5',
                'cabang.nama','users.name','users.username','users.email','users.jabatan')
                ->join('cabang','input.cabang_id','=','cabang.id')
                ->join('users','cabang.user_id','=','users.id')
                ->where('user_id','=',$userId)
                ->get();
            if (empty($data)){
                throw new \Exception('not found');
            }
            return $data;
        }catch (\Exception $exception){
            throw $exception;
        }
    }

    public function attach($id,$data)
    {
        try{
            $input = DataInput::find($id);
            if (empty($input)){
                throw new \Exception('not found');
            }
            $input->cabang()->attach($data);
            return $input->save();
        }catch (\Exception $exception){
            throw $exception;
        }
    }
}