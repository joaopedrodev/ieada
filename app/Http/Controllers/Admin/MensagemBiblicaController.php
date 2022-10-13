<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MensagemBiblica;
use App\Models\User;


class MensagemBiblicaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   
    public function index()
    {
        $mensagemBiblica = MensagemBiblica::all();
        return view('/admin/mensagens/index', compact('mensagemBiblica'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/mensagens/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $mensagemBiblica = new MensagemBiblica;

        $mensagemBiblica->title = $request->title;
        $mensagemBiblica->description = $request->description;
        
        $user = auth()->user();
        $mensagemBiblica->user_id = $user->id;
        $mensagemBiblica->save();

        return redirect('admin/mensagens/')->with('msg','Mensagem Bíbliba cadastrada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MensagemBiblica  $mensagemBiblica
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mensagemBiblica = MensagemBiblica::findOrFail($id);
        $mensagemBiblicaOwner = User::where('id', $mensagemBiblica->user_id)->first()->toArray();
    
        return view('/admin/mensagens/show', ['mensagemBiblica' => $mensagemBiblica, 'mensagemBiblicaOwner' =>$mensagemBiblicaOwner]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MensagemBiblica  $mensagemBiblica
     * @return \Illuminate\Http\Response
     */
    public function edit($mensagemBiblica)
    {
        $mensagemBiblica = MensagemBiblica::findOrFail($mensagemBiblica);
        return view('/admin/mensagens/edit', compact('mensagemBiblica'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MensagemBiblica  $mensagemBiblica
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $mensagemBiblica)
    {
       
        $mensagemBiblica = MensagemBiblica::findOrFail($request->mensagemBiblica)->update($request->all());
        return redirect('admin/mensagens/')->with('msg','Mensagem Bíblica editada com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MensagemBiblica  $mensagemBiblica
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MensagemBiblica::findOrFail($id)->delete();
        return redirect('/admin/mensagens/')->with('msg', 'Mensagem excluída com sucesso!');
    }
}
