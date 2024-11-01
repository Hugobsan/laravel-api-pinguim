<?php

namespace App\Services\SportScore;

use App\Services\SportScore\Endpoints\HasSports;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class SportScoreService
{
    use HasSports;
    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::withHeaders([
            'x-rapidapi-host' => 'sportscore1.p.rapidapi.com',
            'x-rapidapi-key' => config('services.sportscore.key'),
        ])->baseUrl('https://sportscore1.p.rapidapi.com');
    }
}