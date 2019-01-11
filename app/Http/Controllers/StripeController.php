<?php

namespace App\Http\Controllers;

use Log;
use Stripe\Stripe;
use Stripe\Charge;
use Illuminate\Http\Request;

class StripeController extends Controller
{

	public function attemptPayment(Request $request)
	{
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

		Stripe::setApiKey(config('services.stripe.secret'));

		$charge = Charge::create([
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
	}
}
