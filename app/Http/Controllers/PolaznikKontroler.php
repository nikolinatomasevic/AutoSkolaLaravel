<?php

namespace App\Http\Controllers;

use App\Http\Resources\PolaznikResurs;
use App\Models\Polaznik;
use Illuminate\Http\Request;

class PolaznikKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return PolaznikResurs::collection(Polaznik::all());
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
     * @param  \App\Models\Polaznik  $polaznik
     * @return \Illuminate\Http\Response
     */
    public function show(Polaznik $polaznik)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Polaznik  $polaznik
     * @return \Illuminate\Http\Response
     */
    public function edit(Polaznik $polaznik)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Polaznik  $polaznik
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Polaznik $polaznik)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Polaznik  $polaznik
     * @return \Illuminate\Http\Response
     */
    public function destroy(Polaznik $polaznik)
    {
        $polaznik->delete();
        return response()->json('Polaznik je uspešno obrisan!');
    }
}
