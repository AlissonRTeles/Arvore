<?php

namespace Arvore\Http\Controllers;

use Arvore\Grupo;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grupos = Grupo::orderBy('id', 'grupo_nome')->paginate(10);
        
        return view('grupo.index',['grupos' => $grupos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('grupo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $grupo = new Grupo;
        $grupo->grupo_nome = $request->input('name');
        $grupo->grupo_membros = $request->input('membros');
        $grupo->grupo_ok = 'N';
        $grupo->save();
        return redirect()->route('grupo.index')->with('message', 'Grupo salvo com sucesso!!');
    }
  

    /**
     * Display the specified resource.
     *
     * @param  \Arvore\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function show(Grupo $grupo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Arvore\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function edit(Grupo $grupo)
    {
        $grupo = Grupo::findOrFail($id);
        return view('grupo.edit',compact('grupo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Arvore\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grupo $grupo)
    {
        $grupo = Grupo::findOrFail($id);
        $product->name        = $request->name;
        $product->name        = $request->membros;
        $product->save();
        return redirect()->route('grupo.index')->with('message', 'Product updated successfully!');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Arvore\Grupo  $grupo
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grupo $grupo)
    {
        $grupo = Grupo::findOrFail($id);
        $grupo->delete();
        return redirect()->route('grupo.index')->with('alert-success','Product hasbeen deleted!');
    }
}
