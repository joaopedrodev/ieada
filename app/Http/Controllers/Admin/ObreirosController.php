<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
        return view('/admin/obreiros/index', compact('obreiro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/obreiros/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obreiro = new Obreiros;

        $obreiro->title = $request->title;
        $obreiro->description = $request->description;
        

        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/obreiros'), $imageName);

            $obreiro->image = $imageName;
        }

        $user = auth()->user();
        $obreiro->user_id = $user->id;
        
        $obreiro->save();
        return redirect('/admin/obreiros/')->with('msg','Cadastro efetuado com sucesso!');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Obreiro  $obreiro
     * @return \Illuminate\Http\Response
     */
    public function show($obreiro)
    {
        $obreiro = Obreiros::findOrFail($obreiro);
        $obreiroOwner = User::where('id', $obreiro->user_id)->first()->toArray();
        return view('/admin/obreiros/show', ['obreiro' => $obreiro, 'obreiroOwner' => $obreiroOwner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Obreiro  $obreiro
     * @return \Illuminate\Http\Response
     */
    public function edit($obreiro)
    {
        $obreiro = Obreiro::findOrFail($obreiro);
        return view('admin/obreiros/edit', compact('obreiro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Obreiro  $obreiro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $obreiro)
    {
       $obreiro = Obreiros::findOrFail($request->obreiro)->update($request->all());
       return redirect('/admin/obreiros/')->with('msg', 'Cadastro editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Obreiros  $obreiros
     * @return \Illuminate\Http\Response
     */
    public function destroy($obreiro)
    {
        Obreiros::findOrFail($obreiro)->delete();
        return redirect('/admin/obreiros/')->with('msg','Obreiros excluido com sucesso!');
    }
}
