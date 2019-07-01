@extends("layouts.admin")

@section("content")

<h1>Edit Listing {{ $shop_item[0]->title }}</h1>
{{dd($shop_item)}}

@endsection