<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Louvor;
use Illuminate\Http\Request;

class LouvorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $louvor = Louvor::all();
        return view('/admin/louvor/index', compact('louvor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/louvor/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $louvor = new Louvor;

        $louvor->title = $request->title;
        $louvor->description = $request->description;

         //image upload
         if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/louvor'), $imageName);

            $louvor->image = $imageName;
        }

          $user = auth()->user();
          $louvor->user_id = $user->id;
        
          $louvor->save();
          return redirect('/admin/louvor/')->with('msg','Evento cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galfa  $louvor
     * @return \Illuminate\Http\Response
     */
    public function show($louvor)
    {
        $louvor = Louvor::findOrFail($louvor);
        return view('/admin/louvor/show', compact('louvor'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galfa  $louvor
     * @return \Illuminate\Http\Response
     */
    public function edit($louvor)
    {
        $louvor = Louvor::findOrFail($louvor);
        return view('/admin/louvor/edit', compact('louvor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GAlfa  $gAlfa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $louvor)
    {
        Louvor::findOrFail($request->louvor)->update($request->all());
        return redirect('/admin/louvor/')->with('msg','Evento cadastrado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GAlfa  $gAlfa
     * @return \Illuminate\Http\Response
     */
    public function destroy($louvor)
    {
        Louvor::findOrFail($louvor)->delete();
        return redirect('/admin/louvor/')->with('msg','Evendo excluido com sucesso!');
    }
}
