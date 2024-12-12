@extends('layouts.app')

@section('title', 'Search Results')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-2xl font-bold mb-4">Search Results</h1>

        @if ($products->isEmpty())
            <p>No products found.</p>
        @else
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
                @foreach ($products as $product)
                    <div class="border rounded-lg p-4">
                        <h2 class="text-lg font-bold">{{ $product->name }}</h2>
                        <p>{{ $product->description }}</p>
                        <p class="text-orange-500 font-bold">Price: ${{ $product->price }}</p>
                    </div>
                @endforeach
            </div>
        @endif
    </div>
@endsection
