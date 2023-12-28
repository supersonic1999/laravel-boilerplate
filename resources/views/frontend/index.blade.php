@extends('frontend.layouts.app')

@section('title', __('Home'))

@section('content')
    <div class="container py-4">
        @include('includes.partials.messages')

        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis similique eos esse temporibus minus est numquam quia et facilis blanditiis modi id delectus inventore quas aliquam omnis necessitatibus nemo debitis quo libero, ea aut dicta a. Saepe aspernatur quidem corporis accusantium modi dolor, nisi nesciunt laboriosam nemo tempora veniam! A est doloribus obcaecati repudiandae, voluptatem, officia expedita quasi excepturi aspernatur cumque molestias perspiciatis vitae. Nihil facere animi sequi iure quisquam recusandae autem, sunt, amet necessitatibus quod porro eligendi labore facilis! Pariatur id velit accusamus, ullam ducimus, sequi omnis, cum adipisci est nihil temporibus odit tempora neque reprehenderit quod quibusdam voluptate dolorum excepturi! Perferendis labore consequatur iure quibusdam, voluptatum veniam ab eveniet. Quod culpa iusto accusantium omnis provident non dignissimos, sapiente labore, veritatis veniam sit tempore, praesentium nihil eum minus quasi at in. Id ipsa, ex veritatis nostrum quae earum facere accusantium enim. Rem placeat deserunt ea doloremque eos repudiandae atque reprehenderit iste numquam, ducimus fugit quibusdam, facilis quidem, quod similique non unde asperiores adipisci suscipit vitae itaque? Facilis tenetur dolores assumenda asperiores deleniti eum accusamus, fugit explicabo, reiciendis natus quasi optio. Incidunt ullam dolore, itaque numquam minima nam nisi, nulla sint optio nostrum accusamus. Voluptas consequuntur obcaecati dicta possimus aut et alias. Laudantium optio necessitatibus a aliquam voluptas quae dolores ex veniam possimus hic sed itaque, alias nisi iusto eum, non officiis at earum nam ipsum praesentium atque modi, repellendus ea? Est ullam repudiandae inventore consequatur id quae magnam expedita vitae laudantium odio vero ratione voluptatum similique exercitationem assumenda, suscipit iste nemo doloribus aperiam cum necessitatibus soluta. Consequuntur eum repellendus eos veritatis dicta eaque natus ratione exercitationem harum iure. Sunt nihil dolore odit est nobis corrupti placeat dolorem aperiam, accusamus sint? Fugit sed, impedit, ducimus asperiores illo ratione vitae perspiciatis ex minima eligendi eaque id iusto rerum iure fugiat nisi.</p>

        <div class="title m-b-md">
            <example-component></example-component>
        </div><!--title-->

        @if ($logged_in_user && $logged_in_user->subscribed('default', 'price_1OSHXiDWFQQ7ea7XSUZbtFfL'))
            <p>You are subscribed.</p>
        @else 
            <a class="btn btn-primary" href="/testprod">Pricing</a>
        @endif

        <script async src="https://js.stripe.com/v3/pricing-table.js"></script>
        <stripe-pricing-table
            pricing-table-id="prctbl_1OSJQ2DWFQQ7ea7XmMjjIQOs"
            publishable-key="pk_test_51OSHTVDWFQQ7ea7Xem4ABsawSU7MwD6zlWQNUNUmjCJCjafj0hB5da17IrVji08FccpoCjg3vrz7MOlXxjVPBgMN00YhCsovH0"
            customer="{{ $logged_in_user ? $logged_in_user->stripe_id : '' }}"
        >
        </stripe-pricing-table>

        <div class="links">
            <a href="http://laravel-boilerplate.com" target="_blank"><i class="fa fa-book"></i> @lang('Docs')</a>
            <a href="https://github.com/rappasoft/laravel-boilerplate" target="_blank"><i class="fab fa-github"></i> GitHub</a>
        </div><!--links-->
    </div><!--content-->
@endsection