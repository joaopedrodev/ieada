<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Membros;
use App\Models\User;

class CadastroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cadastro = Membros::all();
        return view('admin/cadastros/index',compact('cadastro'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/cadastros/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $cadastro = new Membros;

        $cadastro->nome = $request->nome;
        $cadastro->sobrenome = $request->sobrenome;
        $cadastro->endereco = $request->endereco;
        $cadastro->bairro = $request->bairro;
        $cadastro->cidade = $request->cidade;
        $cadastro->cep = $request->cep;
        $cadastro->registro = $request->registro;
        $cadastro->orgao = $request->orgao;
        $cadastro->cpf = $request->cpf;
        $cadastro->email = $request->email;
        $cadastro->profissao = $request->profissao;
        $cadastro->formacao = $request->formacao;
        $cadastro->estadocivil = $request->estadocivil;
        $cadastro->tiposanguineo = $request->tiposanguineo;
        $cadastro->telefone = $request->telefone;
        $cadastro->batizado = $request->batizado;
        $cadastro->items = $request->items;
        $cadastro->date = $request->date;

        //image upload
        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/membro'), $imageName);

            $cadastro->image = $imageName;
        }

        $user = auth()->user();
        $cadastro->user_id = $user->id;
        
        $cadastro->save();
        return redirect('/admin/cadastros/')->with('msg','Cadastro efetuado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cadastro = Membros::findOrFail($id);

        $cadastroOwner = User::where('id', $cadastro->user_id)->first()->toArray();

        return view('/admin/cadastros/show', ['cadastro' => $cadastro,'cadastroOwner' => $cadastroOwner]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($cadastro)
    {
        $cadastro = Membros::findOrFail($cadastro);
        return view('admin.cadastros.edit', compact('cadastro'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cadastro)
    {
       
        $cadastro = Membros::findOrFail($request->cadastro)->update($request->all());
        return redirect('admin/cadastros/')->with('msg','Cadastro editado com sucesso!');
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

        return redirect('/admin/cadastros/')->with('msg','Membro excluído com sucesso!');
    }
}
