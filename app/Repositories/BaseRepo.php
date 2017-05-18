<?php
/**
 * Created by PhpStorm.
 * User: ariwira
 * Date: 5/16/17
 * Time: 10:59 AM
 */

namespace App\Repositories;
use App\User;
use App\Cabang;
use App\DataInput;
use App\Data;
class BaseRepo
{
    protected $model;
    public function getAll(){
        try{
            $instance = $this->model;
            return $instance::all();
//            switch ($instance){
//                case 'App\User':
//                    return User::all();
//                    break;
//                case 'App\Cabang':
//                    return Cabang::all();
//                    break;
//                case 'App\DataInput':
//                    return DataInput::all();
//                    break;
//                case 'App\Data':
//                    return Data::all();
//                    break;
//            }
        }catch (\Exception $exception){
            throw $exception;
        }
    }

    public function getOne($id){
        try{
            $instance = $this->model;
            $var = $instance::find($id);
            if (empty($var)){
                throw new \Exception('not found');
            }
            return $var;
        }catch (\Exception $exception){
            throw $exception;
        }
    }

    public function getPaginate($limit){
        try{
            $instance = $this->model;
            $var = $instance::paginate($limit);
            if (empty($var)){
                throw new \Exception('not found');
            }
            return $var;
        }catch (\Exception $exception){
            throw $exception;
        }
    }

    public function createOne($data){
        try{
            $instance = $this->model;
            return $instance::create($data);
        }catch (\Exception $exception){
            throw $exception;
        }
    }

    public function updateOne($id, $data){
        try{
            $instance = $this->model;
            $var = $instance::find($id);
            if (empty($var)){
                throw new \Exception('not found');
            }
            return $var->update($data);
        }catch (\Exception $exception){
            throw $exception;
        }
    }

    public function deleteOne($id){
        try{
            $instance = $this->model;
            $var = $instance::find($id);
            if (empty($var)){
                throw new \Exception('not found');
            }
            return $var->delete();
        }catch (\Exception $exception){
            throw $exception;
        }
    }
}