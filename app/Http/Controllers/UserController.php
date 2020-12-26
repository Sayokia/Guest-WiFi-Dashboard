<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
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
            ->select('id','sid','name','email','phone','admin','created_at')
            ->where('id','=',$uid)
            ->get();
        return view('users.edit', ['user'=> $userData]);
    }


    public function update(Request $request)
    {

        $email = $request->email;
        $name = $request->name;
        $phone =$request->phone;
        $admin = $request->admin;
        $sid = $request->sid;

        DB::table('users')
            ->where('email', $email)
            ->update(['name' => $name,'phone' => $phone,'admin' => $admin,'sid' => $sid,'email' => $email]);

        return back()->withStatus(__('User Profile successfully updated.'));
    }

    public function password(Request $request)
    {
        $email = $request->user;
        $newPass = $request->password;
        $comfirmPass = $request->password_confirmation;

        if ($newPass != $comfirmPass){
            return back()->withErrors(['password' => __('Confirm password is not same as new password, please check')]);
        }else{

            $newPass = Hash::make($newPass);

            DB::table('users')
                ->where('email', $email)
                ->update(['password' => $newPass]);
            echo "true";

            return back()->withPasswordStatus(__('User Password successfully updated.'));
        }

    }


}
