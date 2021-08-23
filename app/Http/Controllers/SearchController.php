<?php

namespace App\Http\Controllers;

use App\Search;
use App\Information;
use App\Category;
use App\Prefecture;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $info=Information::all();
        $category=Category::all();
        $pref=Prefecture::all();
        return view('Search.index' , compact('info','category','pref'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        global $search_info;
        $search_info=$request->input('pref');
        return redirect()->route('Search.show', ['Search' => $search_info]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request , Information $information , Prefecture $prefecture , $search_info)
    {
        $sort_pref=Prefecture::find($search_info);
        $search_view=Information::where('pref', $sort_pref->Pref)->paginate(15);
        return(view('Search.show',compact('search_view','sort_pref')));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function edit(Search $search)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Search $search)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Search  $search
     * @return \Illuminate\Http\Response
     */
    public function destroy(Search $search)
    {
        //
    }
}
