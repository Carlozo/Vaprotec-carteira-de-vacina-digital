<?php

namespace App\Http\Controllers;

use App\Models\Dose;
use App\Models\UsuarioDose;
use App\Models\Vacina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UsuarioDoseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usuario = auth()->user();

        $doses_tomadas = $usuario->getDoses();
        $idade_limite = $usuario->getIdadeDecimal();

        $vacinas = collect();

        foreach (Vacina::all() as $vacina) {
            if ($vacina->categoria == 'Viajante' && !$usuario->viajante ||
                $vacina->categoria == 'Gestante' && !$usuario->gestante) {
                continue;
            }

            if ($vacina->repetivel || count($vacina->doses()->where('idade', '<=', $idade_limite)->get()->diff($doses_tomadas)) > 0) {
                $vacinas->add($vacina);
            }
        }

        return view('vacinas.adicionar-vacina', [
            'vacinas' => $vacinas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'dose' => ['required', 'exists:doses,id'],
            'data' => ['required'],
            'observacoes' => ['max:255']
        ]);

        $dose = new UsuarioDose;
        $dose->user()->associate(Auth::user());
        $dose->dose()->associate(Dose::find($validatedData['dose']));
        $dose->data = $validatedData['data'];
        $dose->observacoes = $validatedData['observacoes'];
        $dose->save();

        session()->flash('successMessage', 'Dose da vacina ' . $dose->dose->vacina->nome . ' adicionada com sucesso!');

        return redirect()->route('usuarios.minha-caderneta');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\UsuarioDose $usuarioDose
     * @return \Illuminate\Http\Response
     */
    public function show(UsuarioDose $usuarioDose)
    {
        return response()->json(UsuarioDose::with('dose.vacina')->where('id', $usuarioDose->id)->first());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\UsuarioDose $usuarioDose
     * @return \Illuminate\Http\Response
     */
    public function edit(UsuarioDose $usuarioDose)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\UsuarioDose $usuarioDose
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UsuarioDose $usuarioDose)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\UsuarioDose $usuarioDose
     * @return \Illuminate\Http\Response
     */
    public function destroy(UsuarioDose $usuarioDose)
    {
        if (auth()->user()->id !== $usuarioDose->user->id) {
            return response()->json(['Você está tentando excluir uma fasdjfklalfkl!'], 403);
        }

        $usuarioDose->delete();
        return response()->noContent();
    }
}
