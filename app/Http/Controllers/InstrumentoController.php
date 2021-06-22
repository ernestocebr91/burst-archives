<?php

namespace App\Http\Controllers;

use App\Models\Instrumento;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

class InstrumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['instrumentos'] = Instrumento::paginate(5);
        return view('admin.mostrarInstrumentos', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('/instrumento/nuevoInstrumento');
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
        $datosInstrumento = request()->except('_token');

        // Almacenamos la imagen seleccionada en storage/public/uploads.
        if ($request->hasFile('imagenPrincipal') && $request->hasFile('imagenUno') && $request->hasFile('imagenDos') && $request->hasFile('imagenTres') && $request->hasFile('imagenCuatro') && $request->hasFile('imagenCinco') && $request->hasFile('imagenSeis') && $request->hasFile('imagenOwner') && $request->hasFile('imagenComponente') && $request->hasFile('imagenDisco')) {
            $datosInstrumento['imagenPrincipal'] = $request->file('imagenPrincipal')->store('uploads', 'public');
            $datosInstrumento['imagenUno'] = $request->file('imagenUno')->store('uploads', 'public');
            $datosInstrumento['imagenDos'] = $request->file('imagenDos')->store('uploads', 'public');
            $datosInstrumento['imagenTres'] = $request->file('imagenTres')->store('uploads', 'public');
            $datosInstrumento['imagenCuatro'] = $request->file('imagenCuatro')->store('uploads', 'public');
            $datosInstrumento['imagenCinco'] = $request->file('imagenCinco')->store('uploads', 'public');
            $datosInstrumento['imagenSeis'] = $request->file('imagenSeis')->store('uploads', 'public');
            $datosInstrumento['imagenOwner'] = $request->file('imagenOwner')->store('uploads', 'public');
            $datosInstrumento['imagenComponente'] = $request->file('imagenComponente')->store('uploads', 'public');
            $datosInstrumento['imagenDisco'] = $request->file('imagenDisco')->store('uploads', 'public');
        }

        // Insertamos los datos en la base de datos.
        Instrumento::insert($datosInstrumento);
        // Redireccionamos a la vista de admin, mostrando un mensaje.
        return redirect('/admin')->with('mensaje', 'Se ha agregado el instrumento correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instrumento  $instrumento
     * @return \Illuminate\Http\Response
     */
    public function show(Instrumento $instrumento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instrumento  $instrumento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $instrumento = Instrumento::findOrFail($id);
        return view('/admin/editarInstrumento', compact('instrumento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instrumento  $instrumento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Recolectamos los datos del formulario de modificación.
        $datosInstrumento = request()->except(['_token', '_method']);
        // Almacenamos la imagen seleccionada en storage/public/uploads.
        if ($request->hasFile('imagenPrincipal')) {
            $instrumento = Instrumento::findOrFail($id);
            Storage::delete('public/' . $instrumento->imagenPrincipal);
            $datosInstrumento['imagenPrincipal'] = $request->file('imagenPrincipal')->store('uploads', 'public');
        }

        if ($request->hasFile('imagenUno')) {
            $instrumento = Instrumento::findOrFail($id);
            Storage::delete('public/' . $instrumento->imagenUno);
            $datosInstrumento['imagenUno'] = $request->file('imagenUno')->store('uploads', 'public');
        }

        if ($request->hasFile('imagenDos')) {
            $instrumento = Instrumento::findOrFail($id);
            Storage::delete('public/' . $instrumento->imagenDos);
            $datosInstrumento['imagenDos'] = $request->file('imagenDos')->store('uploads', 'public');
        }

        if ($request->hasFile('imagenTres')) {
            $instrumento = Instrumento::findOrFail($id);
            Storage::delete('public/' . $instrumento->imagenTres);
            $datosInstrumento['imagenTres'] = $request->file('imagenTres')->store('uploads', 'public');
        }

        if ($request->hasFile('imagenCuatro')) {
            $instrumento = Instrumento::findOrFail($id);
            Storage::delete('public/' . $instrumento->imagenCuatro);
            $datosInstrumento['imagenCuatro'] = $request->file('imagenCuatro')->store('uploads', 'public');
        }

        if ($request->hasFile('imagenCinco')) {
            $instrumento = Instrumento::findOrFail($id);
            Storage::delete('public/' . $instrumento->imagenCinco);
            $datosInstrumento['imagenCinco'] = $request->file('imagenCinco')->store('uploads', 'public');
        }

        if ($request->hasFile('imagenSeis')) {
            $instrumento = Instrumento::findOrFail($id);
            Storage::delete('public/' . $instrumento->imagenSeis);
            $datosInstrumento['imagenSeis'] = $request->file('imagenSeis')->store('uploads', 'public');
        }

        if ($request->hasFile('imagenOwner')) {
            $instrumento = Instrumento::findOrFail($id);
            Storage::delete('public/' . $instrumento->imagenOwner);
            $datosInstrumento['imagenOwner'] = $request->file('imagenOwner')->store('uploads', 'public');
        }

        if ($request->hasFile('imagenComponente')) {
            $instrumento = Instrumento::findOrFail($id);
            Storage::delete('public/' . $instrumento->imagenComponente);
            $datosInstrumento['imagenComponente'] = $request->file('imagenComponente')->store('uploads', 'public');
        }
        
        if ($request->hasFile('imagenDisco')) {
            $instrumento = Instrumento::findOrFail($id);
            Storage::delete('public/' . $instrumento->imagenDisco);
            $datosInstrumento['imagenDisco'] = $request->file('imagenDisco')->store('uploads', 'public');
        }

        Instrumento::where('id', '=', $id)->update($datosInstrumento);
        $instrumento = Instrumento::findOrFail($id);
        return redirect('/admin')->with('mensaje', 'Se ha editado el instrumento correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instrumento  $instrumento
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $instrumento = Instrumento::findOrFail($id);
        if (Storage::delete('public/' . $instrumento->imagenPrincipal) && Storage::delete('public/' . $instrumento->imagenUno) && Storage::delete('public/' . $instrumento->imagenDos) && Storage::delete('public/' . $instrumento->imagenTres) && Storage::delete('public/' . $instrumento->imagenCuatro) && Storage::delete('public/' . $instrumento->imagenCinco) && Storage::delete('public/' . $instrumento->imagenSeis) && Storage::delete('public/' . $instrumento->imagenOwner) && Storage::delete('public/' . $instrumento->imagenComponente) && Storage::delete('public/' . $instrumento->imagenDisco)) {
            Instrumento::destroy($id);
        }
        return redirect('/admin')->with('mensaje', 'Se ha eliminado el instrumento correctamente.');
    }
}
