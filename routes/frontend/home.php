<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TermsController;
use App\Http\Controllers\Frontend\PricingController;
use Tabuna\Breadcrumbs\Trail;
use Illuminate\Http\Request;

/*
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', [HomeController::class, 'index'])
    ->name('index')
    ->breadcrumbs(function (Trail $trail) {
        $trail->push(__('Home'), route('frontend.index'));
    });

Route::get('terms', [TermsController::class, 'index'])
    ->name('pages.terms')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('Terms & Conditions'), route('frontend.pages.terms'));
    });

Route::get('pricing', [PricingController::class, 'index'])
    ->name('pages.pricing')
    ->breadcrumbs(function (Trail $trail) {
        $trail->parent('frontend.index')
            ->push(__('Pricing'), route('frontend.pages.pricing'));
    });
    
    
Route::group(['as' => 'product.'], function () {
    Route::get('prod_PGsK9wXT2ejQvc', function (Request $request) {
        return $request->user()
            ->newSubscription('default', 'price_1OSdEeDWFQQ7ea7XumYdXXsM')
            ->trialDays(5)
            ->allowPromotionCodes()
            ->checkout([
                'success_url' => route('frontend.pages.terms'),
                'cancel_url' => route('frontend.index'),
            ]);
    })->name('prod_PGsK9wXT2ejQvc');

    Route::get('prod_PGpCbfZ8LFARj6', function (Request $request) {
        return $request->user()
            ->newSubscription('default', 'price_1OSdFLDWFQQ7ea7XcFgc9vIs')
            ->allowPromotionCodes()
            ->checkout([
                'success_url' => route('frontend.pages.terms'),
                'cancel_url' => route('frontend.index'),
            ]);
    })->name('prod_PGpCbfZ8LFARj6');
});
