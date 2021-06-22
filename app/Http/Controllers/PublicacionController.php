<?php

namespace App\Http\Controllers;

use App\Models\Publicacion;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class PublicacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['publicacions'] = Publicacion::paginate(5);
        return view('admin.mostrarPublicaciones', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/publicacion/nuevaPublicacion');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Recolectamos los datos del formulario de registro.
        $datosPublicacion = request()->except('_token');

        // Almacenamos la imagen seleccionada en storage/public/uploads.
        if ($request->hasFile('imagenPublicacion')) {
            $datosPublicacion['imagenPublicacion'] = $request->file('imagenPublicacion')->store('uploads', 'public');
        }
        // Insertamos los datos en la base de datos.
        Publicacion::insert($datosPublicacion);
        // Redireccionamos a la vista de admin, mostrando un mensaje.
        return redirect('/admin')->with('mensaje', 'Se ha agregado la publicación correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Publicacion $publicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $publicacion = Publicacion::findOrFail($id);
        return view('/admin/editarPublicacion', compact('publicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Recolectamos los datos del formulario de modificación.
        $datosPublicacion = request()->except(['_token', '_method']);
        // Almacenamos la imagen seleccionada en storage/public/uploads.
        if ($request->hasFile('imagenPublicacion')) {
            $publicacion = Publicacion::findOrFail($id);
            Storage::delete('public/' . $publicacion->imagenPublicacion);
            $datosPublicacion['imagenPublicacion'] = $request->file('imagenPublicacion')->store('uploads', 'public');
        }
        Publicacion::where('id', '=', $id)->update($datosPublicacion);
        $publicacion = Publicacion::findOrFail($id);
        return redirect('/admin')->with('mensaje', 'Se ha editado la publicacion correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Publicacion  $publicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $publicacion = Publicacion::findOrFail($id);
        if (Storage::delete('public/' . $publicacion->imagenPublicacion)) {
            Publicacion::destroy($id);
        }
        return redirect('/admin')->with('mensaje', 'Se ha eliminado la publicacion correctamente.');
    }
}
