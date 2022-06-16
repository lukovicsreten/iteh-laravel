<?php

namespace App\Http\Controllers;

use App\Http\Resources\HalaResurs;
use App\Models\Hala;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class HalaKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hale = Hala::all();
        return HalaResurs::collection($hale);
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
     * @param  \App\Models\Hala  $hala
     * @return \Illuminate\Http\Response
     */
    public function show(Hala $hala)
    {
        return new HalaResurs($hala);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hala  $hala
     * @return \Illuminate\Http\Response
     */
    public function edit(Hala $hala)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Hala  $hala
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hala $hala)
    {
        $validator = Validator::make($request->all(), [
            'ime' => 'required|string',
            'adresa' => 'required|string',
            'grad' => 'required|string',
            'kapacitet' => 'required|integer'
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors());
        }

        $hala->ime = $request->ime;
        $hala->adresa = $request->adresa;
        $hala->grad = $request->grad;
        $hala->kapacitet = $request->kapacitet;
        $hala->save();

        return response()->json(['Hala uspešno izmenjena', new HalaResurs($hala)]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hala  $hala
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hala $hala)
    {
        $hala->delete();
        return response()->json(['Hala uspešno obrisana', new HalaResurs($hala)]);
    }
}
