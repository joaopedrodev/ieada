<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Escola;
use Illuminate\Http\Request;

class EscolaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escola = Escola::all();
        return view('/admin/escola/index', compact('escola'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/escola/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $escola = new Escola;

        $escola->title = $request->title;
        $escola->description = $request->description;

         //image upload
         if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/escola'), $imageName);

            $escola->image = $imageName;
        }

          $user = auth()->user();
          $escola->user_id = $user->id;
        
          $escola->save();
          return redirect('/admin/escola/')->with('msg','Evento cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galfa  $escola
     * @return \Illuminate\Http\Response
     */
    public function show($escola)
    {
        $escola = Escola::findOrFail($escola);
        return view('/admin/escola/show', compact('escola'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galfa  $escola
     * @return \Illuminate\Http\Response
     */
    public function edit($escola)
    {
        $escola = Escola::findOrFail($escola);
        return view('/admin/escola/edit', compact('escola'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $escola)
    {
        Escola::findOrFail($request->escola)->update($request->all());
        return redirect('/admin/escola/')->with('msg','Evento cadastrado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Escola  $escola
     * @return \Illuminate\Http\Response
     */
    public function destroy($escola)
    {
        Escola::findOrFail($escola)->delete();
        return redirect('/admin/escola/')->with('msg','Evendo excluido com sucesso!');
    }
}
