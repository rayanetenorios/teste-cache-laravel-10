<?php

namespace App\Services\SportScore;

use App\Services\SportScore\Endpoints\HasSports;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

/**
 *  SportScore Rapid Api Service
 *  https://rapidapi.com/tipsters/api/sportscore1
 */

class SportScoreService 
{
    use HasSports;

    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::withHeaders([
            'X-RapidAPI-Key' => '0ef9425601mshaeda94b74c947ccp1c69d2jsn8924ece116ec',
            'X-RapidAPI-host' => 'sportscore1.p.rapidapi.com'
        ])->baseUrl('https://sportscore1.p.rapidapi.com');
    }
}