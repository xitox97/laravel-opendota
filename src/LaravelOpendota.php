<?php

namespace Xitox97\LaravelOpendota;

use Illuminate\Support\Facades\Http;

class LaravelOpendota
{


    public function __construct()
    {
        $this->api_url = 'https://api.opendota.com/api/';
    }

    /**
     * Get player details based on player dota 2 ID
     */
    public function getPlayer($player_id)
    {
        return Http::get($this->api_url . 'players/' . $player_id);
    }

    /**
     * Get match details based on match ID
     */
    public function getMatch($match_id)
    {
        return Http::get($this->api_url . 'matches/' . $match_id);
    }

    /**
     * Players ordered by rank/medal tier
     */
    public function getPlayersByRank()
    {
        return Http::get($this->api_url . 'playersByRank');
    }

    /**
     * Get list of pro players
     */
    public function getProPlayers()
    {
        return Http::get($this->api_url . 'proPlayers');
    }

    /**
     * Get list of pro matches
     */
    public function proMatches()
    {
        return Http::get($this->api_url . 'proMatches');
    }

    /**
     * Get list of randomly sampled public matches
     */
    public function publicMatches()
    {
        return Http::get($this->api_url . 'publicMatches');
    }
}
