<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AutoSkolaResurs;
use App\Models\AutoSkola;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class AutoSkolaKontroler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return AutoSkolaResurs::collection(AutoSkola::all());
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
        $validator = Validator::make($request->all(), [
            'naziv' => 'required|string',
            'grad' => 'required|string',
            'cena_obuke' => 'required|integer',
            'broj_vozila' => 'required|integer',
        ]);

        if ($validator->fails()) {
            return response()->json(['Greška!' => $validator->errors()]);
        }

        $as = AutoSkola::create([
            'naziv' => $request->naziv,
            'grad' => $request->grad,
            'cena_obuke' => $request->cena_obuke,
            'broj_vozila' => $request->broj_vozila,
        ]);

        return response()->json(['Auto škola je uspešno sačuvana!', new AutoSkolaResurs($as)]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AutoSkola  $autoSkola
     * @return \Illuminate\Http\Response
     */
    public function show(AutoSkola $autoSkola)
    {
        return new AutoSkolaResurs($autoSkola);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AutoSkola  $autoSkola
     * @return \Illuminate\Http\Response
     */
    public function edit(AutoSkola $autoSkola)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AutoSkola  $autoSkola
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AutoSkola $autoSkola)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AutoSkola  $autoSkola
     * @return \Illuminate\Http\Response
     */
    public function destroy(AutoSkola $autoSkola)
    {
        $autoSkola->delete();
        return response()->json('Auto škola je uspešno obrisana!');
    }
}
