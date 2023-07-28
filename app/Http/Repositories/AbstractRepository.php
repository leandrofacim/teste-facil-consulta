<?php

namespace App\Http\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractRepository implements Repository
{
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function create(array $data)
    {
        return $this->model->create($data);
    }

    public function all()
    {
        return $this->model->all();
    }

    public function findById($id)
    {
        return $this->model->find($id);
    }

    public function update($id, array $data)
    {
        $entity = $this->findById($id);
        if ($entity) {
            $entity->update($data);
            return $entity;
        }
        return null;
    }

    public function delete($id)
    {
        $entity = $this->findById($id);
        if ($entity) {
            $entity->delete();
            return true;
        }
        return false;
    }
}
