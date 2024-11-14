<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PHPUnit\Exception;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            $users = User::paginate(10);
            return view('users.index', compact('users'));
        } catch (\Exception $e) {
            // si ocurre un error, enviar mensaje a Discord o Slack
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = User::create($request->all());
        return redirect()->route('usuarios.index')->with('success', 'Registro creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        try {
            $user = User::find($id);
            return view('users.show', compact('user'));
        } catch (\Exception $e) {
            // si ocurre un error, enviar mensaje a Discord o Slack
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            $user = User::find($id);
            return view('users.edit', compact('user'));
        } catch (\Exception $e) {
            //throw $th;
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $user = User::findOrFail($id);
            $user->update($request->all());
            return redirect()->route('usuarios.index')->with('success', 'Registro actualizado correctamente.');
        } catch (\Exception $e) {
            //throw $th;
        }
    }
        // TRASHED
    public function trashed()
{
    $users = User::withTrashed()->paginate(10);  // Obtener solo los usuarios archivados
    return view('users.trashed', compact('users'));  // Retornar la vista con los usuarios archivados
}

    //UNTRASHED
public function restore(string $id)
{
    $user = User::withTrashed()->findOrFail($id);  // Buscar usuario archivado
    $user->restore();  // Restaurar el usuario

    return back()->with('success', 'Usuario restaurado correctamente.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $user = User::find($id)->delete();
            return back()->with('success','Se ha eliminado correctamente');
        } catch (\Exception $e) {
            // si ocurre un error, enviar mensaje a Discord o Slack
        }
    }
}
