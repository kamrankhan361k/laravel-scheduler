<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Log;
class SendEmailReminder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    
     protected $signature = 'email:reminder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send reminder emails to users daily';
    

    /**
     * Execute the console command.
     */
    public function handle()
    {
        Mail::raw('This is a daily reminder.', function ($message) {
            $message->to('kamrankhan384k@gmail.com') // Change email address
                    ->subject('Daily Reminder');
        });

        // Log success
        Log::info('Reminder email sent successfully!');
        $this->info('Reminder email sent successfully!');
    }
}
