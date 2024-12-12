@extends('layouts.app')

@section('content')
<div class="w-full mt-[52px] p-8 min-h-[calc(100vh-52px)]">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header pb-4 mb-6 border-b-roseOfSharon-100 border-b-[1px]">
                    <h2 class="text-5xl font-semibold tracking-tight text-roseOfSharon-400 dark:text-white">
                        {{ $product->name }}
                    </h2>
                </div>
                <div class="card-body rounded-lg overflow-hidden flex gap-8">
                    <img src="/images/{{ $product->imageUrl }}" alt="{{ $product->name }}" class="lg:w-[400px]">
                    <div class="text-white lg:max-w-screen-sm">
                        <!-- Menggunakan font-poppins dengan hierarki ukuran yang sesuai -->
                        <h4 class="text-2xl font-bold font-poppins text-roseOfSharon-400">Description:</h4>
                        <p class="text-base font-poppins">{{ Str::words($product->long_description, 30, '...') }}</p>

                        <br>
                        <p class="text-2xl font-semibold font-poppins">
                            <strong class="text-roseOfSharon-400">Price:</strong> {{ number_format($product->price, 2)
                            }}
                        </p>
                        <p class="text-base font-poppins mt-3">
                            <strong class="text-roseOfSharon-400">Category:</strong> {{ $product->category->name ?? ""
                            }}
                        </p>
                        <p class="text-base font-poppins">
                            <strong class="text-roseOfSharon-400">Quantity:</strong> {{ $product->inventory_count ?? "0"
                            }}
                        </p>
                        @if($product->inventory_count > 0)
                        <p class="text-success text-xl font-semibold font-poppins mt-4">
                            <strong class="text-roseOfSharon-700">In Stock</strong>
                        </p>
                        @else
                        <p class="text-danger text-xl font-semibold font-poppins mt-4">
                            <strong class="text-roseOfSharon-700">Out of Stock</strong>
                        </p>
                        @endif

                        @auth
                        @if(auth()->user()->wishlist()->where('product_id', $product->id)->exists())
                        <form action="{{ route('wishlist.remove', $product) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger text-base font-poppins">Remove from
                                Wishlist</button>
                        </form>
                        @else
                        <form action="{{ route('wishlist.add', $product) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary text-base font-poppins">Add to
                                Wishlist</button>
                        </form>
                        @endif
                        @endauth

                        @if($product->inventory_count > 0)
                        <button type="button"
                            class="w-full flex items-center justify-center rounded-lg bg-roseOfSharon-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-roseOfSharon-800 focus:outline-none dark:bg-roseOfSharon-600 dark:hover:bg-roseOfSharon-700 max-w-[160px] mt-2"
                            onclick="Livewire.dispatch('addToCart', {{ $product->id }}, 1)">
                            <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2"
                                    d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6" />
                            </svg>
                            Add to cart
                        </button>
                        @endif
                        {{-- <form action="{{ route('products.addToCompare', $product) }}" method="POST"
                            class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-primary mt-2">Add to Compare</button>
                        </form> --}}
                    </div>
                </div>
            </div>
            <a href="{{ route('products.index') }}" class="btn btn-primary mt-3">Back to Products</a>

            @if(isset($recommendations) && count($recommendations) > 0)
            <div class="card mt-4">
                <div class="card-header">Recommended Products</div>
                <div class="card-body">
                    <div class="row">
                        @foreach($recommendations as $recommendedProduct)
                        <div class="col-md-4 mb-3">
                            <div class="card">
                                <img src="/images/placeholder.png" alt="{{ $recommendedProduct->name }}"
                                    class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $recommendedProduct->name }}</h5>
                                    <p class="card-text">${{ number_format($recommendedProduct->price, 2) }}</p>
                                    <a href="{{ route('products.show', $recommendedProduct->id) }}"
                                        class="btn btn-sm btn-primary">View Product</a>
                                    @if($recommendedProduct->inventory_count == 0)
                                    <p class="text-danger mt-2">Out of Stock</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
        </div>
    </div>
</div>

@if($product->downloadable->count() > 0 && auth()->user() && auth()->user()->hasPurchased($product))
<a href="{{ route('download.generate-link', $product->id) }}" class="btn btn-success mt-3">Download</a>
@endif

@isset($product->inventoryLogs)
<div class="card mt-4">
    <div class="card-header">Inventory Logs</div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Date</th>
                    <th>Quantity Change</th>
                    <th>Reason</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($product->inventoryLogs as $log)
                <tr>
                    <td>{{ $log->created_at->format('Y-m-d H:i:s') }}</td>
                    <td>{{ $log->quantity_change }}</td>
                    <td>{{ $log->reason }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endisset

<script type="application/ld+json">
    {
    "@context": "https://schema.org/",
    "@type": "Product",
    "name": "{{ $product->name }}",
    "description": "{{ $product->description }}",
    "image": "{{ asset('/images/placeholder.png') }}",
    "sku": "{{ $product->id }}",
    "mpn": "{{ $product->id }}",
    "brand": {
        "@type": "Brand",
        "name": "{{ config('app.name') }}"
    },
    "offers": {
        "@type": "Offer",
        "url": "{{ route('products.show', $product->id) }}",
        "priceCurrency": "USD",
        "price": "{{ $product->price }}",
        "availability": "{{ $product->inventory_count > 0 ? 'https://schema.org/InStock' : 'https://schema.org/OutOfStock' }}",
        "seller": {
            "@type": "Organization",
            "name": "{{ config('app.name') }}"
        }
    }
}
</script>
@endsection

@section('meta')
<meta name="description" content="{{ $product->meta_description ?? $product->short_description }}">
<meta name="keywords" content="{{ $product->meta_keywords }}">
<meta property="og:title" content="{{ $product->meta_title ?? $product->name }}">
<meta property="og:description" content="{{ $product->meta_description ?? $product->short_description }}">
<meta property="og:image" content="{{ asset('/images/placeholder.png') }}">
<meta property="og:url" content="{{ route('products.show', $product->id) }}">
<meta name="twitter:card" content="summary_large_image">
@endsection