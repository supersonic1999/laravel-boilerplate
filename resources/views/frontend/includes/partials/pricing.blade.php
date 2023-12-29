<div class="row my-5">
    @foreach ($prodData as $prod)
        <div class="col col-md-4">
            <h2>{{$prod->name}}</h2>
            <a class="btn btn-primary" href="{{route('frontend.product.'.$prod->id)}}">Subscribe</a>
        </div>
    @endforeach
</div>