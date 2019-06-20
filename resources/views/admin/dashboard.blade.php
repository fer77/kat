@extends("layouts.admin")
@section("content")
<div class="admin">
    @if(Auth::guard('web')->check())
    <h2>Welcome {{ Auth::user()->name }}</h2>
    @else
    <h2>plain DASHBOARD</h2>
    @endif
</div>
@endsection