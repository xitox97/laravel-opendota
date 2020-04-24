<?php

namespace Xitox97\LaravelOpendota\Tests;

use Orchestra\Testbench\TestCase;
use Xitox97\LaravelOpendota\LaravelOpendotaServiceProvider;
use Illuminate\Support\Facades\Http;
use Xitox97\LaravelOpendota\LaravelOpendota;

class ExampleTest extends TestCase
{

    protected function getPackageProviders($app)
    {
        return [LaravelOpendotaServiceProvider::class];
    }

    /** @test */
    public function test_laravel_http_player()
    {
        Http::fake([
            'https://api.opendota.com/api/players/113429216' => Http::response(
                '{"tracked_until":"1590044050","rank_tier":65,"competitive_rank":3558,"profile":{"account_id":113429216,"personaname":"T-0-M-M-Y ","name":null,"plus":false,"cheese":0,"steamid":"76561198073694944","avatar":"https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/17/17c5648c635b1a51f2457cb96bfed58d3fa3fc56.jpg","avatarmedium":"https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/17/17c5648c635b1a51f2457cb96bfed58d3fa3fc56_medium.jpg","avatarfull":"https://steamcdn-a.akamaihd.net/steamcommunity/public/images/avatars/17/17c5648c635b1a51f2457cb96bfed58d3fa3fc56_full.jpg","profileurl":"https://steamcommunity.com/id/Rain607/","last_login":"2020-04-21T06:38:22.019Z","loccountrycode":"MY","is_contributor":false},"solo_competitive_rank":4022,"leaderboard_rank":null,"mmr_estimate":{"estimate":4044}}',
                200,
                []
            ),
        ]);

        $response = Http::get('https://api.opendota.com/api/players/113429216')['profile']['account_id'];

        $this->assertSame(113429216, $response);
    }

    // public function test_get_player_function()
    // {
    //     $openDota = new LaravelOpendota();

    //     $playerID = 113429216;

    //     $player = $openDota->getPlayer($playerID);

    //     $this->assertSame(113429216, $player);
    // }

    public function test_get_players_by_rank_function()
    {
        $openDota = new LaravelOpendota();

        $players = $openDota->getLive();

        dd($players->json());
    }
}
