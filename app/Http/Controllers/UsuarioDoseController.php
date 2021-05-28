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

        session()->flash('successMessage', 'Dose da vacina adicionada com sucesso!');

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
        //
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
        //
    }
}
