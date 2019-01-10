<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/', 'home')->name('home');
Route::view('token', 'token')->name('token');
Route::view('cloud', 'cloud')->name('cloud');
Route::view('core', 'core')->name('core');
Route::view('about', 'about')->name('about');
Route::view('roadmap', 'roadmap')->name('roadmap');
Route::view('resources', 'resources')->name('resources');
Route::view('terms', 'terms')->name('terms');
Route::view('privacy', 'privacy')->name('privacy');
Route::view('civic', 'civic-test')->name('civic-test');
Route::view('merch', 'merchandise')->name('merchandise');

Route::any('buy', function(Illuminate\Http\Request $request){

	Log::info('Stripe checkout completed');

	if (!$request->filled('token.id')) {
		Log::error('Stripe token empty, cannot continue');
		return response()->json([
			'status' => 'fail',
			'message' => 'Stripe token empty',
		]);
	}

	// Token is created using Checkout or Elements!
	// Get the payment token ID submitted by the form:
	$token = $request->input('token.id');

	Log::info('Attempting to charge card...', compact('token'));

	\Stripe\Stripe::setApiKey(config('services.stripe.secret'));

	$charge = \Stripe\Charge::create([
	    'amount' => config('services.stripe.prices.vision'),
	    'currency' => 'usd',
	    'description' => 'X Cloud Vision',
	    'source' => $token,
	]);

	$request->session()->flash('status', 'success');

	return response()->json([
		'status' => 'ok',
		'message' => 'success',
	]);

})->name('stripe.purchase');
