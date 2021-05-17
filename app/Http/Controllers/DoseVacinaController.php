<?php

namespace App\Http\Controllers;

use App\Models\DoseVacina;
use App\Models\Vacina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DoseVacinaController extends Controller
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
        return view('vacinas.adicionar-vacina', [
            'vacinas' => Vacina::all()
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
            'vacina_id' => ['required', 'exists:vacinas,id'],
            'data' => ['required'],
            'observacoes' => ['max:255']
        ]);

        $dose = new DoseVacina;
        $dose->user()->associate(Auth::user());
        $dose->vacina()->associate(Vacina::find($validatedData['vacina_id']));
        $dose->data = $validatedData['data'];
        $dose->observacoes = $validatedData['observacoes'];
        $dose->save();

        // auth()->user()->doses()->create($validatedData);

        session()->flash('successMessage', 'Vacina adicionada com sucesso!');

        return redirect()->route('usuarios.minha-caderneta');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\DoseVacina $doseVacina
     * @return \Illuminate\Http\Response
     */
    public function show(DoseVacina $doseVacina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\DoseVacina $doseVacina
     * @return \Illuminate\Http\Response
     */
    public function edit(DoseVacina $doseVacina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\DoseVacina $doseVacina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoseVacina $doseVacina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\DoseVacina $doseVacina
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoseVacina $doseVacina)
    {
        //
    }
}
