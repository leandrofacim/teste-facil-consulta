<?php

namespace App\Http\Controllers;

use App\Http\Repositories\MedicoRepository;
use App\Http\Requests\StoreMedicoRequest;
use App\Http\Requests\VincularPacienteMedicoRequest;
use App\Http\Services\VincularPacienteMedico;

class MedicoController extends Controller
{
    private MedicoRepository $medicoRepository;

    private VincularPacienteMedico $vincularPacienteMedico;

    public function __construct(
        MedicoRepository $medicoRepository,
        VincularPacienteMedico $vincularPacienteMedico
    ) {
        $this->middleware('auth', ['only' => ['store']]);
        $this->medicoRepository = $medicoRepository;
        $this->vincularPacienteMedico = $vincularPacienteMedico;
    }

    public function index()
    {
        $all = $this->medicoRepository->all();

        return response()->json($all);
    }

    public function store(StoreMedicoRequest $request)
    {
        return $this->medicoRepository->store($request->all());
    }

    public function vincularPacienteMedico(VincularPacienteMedicoRequest $request)
    {
        return $this->vincularPacienteMedico->execute($request->all());
    }

    public function listaMedicosPorCidade($idCidade)
    {
        return $this->medicoRepository->listaMedicosPorCidade($idCidade);
    }
}
