<?php

namespace App\Providers;

use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $xcloudDownloadLink = '/downloads/cloud';
        $xcoreDownloadLink = '/downloads/core';

        $agent = new Agent();

        $platform = $agent->platform();

        if ($platform) { // Returns false from console

            if ($platform == "OS X") {
                $platform = "Mac";
            }


            $supportedOperatingSystems = [
                'Windows' => '.exe',
                'Mac' => '.dmg',
                'Linux' => '.deb',
            ];

            if (array_key_exists($platform, $supportedOperatingSystems)) {
                $xcloudDownloadLink .= $supportedOperatingSystems[$platform];
                $xcoreDownloadLink .= $supportedOperatingSystems[$platform];
            }


        View::share(compact('agent', 'platform', 'xcloudDownloadLink', 'xcoreDownloadLink'));
	}

    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
