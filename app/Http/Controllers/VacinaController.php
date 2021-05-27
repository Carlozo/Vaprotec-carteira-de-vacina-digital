<?php

namespace App\Http\Controllers;

use App\Models\Vacina;
use Illuminate\Http\Request;

class VacinaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('vacinas.informacoes');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vacinas.criar-vacina');
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
            'nome' => ['required', 'max:255'],
            'categoria' => ['required', 'max:255'],
            'prevencoes' => ['max:255']
        ]);

        $vacina = Vacina::create($validatedData);

        for ($i = 0; $i < count($request->idade); $i++) {
            $vacina->doses()->create([
                'idade' => $request->idade[$i]
            ]);
        }

        return redirect()->route('vacinas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Vacina $vacina
     * @return \Illuminate\Http\Response
     */
    public function show(Vacina $vacina)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Vacina $vacina
     * @return \Illuminate\Http\Response
     */
    public function edit(Vacina $vacina)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Vacina $vacina
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vacina $vacina)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Vacina $vacina
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vacina $vacina)
    {
        //
    }


    public function showCalendario()
    {
        return view('vacinas.calendario');
    }

    public function showMenuVacina()
    {
        return view('vacinas.vacina');
    }

    public function getDoses(Vacina $vacina)
    {
        return response()->json($vacina->doses);
    }
}
