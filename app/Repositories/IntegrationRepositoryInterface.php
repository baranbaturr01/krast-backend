<?php

namespace App\Repositories;

use App\Models\Integration;

interface IntegrationRepositoryInterface
{
    public function all();

    public function find($id);

    public function create(array $data);

    public function update(Integration $integration, array $data);

    public function delete(Integration $integration);
}
