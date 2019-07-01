@extends("layouts.admin")
@section("content")
<div class="admin">
    @if(Auth::guard('web')->check())
    <h2>Welcome {{ Auth::user()->name }}</h2>
    @foreach ($shop_items as $item)
    <a class="" href="/admin/dashboard/{{ $item->listing_id }}" target="_blank" title="">
        <p>{{ $item->title }}</p>
    </a>
    @endforeach
    @else
    <h2>plain DASHBOARD</h2>
    @endif
</div>
<style>
    a p { color: white; }
</style>
@endsection

<!-- <figcaption>
    <div class="parent">
        <img src="{{ $item->MainImage->url_570xN }}" />
            <div class="child ">
            <h3>{{ $item->title }}</h3>
            <p>{{ $item->description }}</p>
            <a class="btn btn-outline-white pill-btn chocolat-image" href="{{ $item->url }}" target="_blank" title="">Buy</a>
        </div>
    </div>
</figcaption> -->