<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\IntegrationRepositoryInterface;

class UpdateIntegration extends Command
{
    protected $signature = 'integration:update {id} {marketplace} {username?} {password?}';
    protected $description = 'Update an existing integration';

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
            $data = [
                'marketplace' => $this->argument('marketplace'),
                'username' => $this->argument('username'),
                'password' => $this->argument('password'),
            ];

            $this->integrations->update($integration, $data);
            $this->info('Integration updated successfully.');
        } else {
            $this->error('Integration not found.');
        }
    }
}
