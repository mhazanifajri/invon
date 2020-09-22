<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Datatables;
use Illuminate\Support\Facades\DB; /// penggunaan librarty untuk query builder
use App\Models\Guest;

class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/guest');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Datatables::of(Guest::query())->make(true); /// get data
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Guest::create([
            'name'         => $request->name,
            'email'        => $request->email,
            'phone'        => $request->phone,
            'address'      => $request->address,
            'status'       => 'Y',
            // 'id_group'     => 1,
            // 'id_sub_group' => 1,
        ]);
        return response()->json(["response" =>true]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $guest          = Guest::find($id);
        $guest->name    = $request->name;
        $guest->email   = $request->email;
        $guest->phone   = $request->phone;
        $guest->address = $request->address;
        $guest->status  = $request->status;
        $guest->save();
        return response()->json(["response" =>true]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function multiple_delete(Request $request){
        $req = $request->id_guest;
        foreach ($req as $value) {
            Guest::find($value)->delete();
        }
        return response()->json($request->id_guest);
    }
}
