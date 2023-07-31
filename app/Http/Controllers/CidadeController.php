<?php

namespace App\Http\Controllers;

use App\Http\Repositories\CidadeRepository;

class CidadeController extends Controller
{
    public function index(CidadeRepository $cidadeRepository)
    {
        $cidades = $cidadeRepository->all();

        if (!$cidades->count()) {
            return response()->json([], 404);
        }

        return response()->json($cidades);
    }
}
