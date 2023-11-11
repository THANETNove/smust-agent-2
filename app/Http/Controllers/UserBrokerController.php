<?php

namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use DB;
use Illuminate\Http\Request;

class UserBrokerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.profile'); //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $number = DB::table('users')
            ->where('code', '=', $request['code_admin'])
            ->get(); // ใช้ exists() เพื่อตรวจสอบว่ามีข้อมูลหรือไม่

        if (count($number) < 1) {
            return redirect()->back()->with('error', "code Admin ไม่ตรง");
        }

        $member = User::find(Auth::user()->id);
        $member->code_admin = $request['code_admin'];
        $member->save();
        return redirect('profile-user')->with('message', "บันทึกสำเร็จ");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
