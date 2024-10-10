<?php

namespace App\Services\SportScore;

use App\Services\SportScore\Endpoints\HasSports;
use App\Services\SportScore\Endpoints\HasTeams;
use Illuminate\Http\Client\PendingRequest;
use Illuminate\Support\Facades\Http;

class SportScoreService
{
    use HasSports;
    use HasTeams;
    public PendingRequest $api;

    public function __construct()
    {
        $this->api = Http::withHeaders([
            'x-rapidapi-host' => 'sportscore1.p.rapidapi.com',
            'x-rapidapi-key' => env('RAPID_API_KEY'),
        ])->baseUrl('https://sportscore1.p.rapidapi.com');
    }
}
