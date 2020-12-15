<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StoresController extends Controller
{
    /**
     * Display a listing of the users
     *
     * @param  \App\Models\User  $model
     * @return \Illuminate\View\View
     */
    public function index(User $model)
    {
        $userStoreID = Auth::user()->sid;
        $userStoreData = DB::table("stores")
            ->join('users_plan','stores.plan_id','=','users_plan.plan_id')
            ->where('sid','=',$userStoreID)
            ->select('stores.name AS storename','address','logo','ad','users_plan.name AS planname','desc','max_device','max_ad','max_ad_time')->get();

        return view('stores.index', ['store'=> $userStoreData]);
    }

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

}
