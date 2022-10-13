<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BioIgreja;
use Illuminate\Http\Request;
use App\Models\User;

class BioIgrejaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   

    public function index()
    {
        $igreja = BioIgreja::all();
        return view('/admin/igrejas/index', compact('igreja'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/igrejas/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $igreja = new BioIgreja;

        $igreja->title = $request->title;
        $igreja->description = $request->description;
        
        $user = auth()->user();
        $igreja->user_id = $user->id;
        $igreja->save();

        return redirect('admin/igrejas/')->with('msg','Mensagem Bíbliba cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BioIgreja  $bioIgreja
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $igreja = BioIgreja::findOrFail($id);
        $igrejaOwner = User::where('id', $igreja->user_id)->first()->toArray();
    
        return view('/admin/igrejas/show', ['igreja' => $igreja, 'igrejaOwner' =>$igrejaOwner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BioIgreja  $bioIgreja
     * @return \Illuminate\Http\Response
     */
    public function edit($igreja)
    {
        $igreja = BioIgreja::findOrFail($igreja);
        return view('/admin/igrejas/edit', compact('igreja'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BioIgreja  $bioIgreja
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $igreja)
    {
        $igreja = BioIgreja::findOrFail($request->igreja)->update($request->all());
        return redirect('admin/igrejas/')->with('msg','Mensagem Bíblica editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BioIgreja  $bioIgreja
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BioIgreja::findOrFail($id)->delete();
        return redirect('/admin/igrejas/')->with('msg', 'Mensagem excluída com sucesso!');
    }
}
