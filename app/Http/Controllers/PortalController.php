<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;


class PortalController extends Controller
{

    public function index($sid)
    {

        $storeExisitCheck = DB::table('stores')
            ->where('sid','=',$sid)
            ->count();

        if ($storeExisitCheck != 1){
            return response()->json(['error' => 'Store Not Found or Method Not Allowed.'],403);
        }else{
            $locale = App::currentLocale();

            if (App::isLocale('zh')){
                $storeNameLang = "name_zh";
                $storeAnceLang = "ance_zh";
            }elseif (App::isLocale('fr')){
                $storeNameLang = "name_fr";
                $storeAnceLang = "ance_fr";
            }elseif (App::isLocale('jp')){
                $storeNameLang = "name_jp";
                $storeAnceLang = "ance_jp";
            }elseif (App::isLocale('kr')){
                $storeNameLang = "name_kr";
                $storeAnceLang = "ance_kr";
            }else{
                $storeNameLang = "name_en";
                $storeAnceLang = "ance_en";
            }

            $storeName = DB::table("stores")
                ->join('stores_info','stores.info_id','=','stores_info.info_id')
                ->where('sid','=',$sid)
                ->pluck($storeNameLang)
                ->toArray();

            $storeAnce = DB::table("stores")
                ->join('stores_info','stores.info_id','=','stores_info.info_id')
                ->where('sid','=',$sid)
                ->pluck($storeAnceLang)
                ->toArray();

            $storeName = $storeName[0] ?? "";
            $storeAnnouncement = $storeAnce["0"] ?? "";

            //return $storeName;
           return view('portal.index', ['name'=> $storeName,'lang'=>$locale,'announcement'=>$storeAnnouncement,'sid'=>$sid]);

        }

    }
}
