<?php

namespace App\Http\Controllers;

use App\Models\Vacina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioController extends Controller
{

    public function show()
    {
        $usuario = auth()->user();

        $max_idade = $usuario->getIdadeDecimal();

        $doses_tomadas = $usuario->getDoses();
        $doses_pendentes = collect();

        foreach (Vacina::all() as $vacina) {
            if ($vacina->categoria == 'Viajante' && !$usuario->viajante ||
                $vacina->categoria == 'Gestante' && !$usuario->gestante) {
                continue;
            }

            $doses_nao_tomadas = $vacina->doses()->where('idade', '<=', $max_idade)->get()->diff($doses_tomadas);

            if (count($doses_nao_tomadas) > 0) {
                $doses_pendentes->push($doses_nao_tomadas);
            }
        }

        return view('usuarios.meu-perfil', [
            'usuario' => $usuario,
            'total_doses_pendentes' => count($doses_pendentes),
            'doses_pendentes' => $doses_pendentes
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
        $user->birth_date = $validatedData['birth_date'];
        $user->gender = $validatedData['gender'];

        if ($user->gender == 'Feminino') {
            $user->gestante = (bool)$request['gestante'];
        } else {
            $user->gestante = false;
        }

        $user->viajante = (bool)$request['viajante'];

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
