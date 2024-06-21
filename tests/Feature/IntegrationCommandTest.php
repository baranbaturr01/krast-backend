<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class IntegrationCommandTest extends TestCase
{
    use RefreshDatabase;

    public function test_integration_command_should_run_successfully()
    {
        $this->artisan('integration:add', [
            'marketplace' => 'hepsiburada',
            '--username' => 'username',
            '--password' => 'password',
        ])->assertExitCode(0);
    }
}
