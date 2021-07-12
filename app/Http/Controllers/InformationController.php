<?php

namespace App\Http\Controllers;

use App\Information;
use App\Prefecture;
use App\Category;
use Illuminate\Http\Request;

class InformationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info=Information::all()->sortBy('crated_at');
        $prefs=Prefecture::all();
        $categories=Category::all();
        return view('informations.index',compact('info','prefs','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('informations.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $information=new Information();
        $information->comment=$request->input('comment');
        $information->tittle=$request->input('tittle');
        $information->pref=$request->input('pref');
        $information->city=$request->input('city');
        $information->URL=$request->input('URL');
        $information->TEL=$request->input('TEL');
        $information->about=$request->input('about');
        $information->open=$request->input('open');
        $information->close=$request->input('close');
        $information->ParkingCar=$request->input('ParkingCar');
        $information->ParkingBicycles=$request->input("ParkingBicycles");
        $information->category_id = $request->input('category_id');
        $information->save();

        return redirect()->route('informations.show', ['id' => $information->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function show(Information $information)
    {
        return view('informations.show', compact('information'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function edit(Information $information)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Information $information)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Information  $information
     * @return \Illuminate\Http\Response
     */
    public function destroy(Information $information)
    {
        //
    }
}
