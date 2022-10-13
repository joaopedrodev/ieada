<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Primicias;
use Illuminate\Http\Request;

class PrimiciasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $primicias = Primicias::all();
        return view('/admin/primicias/index', compact('primicias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/admin/primicias/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $primicias = new Primicias;

        $primicias->title = $request->title;
        $primicias->description = $request->description;

         //image upload
         if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;

            $request->image->move(public_path('img/primicias'), $imageName);

            $primicias->image = $imageName;
        }

          $user = auth()->user();
          $primicias->user_id = $user->id;
        
          $primicias->save();
          return redirect('/admin/primicias/')->with('msg','Evento cadastrado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Primicias  $primicias
     * @return \Illuminate\Http\Response
     */
    public function show($primicias)
    {
        $primicias = Primicias::findOrFail($primicias);
        return view('/admin/primicias/show', compact('primicias'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Primicias  $primicias
     * @return \Illuminate\Http\Response
     */
    public function edit($primicias)
    {
        $primicias = Primicias::findOrFail($primicias);
        return view('/admin/primicias/edit', compact('primicias'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Primicias  $primicias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $primicias)
    {
        Primicias::findOrFail($request->primicias)->update($request->all());
        return redirect('/admin/primicias/')->with('msg','Evento cadastrado com sucesso!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Primicias  $primicias
     * @return \Illuminate\Http\Response
     */
    public function destroy($primicias)
    {
        Primicias::findOrFail($primicias)->delete();
        return redirect('/admin/primicias/')->with('msg','Evendo excluido com sucesso!');
    }
}
