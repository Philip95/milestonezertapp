<?php

namespace App\Http\Controllers;

use App\Pruefung;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PruefungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('pruefungssimulation');
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
     * @param  \App\Pruefung  $pruefung
     * @return \Illuminate\Http\Response
     */
    public function show(Pruefung $pruefung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pruefung  $pruefung
     * @return \Illuminate\Http\Response
     */
    public function edit(Pruefung $pruefung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pruefung  $pruefung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pruefung $pruefung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pruefung  $pruefung
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pruefung $pruefung)
    {
        //
    }
}
