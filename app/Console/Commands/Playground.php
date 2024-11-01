<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class Playground extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'play';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Playground command';

    /**
     * Execute the console command.
     */
    public function handle(): int
    {
        $response = Http::withHeaders([
            'x-rapidapi-host' => 'sportscore1.p.rapidapi.com',
            'x-rapidapi-key' => 'b037037f6emsh18c2a0311117778p1edceejsn7ce82e35c7eb',
        ])->get('https://sportscore1.p.rapidapi.com/sports/1/teams?page=1');
        
        dd($response->json());
        return 1;
    }
}
