<?php

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\TermsController;
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
    
Route::get('/testprod', function (Request $request) {
    return $request->user()
        ->newSubscription('default', 'price_1OSHXiDWFQQ7ea7XSUZbtFfL')
        // ->trialDays(5)
        ->allowPromotionCodes()
        ->checkout([
            'success_url' => route('frontend.pages.terms'),
            'cancel_url' => route('frontend.index'),
        ]);
});