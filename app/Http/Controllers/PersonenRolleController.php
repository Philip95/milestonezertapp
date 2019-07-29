<?php

namespace App\Http\Controllers;

use App\PersonenRolle;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PersonenRolleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
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
     * @param  \App\PersonenRolle  $personenRolle
     * @return \Illuminate\Http\Response
     */
    public function show(PersonenRolle $personenRolle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PersonenRolle  $personenRolle
     * @return \Illuminate\Http\Response
     */
    public function edit(PersonenRolle $personenRolle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PersonenRolle  $personenRolle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PersonenRolle $personenRolle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PersonenRolle  $personenRolle
     * @return \Illuminate\Http\Response
     */
    public function destroy(PersonenRolle $personenRolle)
    {
        //
    }
}
