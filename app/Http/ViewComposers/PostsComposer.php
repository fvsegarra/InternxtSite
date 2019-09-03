<?php

namespace App\Http\ViewComposers;

use Log;
use Cache;
use Carbon\Carbon;
use Goutte\Client;
use Illuminate\View\View;

class PostsComposer
{
    public function compose(View $view)
    {
    	$posts = Cache::remember('posts', 120, function () {

			$posts = [];

    		try {

			    $client = new Client();

				$crawler = $client->request('GET', 'https://medium.com/internxt/latest');

				$crawler->filter('.postArticle')->each(function ($node) use (&$posts) {

					$posts[] = [
						'url' => $node->filter('.postArticle-content a')->attr('href'),
						'title' => $node->filter('.graf--title')->text(),
						'image' => $node->filter('#previewImage img')->attr('src'),
						'date' => Carbon::parse($node->filter('time')->attr('datetime'))->format('F j Y'),
					];

			    });

    		} catch (Exception $e) {
    			Log::error($e);
    		}

		    return $posts;

		});

        $view->with('posts', $posts);
    }
}

