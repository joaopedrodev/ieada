<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BioPastor;
use Illuminate\Http\Request;
use App\Models\User;

class BioPastorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pastore = BioPastor::all();
        return view('/admin/pastores/index', compact('pastore'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/pastores/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pastore = new BioPastor;

        $pastore->name = $request->name;
        $pastore->description = $request->description;
        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/pastor'), $imageName);

            $pastore->image = $imageName;
        }

        $user = auth()->user();
        $pastore->user_id = $user->id;
        
        $pastore->save();
        return redirect('/admin/pastores/')->with('msg','Cadastro efetuado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BioPastor  $bioPastor
     * @return \Illuminate\Http\Response
     */
    public function show($pastore)
    {
        $pastore = BioPastor::findOrFail($pastore);
        $pastoresOwner = User::where('id', $pastore->user_id)->first()->toArray();
    
        return view('/admin/pastores/show', ['pastore' => $pastore, 'pastoresOwner' =>$pastoresOwner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BioPastor  $bioPastor
     * @return \Illuminate\Http\Response
     */
    public function edit($pastore)
    {
        $pastore = BioPastor::findOrFail($pastore);
        return view('/admin/pastores/edit', compact('pastore'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BioPastor  $bioPastor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $pastore)
    {
        $pastore = BioPastor::findOrFail($request->pastore)->update($request->all());
        return redirect('/admin/pastores/')->with('msg',' Pastores editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BioPastor  $bioPastor
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        BioPastor::findOrFail($id)->delete();
        return redirect('/admin/pastores/')->with('msg', 'Pastores excluido com sucesso!');
    }
}
