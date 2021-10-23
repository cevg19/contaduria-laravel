<?php

namespace App\Http\Controllers;

use App\Models\Terceros;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TercerosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $identificacion = $request->get('identificacion');
        $ciudad = $request->get('ciudad');
        $activo = $request->get('activo');

        $terceros = Terceros::orderBy('id', 'DESC')
            ->identificacion($identificacion)
            ->ciudad($ciudad)
            ->activo($activo)
            ->paginate(10);


        // $terceros = Terceros::orderBy('id', 'DESC')->get();

        return view('terceros.index', compact('terceros'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('terceros.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $entrada = $request->all();

        if ($archivo = $request->file('rut')) {
            $nombre = strtoupper($request->nombre . "_" . $request->apellido . "_" . $request->identificacion . "." . $archivo->guessExtension());
            Storage::putFileAs('public', $archivo, $nombre);
            $entrada['rut'] = $nombre;
        }

        /* if ($archivo = $request->file('rut')) {
            $nombre = $request->nombre . "_" . $request->apellido . "_" . $request->identificacion . "." . $archivo->guessExtension();
            $archivo->move('ruts', $nombre);

            $entrada['rut'] = $nombre;
        } */
        if ($request->activo === null) {
            $entrada['activo'] = "NO";
        }

        Terceros::create($entrada);

        return redirect()->route('terceros.index')->with('info', 'Tercero creado con exito')->with('type', 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $terceros = Terceros::find($id);


        return view('terceros.edit', compact('terceros'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Terceros $tercero)
    {
        // $terceros = Terceros::find($id);
        $entrada = $request->all();
        // dd(Terceros::where('id', '=', $id)->pluck('rut'));
        // dd($tercero);

        if ($archivo = $request->file('rut')) {
            $nombre = strtoupper($request->nombre . "_" . $request->apellido . "_" . $request->identificacion . ".") . $archivo->guessExtension();
            Storage::delete($nombre);

            Storage::putFileAs('public', $archivo, $nombre);
            $entrada['rut'] = $nombre;
        }

        /*  if ($archivo = $request->file('rut')) {
            $nombre = $request->nombre . "_" . $request->apellido . "_" . $request->identificacion . "." . $archivo->guessExtension();
            $archivo->move('ruts', $nombre);
            $entrada['rut'] = $nombre;
        } */

        if ($request->activo === null) {
            $entrada['activo'] = "NO";
        }

        $tercero->update($entrada);
        // $terceros->update($request->except('_token'));
        return redirect()->route('terceros.edit', $tercero)->with('info', 'Tercero actualizado con exito')->with('type', 'warning');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $terceros = Terceros::find($id);
        $terceros->delete();

        return redirect()->route('terceros.index', $terceros)->with('info', 'Tercero eliminado')->with('type', 'danger');
    }

    public function showRut($id)
    {

        $rut = Terceros::where('id', '=', $id)->pluck('rut');
        return Storage::download('rut', $rut);
    }
}
