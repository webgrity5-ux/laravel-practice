<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;
use Carbon\Carbon;

class UpdateUserTimestamp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:update-user-timestamp';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';
    

    /**
     * Execute the console command.
     */
    
    public function handle()
    {
        //
        User::query()->update([
            'updated_at' => Carbon::now()
        ]);

        $this->info('User updated_at timestamps updated successfully.');
    }
}
