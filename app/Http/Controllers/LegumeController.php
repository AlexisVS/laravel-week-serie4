<?php

namespace App\Http\Controllers;

use App\Models\Legume;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LegumeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $legumes = DB::table('legumes')->orderBy("name")->get();
        return view('pages.legume', compact('legumes'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Legume  $legume
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $legume = Legume::find($id);
        return view('pages.showLegume', compact('legume'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Legume  $legume
     * @return \Illuminate\Http\Response
     */
    public function edit(Legume $legume)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Legume  $legume
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Legume $legume)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Legume  $legume
     * @return \Illuminate\Http\Response
     */
    public function destroy(Legume $legume)
    {
        //
    }
}
