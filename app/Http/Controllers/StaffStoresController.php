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
        $userData = DB::table("stores")
            ->where('sid','=',$sid)
            ->get();
        return view('staff.stores.edit', ['user'=> $userData]);
    }

    /**
     * @param User $model
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function management(User $model)
    {
        $userStoreID = Auth::user()->sid;
        $userStoreInfoData = DB::table("stores_info")
            ->join('stores','stores_info.info_id','=','stores.info_id')
            ->where('sid','=',$userStoreID)
            ->get()
            ->toArray();

        return view('stores.management', ['store'=> $userStoreInfoData] );
    }

    /**
     * @param Request $request
     * @return mixed
     */

    public function update(Request $request)
    {
        $name_en = $request->input('nm-en') ;
        $name_zh = $request->input('nm-zh') ;
        $name_fr = $request->input('nm-fr') ;
        $name_jp = $request->input('nm-jp') ;
        $name_kr = $request->input('nm-kr') ;

        $userStoreID = Auth::user()->sid;
        $userStoreInfoData = DB::table("stores")
            ->where('sid','=',$userStoreID)
            ->pluck('info_id')
            ->toArray();

        $userStoreInfoID = $userStoreInfoData[0];

        $update = DB::table('stores_info')
            ->where('info_id', $userStoreInfoID)
            ->update(['name_en' => $name_en,'name_zh' => $name_zh,'name_fr' => $name_fr,'name_jp' => $name_jp,'name_kr' => $name_kr]);

        return back()->withStatus(__('Store information successfully updated.'));
    }

}
