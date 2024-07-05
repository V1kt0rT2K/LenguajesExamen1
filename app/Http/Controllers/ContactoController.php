<?php

namespace App\Http\Controllers;

use App\Models\Directorio;
use App\Models\Contacto;

use Illuminate\Http\Request;

class ContactoController extends Controller
{
    public function mostrar(string $codigoEntrada)
    {
        $directorioMostrar = Directorio::find($codigoEntrada);

        $contactosMostrar = Contacto::where('codigoEntrada',$codigoEntrada)->get();

        return view('vercontactos',compact('directorioMostrar','contactosMostrar'));
    }

    public static function eliminarContactos(string $codigoEntrada)
    {
        $contactosEliminar = Contacto::where('codigoEntrada',$codigoEntrada)->get();

        foreach($contactosEliminar as $contacto)
        {
            $contacto->delete();
        }
    }

    public function eliminar(int $id)
    {
        $contactoEliminar = Contacto::find($id);

        $aux = $contactoEliminar->codigoEntrada;


        $contactoEliminar->delete();

        return redirect()->route('contactos.mostrar', $aux);
    }

    public function buscar(Request $request)
    {
        $directorioBuscar = Directorio::where('correo', $request->input('correo'))->get();

        //echo $directorioBuscar;
        return redirect()->route('contactos.mostrar', $directorioBuscar[0]->codigoEntrada);
    }

    public function crear(string $codigoEntrada)
    {
        return view('agregarcontacto',compact('codigoEntrada'));
    }

    public function guardar(Request $request)
    {
        $contactoGuardar = new Contacto();

        //echo $request;

        $contactoGuardar->codigoEntrada = $request->input('codigoEntrada');
        $contactoGuardar->nombre = $request->input('nombre');
        $contactoGuardar->apellido = $request->input('apellido');
        $contactoGuardar->telefono = $request->input('telefono');

        $contactoGuardar->save();

        return redirect()->route('contactos.mostrar', $request->input('codigo'));
        
    }
}
