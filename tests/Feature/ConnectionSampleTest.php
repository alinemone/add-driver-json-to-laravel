<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class ConnectionSampleTest extends TestCase
{
    public function testConnection()
    {
        DB::connection("json");
        $this->assertTrue(true);
    }
}
