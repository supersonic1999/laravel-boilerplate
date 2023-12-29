<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TermsController;
use App\Http\Controllers\Frontend\PricingController;
use Tabuna\Breadcrumbs\Trail;
use Illuminate\Http\Request;
use App\Http\Middleware\Subscribed;

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
    
    
Route::group(['as' => 'product.', 'middleware' => [Subscribed::class]], function () {
    Route::get('price_1OSHXiDWFQQ7ea7XSUZbtFfL', function (Request $request) {
        return $request->user()
            ->newSubscription('default', 'price_1OSHXiDWFQQ7ea7XSUZbtFfL')
            ->trialDays(5)
            ->allowPromotionCodes()
            ->checkout([
                'success_url' => route('frontend.pages.terms'),
                'cancel_url' => route('frontend.index'),
            ]);
    })->name('price_1OSHXiDWFQQ7ea7XSUZbtFfL');

    Route::get('price_1OSKa4DWFQQ7ea7XF50n1FAV', function (Request $request) {
        return $request->user()
            ->newSubscription('default', 'price_1OSKa4DWFQQ7ea7XF50n1FAV')
            ->allowPromotionCodes()
            ->checkout([
                'success_url' => route('frontend.pages.terms'),
                'cancel_url' => route('frontend.index'),
            ]);
    })->name('price_1OSKa4DWFQQ7ea7XF50n1FAV');
});
