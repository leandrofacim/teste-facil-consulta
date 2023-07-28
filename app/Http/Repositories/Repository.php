<?php

namespace App\Http\Repositories;

interface Repository
{
    public function create(array $data);

    public function findById($id);

    public function update($id, array $data);

    public function delete($id);
}
