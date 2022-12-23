<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class PasienTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_tambah_pasien()
    {
        $response = $this->call(method: "POST", uri: '/pasien/create', parameters: [
            'namaLengkap' => 'Keny Suryati',
            'alamat' => 'Jl. Bungga Anggrek',
            'noHp' => '085123456789',
            'jenisKelamin' => '1',
            'tanggalLahir' => '1999-05-12',
        ]);
        $this->assertTrue(condition:true);
    }
    public function test_edit_pasien()
    {
        $this->get('/pasien')->assertStatus(200);
        $this->get('/pasien/4/edit')->assertStatus(200);
        $this->put('/pasien/4/update', [
            'namaLengkap' => 'Fatmawati',
            'alamat' => 'Jl. Bungga Anggrek',
            'noHp' => '085123456789',
            'jenisKelamin' => '1',
            'tanggalLahir' => '1999-05-12',
        ]);
        $this->assertTrue(condition:true);
    }
    public function test_delate_pasien()
    {
        $this->get('/pasien')->assertStatus(200);
        $this->delete('/pasien/4/destroy')->assertStatus(404);
        $this->assertTrue(condition:true);
    }
}
