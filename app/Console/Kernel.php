<?php

namespace App\Console;

use App\WechatResource;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        \App\Console\Commands\Inspire::class,
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        $schedule->call(function () {
            $url = 'https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=wxbaf45caa5c23134f&secret=404a2a9a33c016775fa48553b259cb2b';
            $json = file_get_contents($url);
            $data = json_decode($json);
            $resource = WechatResource::first();
            $resource->access_token = $data->access_token;
            $resource->save();
        })->hourly();
    }
}
