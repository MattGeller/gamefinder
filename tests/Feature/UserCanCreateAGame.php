<?php

use App\Models\Game;
use App\Models\User;
use function Pest\Laravel\actingAs;
use function PHPUnit\Framework\assertTrue;

test('user can create a game', function () {
\Pest\Laravel\withoutExceptionHandling();

    $user = User::factory()->create();
    actingAs($user);

    $game = Game::factory()->make();

    $response = $this->post('/games', $game->attributesToArray());

    $response->assertStatus(200);
    assertTrue(Game::first()->user->is($user));
});
