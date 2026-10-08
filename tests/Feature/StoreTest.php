<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StoreTest extends TestCase
{
    use RefreshDatabase;

    public function test_loading_the_matiere_store_page_inserts_a_matiere(): void
    {
        $response = $this->get(route('matiere.store'));

        $response->assertRedirect(route('matiere'));
        $this->assertDatabaseHas('matieres', ['codemat' => 1, 'libelle' => 'Laravel', 'coef' => 2.5]);
        $this->get(route('matiere'))->assertSee('Laravel');
    }

    public function test_loading_the_epreuve_store_page_inserts_an_epreuve(): void
    {
        $response = $this->get(route('epreuve.store'));

        $response->assertRedirect(route('epreuve'));
        $this->assertDatabaseHas('epreuves', ['numepreuve' => 1, 'lieu' => 'Salle B12']);
        $this->get(route('epreuve'))->assertSee('Salle B12');
    }
}
