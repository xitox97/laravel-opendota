<?php

namespace Xitox97\LaravelOpendota;

use Illuminate\Support\Facades\Http;

class LaravelOpendota
{


    public function __construct()
    {
        $this->api_url = 'https://api.opendota.com/api/';
        $this->api_key = ['api_key' => config('opendota.api_key')];
    }

    /**
     * Get player details based on player dota 2 ID
     * @param int $player_id {account_id}
     */
    public function getPlayer($player_id)
    {
        return Http::get($this->api_url . 'players/' . $player_id , $this->api_key);
    }

    /**
     * Get player Win/Loss count
     * @param int $player_id {account_id}
     * @param mixed $params = [] Assoc array of parameters applied (see OpenDota docs for reference)
     */
    public function getPlayerWL($player_id, $params = [])
    {
        return Http::get($this->api_url . 'players/' . $player_id . '/wl', array_merge($this->api_key, $params));
    }

    /**
     * Get player Recent matches played
     * @param int $player_id {account_id}
     */
    public function getPlayerRecentMatches($player_id)
    {
        return Http::get($this->api_url . 'players/' . $player_id . '/recentMatches', $this->api_key);
    }

    /**
     * Get player Matches played
     * @param int $player_id {account_id}
     * @param mixed $params = [] Assoc array of parameters applied (see OpenDota docs for reference)
     */
    public function getPlayerMatches($player_id, $params = [])
    {
        return Http::get($this->api_url . 'players/' . $player_id . '/matches', array_merge($this->api_key, $params));
    }

    /**
     * Get player Heroes played
     * @param int $player_id {account_id}
     * @param mixed $params = [] Assoc array of parameters applied (see OpenDota docs for reference)
     */
    public function getPlayerHeroes($player_id, $params = [])
    {
        return Http::get($this->api_url . 'players/' . $player_id . '/heroes', array_merge($this->api_key, $params));
    }

    /**
     * Get Players played with
     * @param int $player_id {account_id}
     * @param mixed $params = [] Assoc array of parameters applied (see OpenDota docs for reference)
     */
    public function getPlayerPeers($player_id, $params = [])
    {
        return Http::get($this->api_url . 'players/' . $player_id . '/peers', array_merge($this->api_key, $params));
    }

    /**
     * Get Pro players played with the player
     * @param int $player_id {account_id}
     * @param mixed $params = [] Assoc array of parameters applied (see OpenDota docs for reference)
     */
    public function getPlayerPros($player_id, $params = [])
    {
        return Http::get($this->api_url . 'players/' . $player_id . '/pros', array_merge($this->api_key, $params));
    }

    /**
     * Get player's Totals in stats
     * @param int $player_id {account_id}
     * @param mixed $params = [] Assoc array of parameters applied (see OpenDota docs for reference)
     */
    public function getPlayerTotals($player_id, $params = [])
    {
        return Http::get($this->api_url . 'players/' . $player_id . '/totals', array_merge($this->api_key, $params));
    }

    /**
     * Get player's Counts in categories
     * @param int $player_id {account_id}
     * @param mixed $params = [] Assoc array of parameters applied (see OpenDota docs for reference)
     */
    public function getPlayerCounts($player_id, $params = [])
    {
        return Http::get($this->api_url . 'players/' . $player_id . '/counts', array_merge($this->api_key, $params));
    }

    /**
     * Get player's Counts in categories
     * @param int $player_id {account_id}
     * @param string $field = "" A field to aggregate on
     * @param mixed $params = [] Assoc array of parameters applied (see OpenDota docs for reference)
     */
    public function getPlayerHistograms($player_id, $field = "", $params = [])
    {
        return Http::get($this->api_url . 'players/' . $player_id . '/histograms/' . $field , array_merge($this->api_key, $params));
    }

    /**
     * Get player's Wards placed in matches played
     * @param int $player_id {account_id}
     * @param mixed $params = [] Assoc array of parameters applied (see OpenDota docs for reference)
     */
    public function getPlayerWardmap($player_id, $params = [])
    {
        return Http::get($this->api_url . 'players/' . $player_id . '/wardmap', array_merge($this->api_key, $params));
    }

    /**
     * Get player's Words said/read in matches played
     * @param int $player_id {account_id}
     * @param mixed $params = [] Assoc array of parameters applied (see OpenDota docs for reference)
     */
    public function getPlayerWordcloud($player_id, $params = [])
    {
        return Http::get($this->api_url . 'players/' . $player_id . '/wordcloud', array_merge($this->api_key, $params));
    }

    /**
     * Get player's Player rating history
     * @param int $player_id {account_id}
     * @param mixed $params = [] Assoc array of parameters applied (see OpenDota docs for reference)
     */
    public function getPlayerRatings($player_id, $params = [])
    {
        return Http::get($this->api_url . 'players/' . $player_id . '/ratings', array_merge($this->api_key, $params));
    }

    /**
     * Get player's hero rankings
     * @param int $player_id {account_id}
     */
    public function getPlayerRankings($player_id)
    {
        return Http::get($this->api_url . 'players/' . $player_id . '/rankings', $this->api_key);
    }

    /**
     * Request for refresh player match history
     * @param int $player_id {account_id}
     */
    public function postPlayerRefresh($player_id)
    {
        return Http::post($this->api_url . 'players/' . $player_id . '/refresh', $this->api_key);
    }

    /**
     * Get match details based on match ID
     * @param string $match_id {match_id}
     */
    public function getMatch($match_id)
    {
        return Http::get($this->api_url . 'matches/' . $match_id, $this->api_key);
    }

    /**
     * Players ordered by rank/medal tier
     */
    public function getPlayersByRank()
    {
        return Http::get($this->api_url . 'playersByRank', $this->api_key);
    }

    /**
     * Get list of pro players
     */
    public function getProPlayers()
    {
        return Http::get($this->api_url . 'proPlayers', $this->api_key);
    }

    /**
     * Get list of pro matches
     */
    public function getProMatches()
    {
        return Http::get($this->api_url . 'proMatches', $this->api_key);
    }

    /**
     * Get list of randomly sampled public matches
     */
    public function getPublicMatches()
    {
        return Http::get($this->api_url . 'publicMatches', $this->api_key);
    }

    /**
     * Get list of parsed match IDs
     */
    public function getParsedMatches()
    {
        return Http::get($this->api_url . 'parsedMatches', $this->api_key);
    }

    /**
     * Get Site metadata
     */
    public function getMetadata()
    {
        return Http::get($this->api_url . 'metadata', $this->api_key);
    }

    /**
     * Get Distributions of MMR data by bracket and country
     */
    public function getDistributions()
    {
        return Http::get($this->api_url . 'distributions', $this->api_key);
    }

    /**
     * Search players by personaname.
     * @param string $personaname
     */
    public function searchPlayers($personaname)
    {
        return Http::get($this->api_url . 'search', array_merge($this->api_key, ['q' => $personaname]));
    }

    /**
     * Get Top players by hero
     * @param int $hero_id
     */
    public function getRankingsByHero($hero_id)
    {
        return Http::get($this->api_url . 'rankings', array_merge($this->api_key, ['hero_id' => $hero_id]));
    }

    /**
     * Get Benchmarks of average stat values for a hero
     * @param int $hero_id
     */
    public function getBenchmarks($hero_id)
    {
        return Http::get($this->api_url . 'benchmarks', array_merge($this->api_key, ['hero_id' => $hero_id]));
    }

    /**
     * Get current service statistics
     */
    public function getStatus()
    {
        return Http::get($this->api_url . 'status', $this->api_key);
    }

    /**
     * Get service health data
     */
    public function getHealth()
    {
        return Http::get($this->api_url . 'health', $this->api_key);
    }

    /**
     * Get parse request state
     * @param string $job_id {jobid} The job ID to query.
     */
    public function getRequest($job_id)
    {
        return Http::get($this->api_url . 'request/' . $job_id, $this->api_key);
    }

    /**
     * Submit a new parse request
     * @param string $match_id {match_id}
     */
    public function postRequest($match_id)
    {
        return Http::get($this->api_url . 'request/' . $match_id, $this->api_key);
    }

    /**
     * Get All heroes data
     */
    public function getHeroes()
    {
        return Http::get($this->api_url . 'heroes', $this->api_key);
    }

    /**
     * Get recent matches with a hero
     * @param int $hero_id
     */
    public function getHeroMatches($hero_id)
    {
        return Http::get($this->api_url . 'heroes/' . $hero_id . '/matches', $this->api_key);
    }

    /**
     * Get results against other heroes for a hero
     * @param int $hero_id
     */
    public function getHeroMatchups($hero_id)
    {
        return Http::get($this->api_url . 'heroes/' . $hero_id . '/matchups', $this->api_key);
    }

    /**
     * Get hero performance over a range of match durations
     * @param int $hero_id
     */
    public function getHeroDurations($hero_id)
    {
        return Http::get($this->api_url . 'heroes/' . $hero_id . '/durations', $this->api_key);
    }

    /**
     * Get players who have played this hero
     * @param int $hero_id
     */
    public function getHeroPlayers($hero_id)
    {
        return Http::get($this->api_url . 'heroes/' . $hero_id . '/players', $this->api_key);
    }

    /**
     * Get item popularity of hero categoried by start, early, mid and late game, analyzed from professional games
     * @param int $hero_id
     */
    public function getHeroItemPopularity($hero_id)
    {
        return Http::get($this->api_url . 'heroes/' . $hero_id . '/itemPopularity', $this->api_key);
    }

    /**
     * Get stats about hero performance in recent matches
     */
    public function getHeroStats()
    {
        return Http::get($this->api_url . 'heroStats', $this->api_key);
    }

    /**
     * Get league data
     */
    public function getLeagues()
    {
        return Http::get($this->api_url . 'leagues', $this->api_key);
    }

    /**
     * Get team data
     */
    public function getTeams()
    {
        return Http::get($this->api_url . 'teams', $this->api_key);
    }

    /**
     * Get data for a team
     * @param int $team_id {team_id}
     */
    public function getTeam($team_id)
    {
        return Http::get($this->api_url . 'teams/' . $team_id, $this->api_key);
    }

    /**
     * Get matches for a team
     * @param int $team_id {team_id}
     */
    public function getTeamMatches($team_id)
    {
        return Http::get($this->api_url . 'teams/' . $team_id . '/matches', $this->api_key);
    }

    /**
     * Get players who have played for a team
     * @param int $team_id {team_id}
     */
    public function getTeamsPlayer($team_id)
    {
        return Http::get($this->api_url . 'teams/' . $team_id . '/players', $this->api_key);
    }

    /**
     * Get heroes for a team
     * @param int $team_id {team_id}
     */
    public function getTeamsHeroes($team_id)
    {
        return Http::get($this->api_url . 'teams/' . $team_id . '/heroes', $this->api_key);
    }

    /**
     * Get data to construct a replay URL with
     * @param string $match_id {match_id}
     */
    public function getReplays($match_id)
    {
        return Http::get($this->api_url . 'replays', array_merge($this->api_key, ['match_id' => $match_id]));
    }

    /**
     * Get top performances in a stat
     * @param string $field {match_id} Field name to query
     */
    public function getRecords($field)
    {
        return Http::get($this->api_url . 'records/' . $field, $this->api_key);
    }

    /**
     * Get top currently ongoing live games
     */
    public function getLive()
    {
        return Http::get($this->api_url . 'live', $this->api_key);
    }

    /**
     * Get Win rates for certain item timings on a hero for items that cost at least 1400 gold
     * @param mixed $params = [] Assoc array of parameters applied to filter matches (see OpenDota docs for reference)
     */
    public function getScenariosItemTimings($params = [])
    {
        return Http::get($this->api_url . 'scenarios/itemTimings' , array_merge($this->api_key, $params));
    }

    /**
     * Win rates for heroes in certain lane roles
     * @param mixed $params = [] Assoc array of parameters applied to filter matches (see OpenDota docs for reference)
     */
    public function getScenariosLaneRoles($params = [])
    {
        return Http::get($this->api_url . 'scenarios/laneRoles' , array_merge($this->api_key, $params));
    }

    /**
     * Win rates for heroes in certain lane roles
     * @param mixed $params = [] Assoc array of parameters applied to filter matches (see OpenDota docs for reference)
     */
    public function getScenariosMisc($params = [])
    {
        return Http::get($this->api_url . 'scenarios/misc' , array_merge($this->api_key, $params));
    }

    /**
     * Get database schema
     */
    public function getSchema()
    {
        return Http::get($this->api_url . 'schema', $this->api_key);
    }

    /**
     * Get static game data mirrored from the dotaconstants repository. If no resource is specified, returns an array of available resources.
     * Resources: https://github.com/odota/dotaconstants/tree/master/build
     */
    public function getConstants($resource = '')
    {
        return Http::get($this->api_url . 'constants', array_merge($this->api_key, ['resource' => $resource]));
    }

}
