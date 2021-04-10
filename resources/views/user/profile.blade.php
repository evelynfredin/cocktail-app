@extends('layout.app')

@section('content')

<p>Profile section</p>

    @foreach($user->favorites as $favorite)
        Drink id: {{ $favorite->isDrink }}<br />
    @endforeach


@endsection
