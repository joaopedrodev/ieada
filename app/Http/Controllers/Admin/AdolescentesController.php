<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Adolescentes;
use Illuminate\Http\Request;

class AdolescentesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adolescentes = Adolescentes::all();
        return view('/admin/adolescentes/index', compact('adolescentes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/adolescentes/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $adolescentes = new Adolescentes;

        $adolescentes->title = $request->title;
        $adolescentes->description = $request->description;

         //image upload
         if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/adolescentes'), $imageName);

            $adolescentes->image = $imageName;
        }

          $user = auth()->user();
          $adolescentes->user_id = $user->id;
        
          $adolescentes->save();
          return redirect('/admin/adolescentes/')->with('msg','Evento cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Galfa  $adolescentes
     * @return \Illuminate\Http\Response
     */
    public function show($adolescentes)
    {
        $adolescentes = Adolescentes::findOrFail($adolescentes);
        return view('/admin/adolescentes/show', compact('adolescentes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Galfa  $adolescentes
     * @return \Illuminate\Http\Response
     */
    public function edit($adolescentes)
    {
        $adolescentes = Adolescentes::findOrFail($adolescentes);
        return view('/admin/adolescentes/edit', compact('adolescentes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Adolescentes  $adolescentes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $adolescentes)
    {
        Adolescentes::findOrFail($request->adolescentes)->update($request->all());
        return redirect('/admin/adolescentes/')->with('msg','Evento cadastrado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Adolescentes  $adolescentes
     * @return \Illuminate\Http\Response
     */
    public function destroy($adolescentes)
    {
        Adolescentes::findOrFail($adolescentes)->delete();
        return redirect('/admin/adolescentes/')->with('msg','Evendo excluido com sucesso!');
    }
}
