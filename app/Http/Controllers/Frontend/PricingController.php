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
        return view('frontend.pages.pricing');
    }
}
