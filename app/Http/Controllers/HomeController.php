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
    public function index(Request $request)
    {

         $searchData = count($request->all());
         $searchProperty_type = $request['property_type'];
         $searchRent_sell = $request['rent_sell'];
         $searchProvinces = $request['provinces'];
         $searchAmphures = $request['amphures'];
         $searchDistricts = $request['districts'];
        $dataHome = DB::table('rent_sell_home_details');
        if( Auth::user()->status < 3){

            if ($searchData > 0) {
                # code...
            }else{
                $dataHome =  $dataHome
                ->where('code_admin', Auth::user()->code_admin)
                ->where('rent_sell_home_details.status_home', 'on')
                ->leftJoin('provinces', 'rent_sell_home_details.provinces', '=', 'provinces.id')
                ->leftJoin('amphures', 'rent_sell_home_details.districts', '=', 'amphures.id') //เขต/ ตำบล
                ->leftJoin('districts', 'rent_sell_home_details.amphures', '=', 'districts.id') //แขวง/ อำเภอ
                ->select('rent_sell_home_details.*', 'provinces.name_th AS provinces_name_th',
                'districts.name_th AS districts_name_th' ,'amphures.name_th AS amphures_name_th')
                ->orderBy('rent_sell_home_details.id','DESC')
                ->paginate(100);
            }

        }else {
            $dataHome =  $dataHome
            ->where('rent_sell_home_details.status_home', 'on')
            ->leftJoin('provinces', 'rent_sell_home_details.provinces', '=', 'provinces.id')
            ->leftJoin('amphures', 'rent_sell_home_details.districts', '=', 'amphures.id') //เขต/ ตำบล
            ->leftJoin('districts', 'rent_sell_home_details.amphures', '=', 'districts.id') //แขวง/ อำเภอ
            ->select('rent_sell_home_details.*', 'provinces.name_th AS provinces_name_th',
             'districts.name_th AS districts_name_th' ,'amphures.name_th AS amphures_name_th')
             ->orderBy('rent_sell_home_details.id','DESC')
            ->paginate(100);


        }


        $data = DB::table('provinces')->get();

        $train_station = DB::table('train_station')->select('train_station.id', 'train_station.station_name_th')->get();


        return view('home',['train_station' => $train_station, "data" =>  $data , 'dataHome' => $dataHome]);
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
    public function show($id)
    {
        $dataHome = DB::table('rent_sell_home_details')
        ->where('rent_sell_home_details.id', $id)
        ->leftJoin('provinces', 'rent_sell_home_details.provinces', '=', 'provinces.id')
        ->leftJoin('amphures', 'rent_sell_home_details.districts', '=', 'amphures.id') //เขต/ ตำบล
        ->leftJoin('districts', 'rent_sell_home_details.amphures', '=', 'districts.id') //แขวง/ อำเภอ
        ->select('rent_sell_home_details.*', 'provinces.name_th AS provinces_name_th',
        'districts.name_th AS districts_name_th' ,'amphures.name_th AS amphures_name_th')
        ->orderBy('rent_sell_home_details.id','DESC')
        ->get();



        return view('detall.detall', ['dataHome' => $dataHome]);

    }



}