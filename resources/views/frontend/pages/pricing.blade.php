@extends('frontend.layouts.app')

@section('title', __('Terms & Conditions'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
                @include('frontend.includes.partials.pricing', ['type' => 'userMonthlyPrices'])
                @include('frontend.includes.partials.pricing', ['type' => 'userYearlyPrices'])
            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection
