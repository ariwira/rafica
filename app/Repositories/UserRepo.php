<?php
/**
 * Created by PhpStorm.
 * User: selamet
 * Date: 5/16/17
 * Time: 11:00 AM
 */

namespace App\Repositories;

use App\User;

class UserRepo extends BaseRepo
{
    public function __construct()
    {
        $this->model = User::class;
    }
}