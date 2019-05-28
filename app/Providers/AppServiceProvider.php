<?php

namespace App\Providers;

use Log;
use Jenssegers\Agent\Agent;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Route;
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

        $xcloudDownloadLink = '/downloads/cloud.exe';
        $xcoreDownloadLink = '/downloads/core.exe';

        $agent = new Agent();

        $platform = $agent->platform();

        if ($platform) { // Returns false from console

            if ($platform == "OS X") {
                $platform = "Mac";
            }

            if ($platform == "Ubuntu") {
                $platform = "Linux";
            }

            Log::debug("Platform: ", compact('platform'));

            $supportedOperatingSystems = [
                'Windows' => '.exe',
                'Mac' => '.dmg',
                'Linux' => '.deb',
            ];

            if (array_key_exists($platform, $supportedOperatingSystems)) {
                $xcloudDownloadLink = str_replace(".exe", $supportedOperatingSystems[$platform], $xcloudDownloadLink);
                $xcoreDownloadLink = str_replace(".exe", $supportedOperatingSystems[$platform], $xcoreDownloadLink);
            }

        }

        // Generate canonical URL, removing double slash on homepage and stripping last slash on others
        $appUrl = env('APP_URL');
        $currentUri = rtrim(request()->getRequestUri(), '/');
        $canonical = preg_replace('/([a-z])\/\//','$1/', $appUrl.$currentUri );
        $canonical = rtrim($canonical, '/');

        View::share(compact('agent', 'platform', 'xcloudDownloadLink', 'xcoreDownloadLink', 'canonical'));

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
