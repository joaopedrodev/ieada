<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Presbiteros;
use App\Models\User;
use Illuminate\Http\Request;

class PresbiterosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $presbitero = Presbiteros::all();
        return view('/admin/presbiteros/index', compact('presbitero'));
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
     * @param  \App\Models\Presbiteros  $presbiteros
     * @return \Illuminate\Http\Response
     */
    public function show(Presbiteros $presbiteros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Presbiteros  $presbiteros
     * @return \Illuminate\Http\Response
     */
    public function edit(Presbiteros $presbiteros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Presbiteros  $presbiteros
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Presbiteros $presbiteros)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Presbiteros  $presbiteros
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presbiteros $presbiteros)
    {
        //
    }
}
