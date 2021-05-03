<?php

namespace App\Http\Controllers;

use App\empresas;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return empresas::get();//select * from empresas
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id = Empresas::create($request->all())->id;
        return response()->json($id, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\empresas  $empresa
     * @return \Illuminate\Http\Response
     */
    public function show(empresas $empresa)
    {
        return $empresa;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\empresas  $empresa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, empresas $empresa)
    {
        $empresa->update($request->all());
        return response()->json($request->id,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\empresas  $empresa
     * @return \Illuminate\Http\Response
     */
    public function destroy(empresas $empresa)
    {
        $empresa->delete();
        return response()->json($empresa->id,200);
    }
}
