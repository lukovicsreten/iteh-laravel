<?php

namespace App\Http\Controllers;

use App\Http\Resources\KoncertResurs;
use App\Models\Koncert;
use Illuminate\Http\Request;

class KoncertKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $koncerti = Koncert::all();
        return KoncertResurs::collection($koncerti);
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
     * @param  \App\Models\Koncert  $koncert
     * @return \Illuminate\Http\Response
     */
    public function show(Koncert $koncert)
    {
        return new KoncertResurs($koncert);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Koncert  $koncert
     * @return \Illuminate\Http\Response
     */
    public function edit(Koncert $koncert)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Koncert  $koncert
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Koncert $koncert)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Koncert  $koncert
     * @return \Illuminate\Http\Response
     */
    public function destroy(Koncert $koncert)
    {
        //
    }
}
