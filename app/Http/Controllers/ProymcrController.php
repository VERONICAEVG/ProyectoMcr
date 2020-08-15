<?php

namespace App\Http\Controllers;

use App\Proymcr;
use Illuminate\Http\Request;

class ProymcrController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Proymcr::Paginate(3);
        return view("contenido.mostrar", compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contenido.agregar");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$datos=request()->all();
        $datos=request()->except('_token');
        if($request->hasfile('Foto')){
            $datos['Foto']=$request->file('Foto')->store('subidas', 'public');
        }
        Proymcr::insert($datos);
        //return response()->json($datos);
        return redirect("/controlador");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Proymcr  $proymcr
     * @return \Illuminate\Http\Response
     */
    public function show(Proymcr $proymcr)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Proymcr  $proymcr
     * @return \Illuminate\Http\Response
     */
    public function edit(Proymcr $proymcr)
    {
        return view("contenido.modificar");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Proymcr  $proymcr
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Proymcr $proymcr)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Proymcr  $proymcr
     * @return \Illuminate\Http\Response
     */
    public function destroy(Proymcr $proymcr)
    {
        //
    }
}
