<?php

namespace App\Repositories;

use App\Models\User;

class UserRepository
{
    public function getAllUser(){
        return User::all()->sortByDesc('name');
    }
}