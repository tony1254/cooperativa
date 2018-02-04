<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PersonController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 Auth::user()->authorizeRoles(['admin','user']);//se uso AUTH y la libreria para probar otra forma de uso de autenticacion
        $persons= Person::paginate(15);
        return view('personas/index')->with('persons', $persons);
        // return view('personas/index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('personas/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
             'primerNombre' => 'required|string|max:255',
             'segundoNombre' => 'string|max:255',
             'TercerNombre' => 'string|max:255',
            'fechaNacimiento' => 'required',
]);

                     
            $person=new Person();

         $person->primerNombre=$request->input('primerNombre');
         $person->segundoNombre=$request->input('segundoNombre');
         $person->fechaNacimiento=$request->input('fechaNacimiento');
         $person->save();
       \Alert::success("Registro creado con exito");
        return redirect()->route('personas.index'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(Person $person)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(Person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Person $person)
    {
         $request->validate([
             'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.$user->id,
            'rol' => 'required',
            'password' => 'nullable|string|min:6|confirmed',
]);

         
        $role=\DB::table('role_user')->where('user_id', $user->id)
                                     ->update(['role_id' => $request->input('rol')]);            
            

         $user->name=$request->input('name');
         $user->email=$request->input('email');
         $user->password= ($request->input('password')==null) ? $user->password : bcrypt($request->input('password'));
         $user->save();
       \Alert::success("Registro modificado con exito");
        return redirect()->route('users.index'); 

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy($person)
    {
$person=Person::find($person);
         $person->delete();

        // redirect
        // Session::flash('message', 'Successfully deleted the nerd!');
        \Alert::success("Registro eliminado con exito");
        return redirect()->route('personas.index'); 

        //
    }
}
