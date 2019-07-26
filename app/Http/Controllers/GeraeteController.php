<?php

namespace App\Http\Controllers;

use App\Geraete;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GeraeteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        DB::select('select * from users');
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
     * @param  \App\Geraete  $geraete
     * @return \Illuminate\Http\Response
     */
    public function show(Geraete $geraete)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Geraete  $geraete
     * @return \Illuminate\Http\Response
     */
    public function edit(Geraete $geraete)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Geraete  $geraete
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Geraete $geraete)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Geraete  $geraete
     * @return \Illuminate\Http\Response
     */
    public function destroy(Geraete $geraete)
    {
        //
    }
}
