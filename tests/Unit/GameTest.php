<?php

use App\Models\Game;
use Illuminate\Database\QueryException;
use function PHPUnit\Framework\assertEquals;

it('cannot be a duplicate', function () {
    $game = Game::factory()->create();
    $game->replicate()->save();

    assertEquals(1, Game::all()->count());
})->throws(QueryException::class);
