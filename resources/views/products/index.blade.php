@extends('layouts.app')

@section('content')
<div class="container mx-auto px-10 sm:px-4 mb-4 mt-24">
    <div class="flex justify-between items-center mb-4">
        <!-- Sorting dropdown -->
        <form method="GET" action="{{ route('products.index') }}">
            <div class="flex space-x-4">
                <!-- Sorting dropdown -->
                <select name="sort" class="border border-gray-300 rounded-md p-2" onchange="this.form.submit()">
                    <option value="">Sort by</option>
                    <option value="price" {{ request('sort')=='price' ? 'selected' : '' }}>Price: Low to High</option>
                    <option value="-price" {{ request('sort')=='-price' ? 'selected' : '' }}>Price: High to Low</option>
                    <option value="name" {{ request('sort')=='name' ? 'selected' : '' }}>Name: A to Z</option>
                    <option value="-name" {{ request('sort')=='-name' ? 'selected' : '' }}>Name: Z to A</option>
                    <option value="-created_at" {{ request('sort')=='-created_at' ? 'selected' : '' }}>Latest</option>
                </select>

                <!-- Category dropdown -->
                <select name="category" class="border border-gray-300 rounded-md p-2" onchange="this.form.submit()">
                    <option value="">All Categories</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ request('category')==$category->id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>

                <!-- Tag dropdown -->
                <select name="tag" class="border border-gray-300 rounded-md p-2" onchange="this.form.submit()">
                    <option value="">All Tags</option>
                    @foreach ($tags as $tag)
                    <option value="{{ $tag->id }}" {{ request('tag')==$tag->id ? 'selected' : '' }}>
                        {{ $tag->name }}
                    </option>
                    @endforeach
                </select>
            </div>
        </form>
    </div>

    <!-- Products Grid -->
    <div class="grid grid-cols-1 justify-items-center sm:grid-cols-2 md:grid-cols-3 gap-4">
        @if ($products->count() > 0)
        @foreach ($products as $product)
        <div
            class="col-span-1 max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700 w-full flex flex-col justify-between">
            <a href="{{ route('products.show', ['product' => $product]) }}" class="flex justify-center">
                <img class="rounded-t-lg w-full" src="/images/{{ $product->imageUrl }}" alt="product image" />
            </a>
            <div class="px-5 pb-5">
                <a href="{{ route('products.show', ['product' => $product]) }}">
                    <h5 class="text-xl font-semibold tracking-tight text-gray-900 dark:text-white">
                        {{ $product->name }}</h5>
                </a>
                <div class="flex items-center mt-2.5 mb-5">
                    <div class="flex items-center space-x-1 rtl:space-x-reverse">
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                        <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                            <path
                                d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                        </svg>
                    </div>
                    <span
                        class="bg-roseOfSharon-100 text-roseOfSharon-800 text-xs font-semibold px-2.5 py-0.5 rounded dark:bg-roseOfSharon-200 dark:text-roseOfSharon-800 ms-3">5.0</span>
                </div>
                <div class="flex max-lg:gap-4 max-lg:flex-col items-center justify-between">
                    <span class="text-3xl font-bold text-roseOfSharon-950 dark:text-white">${{
                        number_format($product->price, 2) }}</span>
                    <button type="button"
                        class="w-full flex items-center justify-center rounded-lg bg-roseOfSharon-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-roseOfSharon-800 focus:outline-none dark:bg-roseOfSharon-600 dark:hover:bg-roseOfSharon-700 max-w-[160px] mt-2"
                        onclick="Livewire.dispatch('addToCart', {{ $product->id }}, 1)">
                        <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                        </svg>
                        Add to cart
                    </button>
                </div>
            </div>
        </div>
        @endforeach
        @else
        <div class="col-12">
            <p>No products available.</p>
        </div>
        @endif
    </div>
    <div class="row mt-4">
        <div class="col-12 d-flex justify-content-center">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection