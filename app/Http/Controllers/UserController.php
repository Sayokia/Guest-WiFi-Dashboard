<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $userData = DB::table("users")
            ->select('id','name','email','phone','admin','created_at')->get();
        return view('users.index', ['users'=> $userData]);
    }


    public function edit($uid){
        $userData = DB::table("users")
            ->select('id','name','email','phone','admin','created_at')
            ->where('id','=',$uid)
            ->get();
        return view('users.edit', ['user'=> $userData]);
    }


}
