<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Carbon\Carbon;
use App\Providers\RouteServiceProvider;

class PageControllerX extends Controller
{
    protected $redirectTo = RouteServiceProvider::HOME;
    public function __construct(){
            $this->middleware('auth')->only('principal','notas.detalle','notas.eliminar','notas.editar','notas.update');
            
    }
    public function login(){ 
        return view('login');
    }
    public function login_usuario(Request $request){ 
        #return dd($request->all());
        $data = request()->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Ingrese un Email',
            'password.required' => 'Ingrese un Password'
        ]);
        if (Auth::attempt($data)){ 
            $con='OK';
        }
        $email=$request->get('email');
        $pass=$request->get('password');
        $query = Usuario::where('email','=',$email)->get();
        if ($query->count() !=0){ 
            $query2= Usuario::where('password','=',$pass)->get();
            if($query2->count() !=0){
                $_SESSION["usuario"] = "usuario";
                $usuario = $_SESSION['usuario'];
                return redirect('/inicio');
            }else{ 
                return back()->withErrors(['password'=>'Contraseña no valida'])->withInput([request('password')]);
            }
        }
        else
        { 
            return back()->withErrors(['email'=>'email no valido'])->withInput([request('name')]);
        }
    }

    
    public function notas()
    {
        $notas = Usuario::paginate(3);
        return view('notas', compact('notas'));
    }
    public function detalle($id)
    {
        $nota = Usuario::findOrFail($id);
        return view('notas.detalle', compact('nota'));
    }
    
    public function principal(){
        $notas = Usuario::paginate(3);
        return view('sitio.inicio', compact('notas'));
    }
    public function crear(Request $request)
    {
        return dd($request->all());
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios,email'],
            'password' => ['required', 'string'],
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
        $request->validate([
            'email' => ['required', 'string', 'email', 'max:255', 'unique:usuarios,email'],
            'password' => ['required', 'string', 'min:8'],
            'nombre' => ['required', 'string', 'max:255'],
            'apellido' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'direccion' => ['required', 'string', 'max:255'],
            'pago' => ['required', 'string', 'max:255'],
            'trabajo' => ['required', 'string', 'max:255'],
        ]);
        $notaupdate = Usuario::findOrFail($id);
        $notaupdate->email = $request->email;
        $notaupdate->password = $request->password;
        $notaupdate->nombre = $request->nombre;
        $notaupdate->apellido = $request->apellido;
        $notaupdate->telefono = $request->telefono;
        $notaupdate->direccion = $request->direccion;
        $notaupdate->pago = $request->pago;
        $notaupdate->trabajo = $request->trabajo;

        $notaupdate->save();

        return back()->with('mnsj', 'Nota acctualizada');
    }
    public function eliminar($id){
        $NotaEliminar = Usuario::findOrFail($id);
        $NotaEliminar->delete();

        return back()->with('mnsj', 'Nota eliminada');
        
    }
}
