<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Resources\User as UserResource;

class NewController extends Controller
{
    public function user(){
        return new UserResource(User::find(1));
    }
    // for resoource collection
    // Route::get('/user', function(){
    //    return UserResource::collection(User:;all()); 
    // });
}
