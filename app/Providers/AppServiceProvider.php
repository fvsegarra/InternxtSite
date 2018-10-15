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

<<<<<<< HEAD
        if ($platform == "OS X") {
            $platform = "Mac";
        } else if ($platform == "") {
	    $platform = "Linux";
	}
=======
        if ($platform) { // Returns false from console
>>>>>>> 6edae943f632327d1d242255bc23dbf91fbbd53c

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

<<<<<<< HEAD
        if (array_key_exists($platform, $supportedOperatingSystems)) {
            $xcloudDownloadLink .= $supportedOperatingSystems[$platform];
            $xcoreDownloadLink .= $supportedOperatingSystems[$platform];
        } else {
	    $xcloudDownloadLink .= $supportedOperatingSystems[Linux];
            $xcoreDownloadLink .= $supportedOperatingSystems[Linux];
	}
=======
        }
>>>>>>> 6edae943f632327d1d242255bc23dbf91fbbd53c

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
