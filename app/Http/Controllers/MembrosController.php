<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Membros;
use App\Models\User;

class MembrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        $membros = $user->membros;
        return view('membro.index',['membros' => $membros]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('membro.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $membros = new Membros;

        $membros->nome = $request->nome;
        $membros->sobrenome = $request->sobrenome;
        $membros->endereco = $request->endereco;
        $membros->bairro = $request->bairro;
        $membros->cidade = $request->cidade;
        $membros->cep = $request->cep;
        $membros->registro = $request->registro;
        $membros->orgao = $request->orgao;
        $membros->cpf = $request->cpf;
        $membros->email = $request->email;
        $membros->profissao = $request->profissao;
        $membros->formacao = $request->formacao;
        $membros->estadocivil = $request->estadocivil;
        $membros->tiposanguineo = $request->tiposanguineo;
        $membros->telefone = $request->telefone;
        $membros->batizado = $request->batizado;
        $membros->items = $request->items;
        $membros->date = $request->date;

        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/membro'), $imageName);

            $membros->image = $imageName;
        }

        $user = auth()->user();
        $membros->user_id = $user->id;
        
        $membros->save();
        return redirect('membro/index')->with('msg','Cadastro efetuado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $membro = Membros::findOrFail($id);

      $membroOwner = User::where('id', $membro->user_id)->first()->toArray();

      return view('membro.show', ['membro' => $membro,'membroOwner' => $membroOwner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $membro = Membros::findOrFail($id);
        return view('membro.edit',['membro' => $membro]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        Membros::findOrFail($request->id)->update($request->all());

        return redirect('/membro/index')->with('msg','Cadastro editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Membros::findOrFail($id)->delete();

        return redirect('/membro/index')->with('msg','Membro excluído com sucesso!');
    }
}
