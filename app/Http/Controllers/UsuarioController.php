<?php

namespace App\Http\Controllers;

use App\Models\Dose;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{

    public function show()
    {
        $usuario = auth()->user();

        $idade = $usuario->getIdadeDecimal();

        $todas_doses = Dose::where('idade', '<=', $idade)->get();

        $doses_pendentes = $todas_doses->diff($usuario->getDoses());

        return view('usuarios.meu-perfil', [
            'usuario' => $usuario,
            'total_doses_pendentes' => count($doses_pendentes)
        ]);
    }

    public function showCaderneta()
    {
        return view('usuarios.minha-caderneta', [
            'usuario' => auth()->user()
        ]);
    }

    public function showConfiguracoes()
    {
        return view('usuarios.configuracoes');
    }

    public function edit()
    {
        return view('usuarios.editar-perfil', [
            'usuario' => Auth::user()
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required'],
            'gender' => ['required'],
            'birth_date' => ['required']
        ]);

        $user = auth()->user();
        $user->name = $validatedData['name'];
        $user->gender = $validatedData['gender'];
        $user->birth_date = $validatedData['birth_date'];
        $user->save();

        session()->flash('successMessage', 'Perfil atualizado com sucesso!');

        return redirect()->route('usuarios.meu-perfil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        auth()->user()->delete();

        return redirect()->route('login');
    }
}
