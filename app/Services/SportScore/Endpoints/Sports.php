<?php

namespace App\Services\SportScore\Endpoints;

use App\Services\SportScore\Entities\Sport;
use App\Services\SportScore\SportScoreService;

class Sports
{
    private SportScoreService $service;

    public function __construct()
    {
        $this->service = new SportScoreService();
    }

    public function get()
    {
        return $this->transform(
            $this->service
            ->api
            ->get('/sports')
            ->json('data')
        );
    }

    public function transform(mixed $json)
    {
        return collect($json)
            ->map(fn ($sport) => new Sport($sport));
    }
}