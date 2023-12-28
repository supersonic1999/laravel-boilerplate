@extends('frontend.layouts.app')

@section('title', __('Terms & Conditions'))

@section('content')
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-md-12">
            <script async src="https://js.stripe.com/v3/pricing-table.js"></script>
                <stripe-pricing-table
                    pricing-table-id="prctbl_1OSJQ2DWFQQ7ea7XmMjjIQOs"
                    publishable-key="pk_test_51OSHTVDWFQQ7ea7Xem4ABsawSU7MwD6zlWQNUNUmjCJCjafj0hB5da17IrVji08FccpoCjg3vrz7MOlXxjVPBgMN00YhCsovH0"
                    customer="{{ $logged_in_user ? $logged_in_user->stripe_id : '' }}"
                >
                </stripe-pricing-table>

            </div><!--col-md-10-->
        </div><!--row-->
    </div><!--container-->
@endsection
