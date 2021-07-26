<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UserController extends Controller
{

    public function store(Request $request, $id){

    }


    public function show($id){
        return User::find($id);
    }
}
