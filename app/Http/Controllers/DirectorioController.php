<?php

namespace App\Http\Controllers;

use App\Models\Directorio;
use Illuminate\Http\Request;

class DirectorioController extends Controller
{
    public function mostrar()
    {
        $directoriosMostrar = Directorio::all();

        return view('directorio',compact('directoriosMostrar'));
    }

    public function crear()
    {
        return view('crearEntrada');
    }

    public function guardar(Request $request)
    {
        $directorioGuardar = new Directorio();

        $directorioGuardar->codigoEntrada = $request->input('codigoEntrada');
        $directorioGuardar->nombre = $request->input('nombre');
        $directorioGuardar->apellido = $request->input('apellido');
        $directorioGuardar->telefono = $request->input('telefono');
        $directorioGuardar->correo = $request->input('correo');

        $directorioGuardar->save();

        return redirect()->route('directorios.mostrar');
    }

    //Mostrar la vista para la confirmacion de borrado de un directorio
    public function eliminar(string $codigoEntrada)
    {
        $directorioEliminar = Directorio::find($codigoEntrada);

        return view('eliminar', compact('directorioEliminar'));
    }

    //Confirmar el borrado de un directorio
    public function confirmar(string $codigoEntrada)
    {
        $directorioEliminar = Directorio::find($codigoEntrada);

        ContactoController::eliminarContactos($directorioEliminar->codigoEntrada);

        $directorioEliminar->delete();

        return redirect()->route('directorios.mostrar');
    }

    public function buscar()
    {
        return view('buscar');
    }

    public function realizarbuscar(request $request)
    {

        return view('buscar');
    }
}
