<?php

namespace Arvore\Http\Controllers;

use Arvore\Tarefa;
use Illuminate\Http\Request;

class FaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // carrega modelos de tarefa para visualizacao
        $tarefas = Tarefa::orderBy('id','tarefa_titulo')->paginate(10);
        return view('fases.index',['tarefas'=>$tarefas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \Arvore\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function show(Tarefa $tarefa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Arvore\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function edit(Tarefa $tarefa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Arvore\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tarefa $tarefa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Arvore\Tarefa  $tarefa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tarefa $tarefa)
    {
        //
    }

    // -- metodos desenvolvidos para upload de arquivos
    public function upload()
    {
        // carrega modelos de tarefa para visualizacao
        $tarefas = Tarefa::orderBy('id','tarefa_titulo')->paginate(10);
        return view('fases.index',['tarefas'=>$tarefas]);
    }
}
