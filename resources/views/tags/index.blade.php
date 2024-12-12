@extends('layouts.app')

@section('content')
<div class="mt-[52px] w-full">
    <div class="row p-8">
        @if($tags->count() > 0)
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 max-w-[1200px] relative left-1/2 -translate-x-1/2">
            @foreach($tags as $tag)
            <div
                class="bg-white rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105">
                <div class="p-6">
                    <h5 class="text-xl font-semibold text-roseOfSharon-950 mb-2 font-poppins">{{ $tag->name }}</h5>
                    {{-- <p class="text-roseOfSharon-600">{{ $tag->description }}</p> --}}
                    <p class="text-sm text-roseOfSharon-500 mt-2 font-poppins">Products: {{ number_format($tag->product_count) }}</p>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="w-full min-h-[calc(100vh-52px)] flex justify-center items-center">
            <p class="text-white text-6xl font-semibold">No tags available...</p>
        </div>
        @endif
    </div>
    <div class="row">
        <div class="col-12 d-flex justify-content-center pb-8 px-8 flex justify-end">
            {{ $tags->links() }}
        </div>
    </div>
</div>
@endsection