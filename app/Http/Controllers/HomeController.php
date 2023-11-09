<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

    /*     $dataHome = DB::table('rent_sell_home_details');
        if( Auth::user()->status < 3){
            $dataHome =  $dataHome
            ->where('id_user', Auth::user()->id)
            ->orderBy('post_products.id','DESC')
            ->get();
        }else {

        }
 */
        $data = DB::table('provinces')->get();
        $train_station = DB::table('train_station')->select('train_station.id', 'train_station.station_name_th')->get();

        $home = DB::table('provinces')->get();
        return view('home',['train_station' => $train_station,"data" =>  $data ]);
    }

    public function districts($id)
    {

        $data = DB::table('amphures')
        ->where('amphures.province_id',$id)
        ->get();

        return response()->json($data);

    }
    public function amphures($id)
    {


        $data = DB::table('districts')
        ->where('amphure_id', $id)
        ->get();

        return response()->json($data);

    }
    public function detall($id)
    {


        return view('detall.detall');

    }
}