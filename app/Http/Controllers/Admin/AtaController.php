<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Ata;

class AtaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ata = Ata::all();
        return view('admin.atas.index',compact('ata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin.atas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ata = new Ata;

        $ata->title = $request->title;
        $ata->description = $request->description;

        $ata->save();
        return redirect('admin/atas/')->with('msg','Cadastro efetuado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ata = Ata::findOrFail($id);
        return view('/admin.atas.show',compact('ata'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ata)
    {
        $ata = Ata::findOrFail($ata);
        return view('admin.atas.edit',compact('ata'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $ata)
    {
        Ata::findOrFail($request->ata)->update($request->all());

        return redirect('admin/atas')->with('msg','Cadastro editado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ata::findOrFail($id)->delete();

        return redirect('admin/atas/')->with('msg','Membro excluído com sucesso!');
    }
}
