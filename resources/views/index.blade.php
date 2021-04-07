@extends('layout.app')

@section('content')


@component('components.searchBar')
@endcomponent



{{-- {{dd($data)}} --}}

    <div class="flex flex-col justify-center mt-20 px-10">
        <!-- Cards -->
        @isset($data)
            <x-apiCall :searchData="$data" />
        @endisset

        <!-- End cards -->

    </div>
@endsection
