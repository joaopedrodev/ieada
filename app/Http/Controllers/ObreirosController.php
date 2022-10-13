<?php

namespace App\Http\Controllers;

use App\Models\Obreiros;
use Illuminate\Http\Request;
use App\Models\User;

class ObreirosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $obreiro = Obreiros::all();
        return view('obreiros', compact('obreiro'));
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
     * @param  \App\Models\Obreiros  $obreiros
     * @return \Illuminate\Http\Response
     */
    public function show(Obreiros $obreiros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obreiros  $obreiros
     * @return \Illuminate\Http\Response
     */
    public function edit(Obreiros $obreiros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obreiros  $obreiros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Obreiros $obreiros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obreiros  $obreiros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Obreiros $obreiros)
    {
        //
    }
}
