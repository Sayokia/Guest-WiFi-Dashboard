<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class StaffStoresController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $storeData = DB::table("stores")
            ->join('users_plan','stores.plan_id','=','users_plan.plan_id')
            ->select('sid','stores.name AS storename','address','users_plan.name AS planname')
            ->get();

        return view('staff.stores.index', ['storeData'=> $storeData]);
    }

    public function edit($sid){
        $storeData = DB::table("stores")
            ->where('sid','=',$sid)
            ->get();
        return view('staff.stores.edit', ['store'=> $storeData]);
    }


    /**
     * @param Request $request
     * @return mixed
     */

    public function update(Request $request)
    {
        $sid = $request->input('sid') ;
        $name = $request->input('name') ;
        $address = $request->input('address') ;
        $logo = $request->input('logo') ;
        $wifi = $request->input('wifi') ;
        $ad = $request->input('ad') ;

        DB::table('stores')
            ->where('sid', $sid)
            ->update(['name' => $name,'address' => $address,'logo' => $logo,'wifi' => $wifi,'ad' => $ad]);

        return back()->withStatus(__('Store information successfully updated.'));
    }

}
