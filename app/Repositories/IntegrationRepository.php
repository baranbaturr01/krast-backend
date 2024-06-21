<?php

namespace App\Repositories;

use App\Models\Integration;

class IntegrationRepository implements IntegrationRepositoryInterface
{
    public function all()
    {
        return Integration::all();
    }

    public function find($id)
    {
        return Integration::find($id);
    }

    public function create(array $data)
    {
        return Integration::create($data);
    }

    public function update(Integration $integration, array $data)
    {
        return $integration->update($data);
    }

    public function delete(Integration $integration)
    {
        return $integration->delete();
    }
}
