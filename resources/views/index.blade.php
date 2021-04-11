@extends('layout.app')

@section('content')

@component('components.searchBar')
@endcomponent

<div class="flex flex-col justify-center mt-20 px-10">
    <!-- Cards -->

    @isset($data)
        <x-apiCall :searchData="$data" text="" visible="all" :favorites="$favorites" />
    @endisset
    <!-- End cards -->

    <!-- Most popular and latest -->
    @isset($popularDrinks)
        <x-apiCall :searchData="$popularDrinks" :visible="$visible" :favorites="$favorites" text="Most popular" />
        <x-apiCall :searchData="$latestDrinks" :visible="$visible" :favorites="$favorites" text="Latest added recipes" />
    @endisset
    <!-- End most popular -->
</div>
@endsection
