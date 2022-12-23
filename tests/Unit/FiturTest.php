<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class FiturTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_print()
    {
        $this->get('/dashboard')->assertStatus(200);
        $this->onclick('window.print()')->assertStatus(200);
    }
}
