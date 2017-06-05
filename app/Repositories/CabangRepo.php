<?php
/**
 * Created by PhpStorm.
 * User: selamet
 * Date: 5/16/17
 * Time: 11:00 AM
 */

namespace App\Repositories;
use App\Cabang;


class CabangRepo extends BaseRepo
{
    public function __construct()
    {
        $this->model = Cabang::class;
    }


//    public function getAll(){
//        try{
//            return Cabang::all();
//        }catch (\Exception $exception){
//            throw $exception;
//        }
//    }
//
//    public function getOne($id){
//        try{
//            $cabang = Cabang::find($id);
//            if (empty($cabang)){
//                throw new \Exception('not found');
//            }
//            return $cabang;
//        }catch (\Exception $exception){
//            throw $exception;
//        }
//    }
//
//    public function createOne($data){
//        try{
//            return Cabang::create($data);
//        }catch (\Exception $exception){
//            throw $exception;
//        }
//    }
//
//    public function updateOne($id, $data){
//        try{
//            $cabang = Cabang::find($id);
//            if (empty($cabang)){
//                throw new \Exception('not found');
//            }
//            return $cabang->update($data);
//        }catch (\Exception $exception){
//            throw $exception;
//        }
//    }
//
//    public function deleteOne($id, $data){
//        try{
//            $cabang = Cabang::find($id);
//            if (empty($cabang)){
//                throw new \Exception('not found');
//            }
//            return $cabang->delete();
//        }catch (\Exception $exception){
//            throw $exception;
//        }
//    }
}