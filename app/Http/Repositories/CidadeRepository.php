<?php

namespace App\Http\Repositories;

use App\Models\Cidade;

class CidadeRepository extends AbstractRepository
{
    protected $model;

    public function __construct(Cidade $cidadeModel)
    {
        $this->model = $cidadeModel;
    }

    public function all()
    {
        return $this->model->all();
    }
}
