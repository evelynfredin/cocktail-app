@extends('layout.app')

@section('content')


@component('components.searchBar')
@endcomponent


<div class="flex flex-col justify-center mt-20 px-10">
    <!-- Cards -->

    @isset($searchData)
        <x-apiCall :searchData="$searchData" />
    @endisset

    <!-- End cards -->

</div>
@endsection
