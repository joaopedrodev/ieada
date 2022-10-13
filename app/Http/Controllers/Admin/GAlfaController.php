<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\GAlfa;
use Illuminate\Http\Request;

class GAlfaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galfa = GAlfa::all();
        return view('/admin/galfas/index', compact('galfa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/galfas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $galfa = new GAlfa;

        $galfa->title = $request->title;
        $galfa->description = $request->description;

         //image upload
         if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/galfas'), $imageName);

            $galfa->image = $imageName;
        }

          $user = auth()->user();
          $galfa->user_id = $user->id;
        
          $galfa->save();
          return redirect('/admin/galfas/')->with('msg','Evento cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galfa  $galfa
     * @return \Illuminate\Http\Response
     */
    public function show($galfa)
    {
        $galfa = GAlfa::findOrFail($galfa);
        return view('/admin/galfas/show', compact('galfa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galfa  $galfa
     * @return \Illuminate\Http\Response
     */
    public function edit($galfa)
    {
        $galfa = GAlfa::findOrFail($galfa);
        return view('/admin/galfas/edit', compact('galfa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GAlfa  $gAlfa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $galfa)
    {
        GAlfa::findOrFail($request->galfa)->update($request->all());
        return redirect('/admin/galfas/')->with('msg','Evento cadastrado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GAlfa  $gAlfa
     * @return \Illuminate\Http\Response
     */
    public function destroy($galfa)
    {
        GAlfa::findOrFail($galfa)->delete();
        return redirect('/admin/galfas/')->with('msg','Evendo excluido com sucesso!');
    }
}
