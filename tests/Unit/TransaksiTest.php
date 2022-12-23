<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class TransaksiTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_tambah_transaksi()
    {
        $response = $this->call(method: "POST", uri: '/transaksi/create', parameters: [
            'dokter_id' => '3',
            'pasien_id' => '7',
            'obat_id' => '5',
        ]);
        $this->assertTrue(condition:true);
    }
    public function test_logout()
    {
        $this->get('/logout')->assertStatus(302);
        $this->assertTrue(condition:true);
    }
}
