<?php

namespace App\Http\Controllers;

use App\Elemente;
use App\Fragen;
use App\Indikatoren;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FragenController extends Controller
{
    /**
     * Get the questions for a specific element of the ICB
     *
     * @param Elemente $elementID
     * @return mixed
     */
    public function getByElementID($elementID)
    {
        $fragen = DB::table('fragens')->join('indikatorens', function ($join) use ($elementID) {
                $join->on('fragens.i_id', '=', 'indikatorens.i_id')
                    ->where('indikatorens.e_id', '=', $elementID);
            })->get();
        return $fragen;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Fragen  $fragen
     * @return \Illuminate\Http\Response
     */
    public function show(Fragen $fragen)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Fragen  $fragen
     * @return \Illuminate\Http\Response
     */
    public function edit(Fragen $fragen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Fragen  $fragen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Fragen $fragen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Fragen  $fragen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fragen $fragen)
    {
        //
    }
}
