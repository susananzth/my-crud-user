<?php
// creo el controlador en la consola con el comando: php artisan make:controller UserController --resource

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Llamo el modelo de User.
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Llamo la tabla users utilizando el Modelo User.
        // Lo Guardo en $users
        $users = User::latest()->get();
        // Lo muestro en la vista users.index
        return view('users.index',[
          'users' => $users
        ]);
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
    public function show(User $user)
    {
        $user->delete();
        //Luego que elimine, retorno a la vista anterior.
        return back();
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
    public function destroy($id)
    {
        //
    }
}
