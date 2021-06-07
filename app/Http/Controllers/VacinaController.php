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
        $idades = collect();
        $idades->add(['idade' => -1, 'descricao' => 'Indefinida']);

        for ($i = 0; $i <= 11; $i++) {
            if ($i == 0) {
                $idades->add(['idade' => $i / 100, 'descricao' => 'Ao nascer']);
            } else if ($i == 1) {
                $idades->add(['idade' => $i / 100, 'descricao' => '1 mês']);
            } else {
                $idades->add(['idade' => $i / 100, 'descricao' => $i . ' meses']);
            }
        }

        for ($i = 1; $i <= 60; $i++) {
            if ($i == 1) {
                $idades->add(['idade' => $i, 'descricao' => '1 ano']);
            } else {
                $idades->add(['idade' => $i, 'descricao' => $i . ' anos']);
            }
        }

        return view('vacinas.criar-vacina', [
            'idades' => $idades
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
            'nome' => ['required', 'max:255'],
            'categoria' => ['required', 'max:255'],
            'prevencoes' => ['max:255'],
            'idades' => ['present', 'array']
        ]);

        $vacina = new Vacina;
        $vacina->nome = $validatedData['nome'];
        $vacina->categoria = $validatedData['categoria'];
        $vacina->prevencoes = $validatedData['prevencoes'];
        $vacina->repetivel = (bool)$request['repetivel'];
        $vacina->save();

        $total_doses = count($request->idades);

        if ($vacina->repetivel) {
            $total_doses = 1;
        }

        for ($i = 0; $i < $total_doses; $i++) {
            $vacina->doses()->create([
                'idade' => $request->idades[$i],
                'descricao' => $request->descricoes[$i]
            ]);
        }

        session()->flash('successMessage', 'Vacina ' . $vacina->nome . ' foi criada com sucesso!');

        return redirect()->route('vacinas.create');
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
        $usuario = auth()->user();
        $doses = $vacina->doses()->where('idade', '<=', $usuario->getIdadeDecimal())->get();

        if ($vacina->repetivel) {
            return response()->json($doses);
        }

        return response()->json($doses->diff($usuario->getDoses()));
    }
}
