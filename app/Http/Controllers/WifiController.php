<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class WifiController extends Controller
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
            ->where('sid','=',$userStoreID)
            ->pluck('wifi')
            ->toArray();

        $storeWiFiStatus = $userStoreData[0];

        return view('wifi.index', ['wifi'=> $storeWiFiStatus]);
    }


    /**
     * @param Request $request
     * @return mixed
     */

    public function update(Request $request)
    {
        $wifi = $request->input('wifi') ;

        $userStoreID = Auth::user()->sid;

        $update = DB::table('stores')
            ->where('sid', $userStoreID)
            ->update(['wifi' => $wifi]);

        return back()->withStatus(__('Store information successfully updated.'));
    }

}
