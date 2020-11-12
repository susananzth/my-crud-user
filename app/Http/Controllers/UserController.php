<?php
// creo el controlador en la consola con el comando: php artisan make:controller UserController --resource

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Llamo el modelo de User.
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $users = User::all(); // Traigo todos los usuarios de la BD y los guardo en la variable
      return view('users.index', compact('users')); //Devolvemos la vista con el array que trae los usuarios
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
    public function store(Request $request)
    {
        // Utilizo el modelo para crear un nuevo registro
        User::create([
          'name' => $request->name,
          'email' => $request->email,
          'password' => $request->password,
        ]);
        //Luego que guarde, retorno a la vista anterior.
        return back();

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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
      $user->delete();
      //Luego que elimine, retorno a la vista anterior.
      return back();
    }
}
