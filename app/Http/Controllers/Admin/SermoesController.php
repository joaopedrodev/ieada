<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Sermoes;
use Illuminate\Http\Request;

class SermoesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sermao = Sermoes::all();
        return view('/admin/sermoes/index', compact('sermao'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/sermoes/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sermoes = new Sermoes;

        $sermoes->title = $request->title;
        $sermoes->description = $request->description;

          $user = auth()->user();
          $sermoes->user_id = $user->id;
        
          $sermoes->save();
          return redirect('/admin/sermoes/')->with('msg','Evento cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sermoes  $sermoes
     * @return \Illuminate\Http\Response
     */
    public function show($sermao)
    {
        $sermao = Sermoes::findOrFail($sermao);
        return view('/admin/sermoes/show', compact('sermao'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sermoes  $sermoes
     * @return \Illuminate\Http\Response
     */
    public function edit($sermoes)
    {
        $sermoes = Sermoes::findOrFail($sermoes);
        return view('/admin/sermoes/edit', compact('sermoes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sermoes  $sermoes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $sermoes)
    {
        Sermoes::findOrFail($request->sermoes)->update($request->all());
        return redirect('/admin/sermoes/')->with('msg','Evento cadastrado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sermoes  $sermoes
     * @return \Illuminate\Http\Response
     */
    public function destroy($sermoes)
    {
        Sermoes::findOrFail($sermoes)->delete();
        return redirect('/admin/sermoes/')->with('msg','Evendo excluido com sucesso!');
    }
}
