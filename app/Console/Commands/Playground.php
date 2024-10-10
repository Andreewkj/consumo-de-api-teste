<?php

namespace App\Console\Commands;

use App\Services\SportScore\SportScoreService;
use Illuminate\Console\Command;

class Playground extends Command
{
    protected $signature = 'play';

    protected $description = 'Playground Command';

    public function handle(): int
    {
        $service = new SportScoreService();
        $sports = $service->sports()->get();
        $teams = $service->teams()->fromSport($sports->first())->get();
        dd($teams->first());

        return Command::SUCCESS;
    }
}
