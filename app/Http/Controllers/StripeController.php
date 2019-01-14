<?php

namespace App\Http\Controllers;

use Log;
use Mail;
use Stripe\Stripe;
use Stripe\Charge;
use App\Mail\NewOrder;
use Illuminate\Http\Request;
use App\Mail\CustomerConfirmation;

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

		// Token is created using Stripe Checkout
		$token = $request->input('token.id');

		$customerEmail = $request->input('token.email');

		Log::info('Attempting to charge card...', compact('token'));

		Stripe::setApiKey(config('services.stripe.secret'));

		$charge = Charge::create([
		    'amount' => config('services.stripe.prices.vision'),
		    'currency' => 'usd',
		    'description' => 'X Cloud Vision',
		    'source' => $token,
		]);

		Mail::to(config('mail.recipient'))->send(new NewOrder($charge));

		if ($customerEmail) {
			Mail::to($customerEmail)->send(new CustomerConfirmation($charge));
		}

		$request->session()->flash('status', 'success');

		return response()->json([
			'status' => 'ok',
			'message' => 'success',
		]);
	}
}
