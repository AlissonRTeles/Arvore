<?php

namespace Arvore\Http\Controllers;

use Arvore\Valida;
use Illuminate\Http\Request;

class ValidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $grupos = Valida::orderBy('id', 'grupo_nome')->paginate(10);
        
        return view('valida.index',['grupos' => $grupos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \Arvore\Valida  $valida
     * @return \Illuminate\Http\Response
     */
    public function show(Valida $valida)
    {
        return "alisson testando o show";

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \Arvore\Valida  $valida
     * @return \Illuminate\Http\Response
     */
    public function edit(Valida $valida)
    {
        //
        return "Alisson testando o edit";
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Arvore\Valida  $valida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Valida $valida)
    {
    

        $valida->grupo_ok    = "S";

        $valida->save();
        return redirect()->route('valida.index')->with('message', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Arvore\Valida  $valida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Valida $valida)
    {
        //
    }

        protected function methodNotAllowed(array $others)
    {
        throw new MethodNotAllowedHttpException($others);
    }
}

