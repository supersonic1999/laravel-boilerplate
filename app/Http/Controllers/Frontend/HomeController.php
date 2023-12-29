<?php

namespace App\Http\Controllers\Frontend;

/**
 * Class HomeController.
 */
class HomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $prodData = $stripe->products->all()->data;

        return view('frontend.index', ['prodData' => $prodData]);
    }
}
