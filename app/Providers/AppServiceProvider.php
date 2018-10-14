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

        $agent = new Agent();

        $platform = $agent->platform();

        if ($platform == "OS X") {
            $platform = "Mac";
        } else if ($platform == "") {
	    $platform = "Linux"
	}

        $xcloudDownloadLink = '/downloads/cloud';
        $xcoreDownloadLink = '/downloads/core';

        $supportedOperatingSystems = [
            'Windows' => '.exe',
            'Mac' => '.dmg',
            'Linux' => '.deb',
        ];

        if (array_key_exists($platform, $supportedOperatingSystems)) {
            $xcloudDownloadLink .= $supportedOperatingSystems[$platform];
            $xcoreDownloadLink .= $supportedOperatingSystems[$platform];
        } else {
	    $xcloudDownloadLink .= $supportedOperatingSystems[Linux];
            $xcoreDownloadLink .= $supportedOperatingSystems[Linux];
	}

        View::share(compact('agent', 'platform', 'xcloudDownloadLink', 'xcoreDownloadLink'));

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
