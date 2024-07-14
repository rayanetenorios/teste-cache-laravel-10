<?php

namespace App\Console\Commands;

use App\Services\SportScore\SportScoreService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class Playground extends Command
{
    protected $signature = 'play';

    protected $description = 'Playground command';

    public function handle()
    {
        $service = new SportScoreService();

        $json = $service
            ->sports()
            ->get();

        
        // $sport1 = $json->first();
        dd($json);

        return Command::SUCCESS;
    }
}
