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
     * Get all questions from Database
     *
     * @return mixed
     */
    public function getAllFragen(){
        $fragen = DB::table('fragens')
            ->join('indikatorens', 'fragens.i_id','=','indikatorens.i_id')
            ->join('elementes','indikatorens.e_id','=','elementes.e_id')
            ->join('bereiches', 'elementes.b_id','=','bereiches.b_id')
            ->get();
        return $fragen;
    }

    /**
     * Get the questions for a specific indicator of the ICB
     *
     * @param int $indikatorID
     * @return mixed
     */
    public function getByIndikatorID($indikatorID){
        $fragen = DB::table('fragens')
            ->join('indikatorens', 'fragens.i_id','=','indikatorens.i_id')
            ->join('elementes','indikatorens.e_id','=','elementes.e_id')
            ->join('bereiches', 'elementes.b_id','=','bereiches.b_id')
            ->where('indikatorens.i_id','=', $indikatorID)
            ->get();

        return $fragen;
    }

    /**
     * Get the questions for a specific element of the ICB
     *
     * @param int $elementID
     * @return mixed
     */
    public function getByElementID($elementID){
        $fragen = DB::table('fragens')
            ->join('indikatorens', 'fragens.i_id','=','indikatorens.i_id')
            ->join('elementes','indikatorens.e_id','=','elementes.e_id')
            ->join('bereiches', 'elementes.b_id','=','bereiches.b_id')
            ->where('elementes.e_id','=', $elementID)
            ->get();

        return view('fragenNachKompetenzelement')->with(array('fragen'=>$fragen));
    }

    /**
     * Get the questions for a specific range of the ICB
     *
     * @param int $bereichID
     * @return \Illuminate\Support\Collection
     */
    public function getByBereichID($bereichID){
        $fragen = DB::table('fragens')
            ->join('indikatorens', 'fragens.i_id','=','indikatorens.i_id')
            ->join('elementes','indikatorens.e_id','=','elementes.e_id')
            ->join('bereiches', 'elementes.b_id','=','bereiches.b_id')
            ->where('bereiches.b_id','=', $bereichID)
            ->get();
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
