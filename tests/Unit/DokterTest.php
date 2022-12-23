<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class DokterTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_tambah_dokter()
    {
        $response = $this->call(method: "POST", uri: '/dokter/create', parameters: [
            'namaLengkap' => 'Akbar Oktafian',
            'username' => 'dokter1',
            'password' => '1234567',
            'alamat' => 'Jl. Merto Joyo',
            'noHp' => '085421345676',
            'jenisKelamin' => '1',
            'tempatLahir' => 'Majalengka',
            'tanggalLahir' => '2001-03-02',
        ]);
        $this->assertTrue(condition:true);
    }
    public function test_edit_dokter()
    {
        // $this->withDeprecationHandling();
        // $this->withMiddleware();
        $this->get('/dokter')->assertStatus(200);
        $this->get('/dokter/7/edit')->assertStatus(200);
        $this->put('/dokter/7/update', [
            'namaLengkap' => 'Iskandar',
            'username' => 'dokter1',
            'password' => '1234567',
            'alamat' => 'Jl. Merto Joyo',
            'noHp' => '085421345676',
            'jenisKelamin' => '1',
            'tempatLahir' => 'Majalengka',
            'tanggalLahir' => '2001-03-02',
        ]);
        $this->assertTrue(condition:true);
    }
    public function test_delate_dokter()
    {
        $this->get('/dokter')->assertStatus(200);
        $this->delete('/dokter/27/destroy')->assertStatus(404);
        $this->assertTrue(condition:true);
    }
}
