<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Validator;

class PageControllerX extends Controller
{
    
    public function inicio()
    {
        return view('index', ['numero' => 125]);
    }
    public function fotos($numero = 'sin numero')
    {
        return 'galería de fotos ' . $numero;
    }
    public function nosotros($nombre = null)
    {
        $equipo = ['Ignacio', 'Juan', 'Ted'];
        /* return view('nosotros', ['equipo'=>$equipo]);
         */
        return view('nosotros', compact('equipo', 'nombre'));
    }
    public function notas()
    {
        $notas = Usuario::paginate(2);
        return view('notas', compact('notas'));
    }
    public function detalle($id)
    {
        $nota = Usuario::findOrFail($id);
        return view('notas.detalle', compact('nota'));
    }
    

    public function crear(Request $request)
    {
        //return $request->all();
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'pago' => ['required', 'string', 'max:255'],
            'trabajo' => ['required', 'string', 'max:255'],
        ]);
        $NotaNueva = new Usuario;
        $NotaNueva->email = $request->email;
        $NotaNueva->password = $request->password;
        $NotaNueva->nombre = $request->nombre;
        $NotaNueva->apellido = $request->apellido;
        $NotaNueva->telefono = $request->telefono;
        $NotaNueva->direccion = $request->direccion;
        $NotaNueva->pago = $request->pago;
        $NotaNueva->trabajo = $request->trabajo;
        $NotaNueva->save();
        return back()->with('mnsj', 'Datos agregados');
    }
    public function editar($id)
    {
        $nota = Usuario::findOrFail($id);
        return view('notas.editar', compact('nota'));
    }
    public function update(Request $request, $id)
    {
        $notaupdate = Usuario::findOrFail($id);
        $notaupdate->nombre = $request->nombre;
        $notaupdate->descripcion = $request->descripcion;

        $notaupdate->save();

        return back()->with('mnsj', 'Nota acctualizada');
    }
    public function eliminar($id){
        $NotaEliminar = Usuario::findOrFail($id);
        $NotaEliminar->delete();

        return back()->with('mnsj', 'Nota eliminada');
        
    }
}
