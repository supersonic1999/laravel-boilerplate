<?php

namespace App\Http\Controllers\Frontend;

/**
 * Class PricingController.
 */
class PricingController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $prodData = $stripe->products->all()->data;

        return view('frontend.pages.pricing', ['prodData' => $prodData]);
    }
}
