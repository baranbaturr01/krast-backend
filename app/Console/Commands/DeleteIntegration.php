<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\IntegrationRepositoryInterface;

class DeleteIntegration extends Command
{
    protected $signature = 'integration:delete {id}';
    protected $description = 'Delete an existing integration';

    protected $integrations;

    public function __construct(IntegrationRepositoryInterface $integrations)
    {
        parent::__construct();
        $this->integrations = $integrations;
    }

    public function handle()
    {
        $integration = $this->integrations->find($this->argument('id'));

        if ($integration) {
            $this->integrations->delete($integration);
            $this->info('Integration deleted successfully.');
        } else {
            $this->error('Integration not found.');
        }
    }
}
