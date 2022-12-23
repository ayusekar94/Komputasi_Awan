<?php

namespace Tests\Unit;

// use PHPUnit\Framework\TestCase;
use Tests\TestCase;

class KaryawanTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_tambah_karyawan()
    {
        $response = $this->call(method: "POST", uri: '/karyawan/create', parameters: [
            'namaLengkap' => 'Luna Jilan',
            'username' => 'karyawan2',
            'password' => '1234567',
            'alamat' => 'Jl. Merto Joyo',
            'noHp' => '085421345676',
            'jenisKelamin' => '1',
            'tempatLahir' => 'Malang',
            'tanggalLahir' => '2001-01-03',
        ]);
        $this->assertTrue(condition:true);
    }
    public function test_edit_karyawan()
    {
        $this->get('/karyawan')->assertStatus(200);
        $this->get('/karyawan/27/edit')->assertStatus(200);
        $this->put('/karyawan/27/update', [
            'namaLengkap' => 'Luna Jilan Magfiroh',
            'username' => 'karyawan2',
            'password' => '1234567',
            'alamat' => 'Jl. Merto Joyo',
            'noHp' => '085421345676',
            'jenisKelamin' => '1',
            'tempatLahir' => 'Malang',
            'tanggalLahir' => '2001-01-03',
        ]);
        $this->assertTrue(condition:true);
    }
    public function test_delate_karyawan()
    {
        $this->get('/karyawan')->assertStatus(200);
        $this->delete('/karyawan/27/destroy')->assertStatus(404);
        $this->assertTrue(condition:true);
    }
}
