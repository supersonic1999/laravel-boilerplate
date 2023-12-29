@if ($type == 'userMonthlyPrices')
    <div class="row my-5">
        @foreach ($userMonthlyPrices as $item)
            <div class="col col-12 col-md-4">
                <div class="text-center bg-white p-4 rounded-5 h-100 shadow-sm">
                    <img style="height: 200px;" class="img-fluid w-100 object-fit-contain mb-3" src="{{ $item->image }}" alt="" />
                    <h2>{{ $item->name }}</h2>
                    <p>£{{ $item->price }} per Month</p>

                    @if (!$logged_in_user)
                        <a class="btn btn-primary" href="{{ route('frontend.auth.login')}}">Login to Subscribe</a>
                    @elseif (!$logged_in_user->subscribed())
                        <a class="btn btn-primary" href="{{ route('frontend.product.'.$item->id )}}">Subscribe</a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@elseif ($type == 'userYearlyPrices')
    <div class="row my-5">
        @foreach ($userYearlyPrices as $item)
            <div class="col col-12 col-md-4">
                <div class="text-center bg-white p-4 rounded-5 h-100 shadow-sm">
                    <img style="height: 200px;" class="img-fluid w-100 object-fit-contain mb-3" src="{{ $item->image }}" alt="" />
                    <h2>{{ $item->name }}</h2>
                    <p>£{{ $item->price }} per Year</p>

                    @if (!$logged_in_user)
                        <a class="btn btn-primary" href="{{ route('frontend.auth.login')}}">Login to Subscribe</a>
                    @elseif (!$logged_in_user->subscribed())
                        <a class="btn btn-primary" href="{{ route('frontend.product.'.$item->id )}}">Subscribe</a>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
@endif