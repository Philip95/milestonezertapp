<?php

namespace App\Http\Controllers;

use App\Bereiche;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BereicheController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('uebungsmodus');
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
     * @param  \App\Bereiche  $bereiche
     * @return \Illuminate\Http\Response
     */
    public function show(Bereiche $bereiche)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bereiche  $bereiche
     * @return \Illuminate\Http\Response
     */
    public function edit(Bereiche $bereiche)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bereiche  $bereiche
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bereiche $bereiche)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bereiche  $bereiche
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bereiche $bereiche)
    {
        //
    }
}
