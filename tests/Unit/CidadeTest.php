<?php

use App\Models\Cidade;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CidadeTest extends TestCase
{
    use RefreshDatabase;

    public function testIndexReturnsCidadesWhenCidadesExist()
    {
        Cidade::factory()->create();

        $response = $this->get('/api/cidades');

        $response->assertStatus(200)
            ->assertOk();
    }

    public function testIndexReturnsEmptyArrayWhenCidadesDoNotExist()
    {
        $response = $this->get('/api/cidades');

        $response->assertStatus(404);
    }
}
