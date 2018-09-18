<?php

namespace App\Http\ViewComposers;

use Log;
use Cache;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\View\View;

class PostsComposer
{
    public function compose(View $view)
    {
    	$posts = Cache::remember('posts', 60, function () {

		    $client = new \GuzzleHttp\Client();

		    try {
		        $res = $client->request('GET', 'https://medium.com/internxt/latest?format=json');
		    } catch (Exception $exception) {
		    	Log::error($exception);
		        return false;
		    }

		    if (!$res->getStatusCode() == 200) {
		    	Log::error('Non-200 status', ['status' => $res->getStatusCode()]);
		        return false;
		    }

	    	$body = json_decode(str_replace('])}while(1);</x>', '', $res->getBody()));

		    if (!isset($body->success, $body->payload)) {
		    	Log::error('Body payload not set', ['success' => $body->success, 'payload' => $body->payload]);
		        return false;
		    }

	    	return collect($body->payload->posts)
		    	->sortByDesc('firstPublishedAt')
		    	->take(6)
		    	->transform(function($post) {
		    		return [
		    			'title' => $post->title,
		    			'date' => Carbon::createFromTimestamp( substr($post->firstPublishedAt, 0, 10) )->format('F j Y'),
		    			'image' => 'https://cdn-images-1.medium.com/max/1000/' . $post->virtuals->previewImage->imageId,
		    			'url' => 'https://medium.com/internxt/' . $post->uniqueSlug,
		    		];
		    	})
		    ;

		    // dd($this->posts);

		});

        $view->with('posts', $posts);
    }
}
