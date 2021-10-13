<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tienda;
use App\Models\Image;
use App\Http\Requests\TiendaRequest;
use App\Http\Requests\TiendaUpdateRequest;

class TiendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Tienda::all();
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
    public function store(TiendaRequest $request)
    {
        // $image = $request->file('imagen');
        // $path = 'imagen/' . Str::random(40).'.jpg';
        // Storage::disk('public')->put($path, $image);

        $tienda = new Tienda();
        $tienda->nombre = $request->nombre;
        $tienda->direccion = $request->direccion;
        $tienda->telefono = $request->telefono;
        $tienda->email = $request->email;
        $tienda->mapa = $request->mapa;
        $tienda->save();


        // $image = New Image();
        // $image->image = $path;
        // $image->tienda_id = $tienda->id;
        // $image->save();

        /*return response()->json([
            'status' => true,
            'datos' => $tienda,
            'message' => 'Tienda Registrada Correctamente'
        ]);*/
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
    public function update(TiendaUpdateRequest $request)
    {
        $tienda = Tienda::findOrFail($request->id);
        $tienda->nombre = $request->nombre;
        $tienda->direccion = $request->direccion;
        $tienda->telefono = $request->telefono;
        $tienda->email = $request->email;
        $tienda->mapa = $request->mapa;
        $tienda->save();

        return $tienda;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $tienda = Tienda::destroy($request->id);
        $image  = Image::where('tienda_id',$request->id)->destroy();

        return $tienda;
    }
}
