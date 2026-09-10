<?php

namespace Tests\Feature;

use Tests\TestCase;

class GaleriTest extends TestCase
{
    public function test_halaman_galeri_dapat_diakses(): void
    {
        $response = $this->get('/galeri');

        $response->assertStatus(200);
        $response->assertSee('Galeri Kegiatan &amp; Program', false);
        $response->assertSee('Detik Bermakna Pelajar');
        $response->assertDontSee('santri', false);
        $response->assertDontSee('Santri', false);
        $response->assertSee('Maulid Habib Ibrahim');
        $response->assertSee('Maulid Masjid Ar-Rahman');
        $response->assertSee('Aidilfitri Kg. Sungai Pinang');
        $response->assertSee('Perhimpunan Pagi Isnin');
        $response->assertSee('Jemputan Port Klang');
        $response->assertSee('maulid-masjid-video.mp4');
    }
}
