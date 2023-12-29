<?php

use Carbon\Carbon;

if (! function_exists('appName')) {
    /**
     * Helper to grab the application name.
     *
     * @return mixed
     */
    function appName()
    {
        return config('app.name', 'Laravel Boilerplate');
    }
}

if (! function_exists('carbon')) {
    /**
     * Create a new Carbon instance from a time.
     *
     * @param $time
     * @return Carbon
     *
     * @throws Exception
     */
    function carbon($time)
    {
        return new Carbon($time);
    }
}

if (! function_exists('homeRoute')) {
    /**
     * Return the route to the "home" page depending on authentication/authorization status.
     *
     * @return string
     */
    function homeRoute()
    {
        if (auth()->check()) {
            if (auth()->user()->isAdmin()) {
                return 'admin.dashboard';
            }

            if (auth()->user()->isUser()) {
                return 'frontend.user.dashboard';
            }
        }

        return 'frontend.index';
    }
}

if (! function_exists('getStripeData')) {
    function getStripeData()
    {
        $userMonthlyPrices = [];
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));

        if (Session::missing('userMonthlyPrices')) {
            $userMonthlyPrices = $stripe->prices->all(['lookup_keys' => [
                'user_basic_monthly',
                'user_premium_monthly'
            ], 'active' => true])->data;

            Session::put('userMonthlyPrices', $userMonthlyPrices);
        } else {
            $userMonthlyPrices = Session::get('userMonthlyPrices');
        }

        if (Session::missing('userYearlyPrices')) {
            $userYearlyPrices = $stripe->prices->all(['lookup_keys' => [
                'user_basic_yearly',
                'user_premium_yearly'
            ], 'active' => true])->data;

            Session::put('userYearlyPrices', $userYearlyPrices);
        } else {
            $userYearlyPrices = Session::get('userYearlyPrices');
        }

        if (Session::missing('productData')) {
            $productData = $stripe->products->all(['active' => true])->data;

            Session::put('productData', $productData);
        } else {
            $productData = Session::get('productData');
        }

        return [
            'productData' => $productData,
            'userMonthlyPrices' => $userMonthlyPrices,
            'userYearlyPrices' => $userYearlyPrices,
        ];
    }
}
