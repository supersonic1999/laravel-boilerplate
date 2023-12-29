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
        $userMonthlyPrices = [];
        $userYearlyPrices = [];
        $stripeData = getStripeData();
        
        foreach ($stripeData['userMonthlyPrices'] as $key => $pricing) {
            $newArray = (object) [];
            $product = array_values(array_filter($stripeData['productData'], function ($var) use ($pricing) {
                return ($var->id == $pricing->product);
            }))[0];

            $newArray->id = $pricing->id;
            $newArray->name = $product->name;
            $newArray->image = $product->images[0] ?? '';
            $newArray->price = number_format($pricing->unit_amount / 100, 2);

            array_push($userMonthlyPrices, $newArray);
        }

        foreach ($stripeData['userYearlyPrices'] as $key => $pricing) {
            $newArray = (object) [];
            $product = array_values(array_filter($stripeData['productData'], function ($var) use ($pricing) {
                return ($var->id == $pricing->product);
            }))[0];

            $newArray->id = $pricing->id;
            $newArray->name = $product->name;
            $newArray->image = $product->images[0] ?? '';
            $newArray->price = number_format($pricing->unit_amount / 100, 2);

            array_push($userYearlyPrices, $newArray);
        }

        return view('frontend.pages.pricing', [
            'userMonthlyPrices' => $userMonthlyPrices,
            'userYearlyPrices' => $userYearlyPrices,
        ]);
    }
}
