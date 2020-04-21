<?php

namespace Xitox97\LaravelOpendota;

use Illuminate\Support\Facades\Http;

class LaravelOpendota
{
    /**
     * @param $playerID
     */
    public function getPlayer($playerID)
    {
        return Http::get("https://api.opendota.com/api/players/$playerID");
    }
}
