<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publicacion;
use Illuminate\Support\Facades\DB;

class PublicacionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));
        $publicaciones=DB::table('publicaciones')
                                ->select('id','titulo','descripcion','archivo')
                                ->where('titulo','LIKE','%'.$texto.'%')
                                ->orWhere('descripcion','LIKE','%'.$texto.'%')
                                ->orderBy('titulo','asc')
                                ->paginate(5);
        return view('mostrar',compact('publicaciones','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mostrar.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $publicacion = new Publicacion;

        if( $request->hasFile('archivo')) {
            $file = $request->file('archivo');
            $destinationPath = 'images/featureds/';
            $filename = time() . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('archivo')->move($destinationPath, $filename);
            $publicacion->archivo = $destinationPath . $filename; 
        }


        $publicacion->titulo=$request->input('titulo');
        $publicacion->descripcion=$request->input('descripcion');
        //$publicacion->archivo=$request->input('archivo');
        $publicacion->save();
        return redirect()->route('mostrar.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicacion=Publicacion::findOrFail($id);
        $publicacion->delete();
        return redirect()->route('mostrar.index');
    }
}
