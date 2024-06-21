<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Repositories\IntegrationRepositoryInterface;

class AddIntegration extends Command
{
    protected $signature = 'integration:add {marketplace} {username?} {password?}';
    protected $description = 'Add a new integration';

    protected $integrations;

    public function __construct(IntegrationRepositoryInterface $integrations)
    {
        parent::__construct();
        $this->integrations = $integrations;
    }

    public function handle()
    {
        $data = [
            'marketplace' => $this->argument('marketplace'),
            'username' => $this->argument('username'),
            'password' => $this->argument('password'),
        ];

        $this->integrations->create($data);
        $this->info('Integration added successfully.');
    }
}
