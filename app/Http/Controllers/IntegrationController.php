<?php

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\IntegrationRepositoryInterface;
use App\Http\Requests\IntegrationRequest;
use App\Models\Integration;

class IntegrationController extends Controller
{
    protected $integrations;

    public function __construct(IntegrationRepositoryInterface $integrations)
    {
        $this->integrations = $integrations;
    }

    public function store(IntegrationRequest $request)
    {
        $integration = $this->integrations->create($request->validated());
        return response()->json($integration, 201);
    }

    public function update(IntegrationRequest $request, $id)
    {
        $integration = $this->integrations->find($id);
        if ($integration) {
            $this->integrations->update($integration, $request->validated());
            return response()->json($integration, 200);
        }
        return response()->json(['error' => 'Integration not found'], 404);
    }

    public function destroy($id)
    {
        $integration = $this->integrations->find($id);
        if ($integration) {
            $this->integrations->delete($integration);
            return response()->json(['message' => 'Integration deleted'], 200);
        }
        return response()->json(['error' => 'Integration not found'], 404);
    }
}
