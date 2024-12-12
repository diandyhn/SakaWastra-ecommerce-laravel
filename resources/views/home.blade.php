@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="bg-black min-h-screen flex items-center justify-center">
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8 py-24 space-y-8">
        <div class="max-w-3xl text-center mx-auto">
            <h1 class="block font-medium text-4xl sm:text-5xl md:text-6xl lg:text-7xl font-poppins text-roseOfSharon-700">
                Welcome to Saka Wastra Ecommerce
            </h1>
        </div>

        <div class="max-w-3xl text-center mx-auto">
            <p class="text-lg text-roseOfSharon-500">
                Explore our innovative and dynamic shopping platform.
            </p>
        </div>

        <div class="text-center">
            <a class="inline-flex justify-center items-center gap-x-3 text-center bg-gradient-to-tl from-roseOfSharon-600 to-roseOfSharon-800 shadow-lg shadow-transparent hover:shadow-roseOfSharon-500 border border-transparent text-white text-sm font-medium rounded-full focus:outline-none focus:shadow-roseOfSharon-600 py-3 px-6"
                href="#products-section">
                Get started
                <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="m9 18 6-6-6-6" />
                </svg>
            </a>
        </div>
    </div>
</div>
<div class="flex justify-center items-center flex-col space-y-[64px]">
    <h2 class="block font-medium text-4xl font-poppins text-roseOfSharon-700 text-center">Not sure about the batik pattern?<br> Search with an image!</h2>
    <form id="imageUploadForm" action="{{ route('image.search') }}" method="POST" enctype="multipart/form-data" class="flex items-center space-x-[124px] bg-white rounded-full p-4">
        @csrf
        <label for="image" class="flex items-center space-x-2 cursor-pointer text-roseOfSharon-600" id="imageLabel">
            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" id="imageIcon">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h4l2-2h6l2 2h4v14H3V5zm3 7a4 4 0 118 0 4 4 0 01-8 0z" />
            </svg>
            <span id="imageText">Choose Picture</span>
        </label>
        <input id="image" type="file" name="image" accept="image/*" required class="hidden">
        <button class="text-white bg-roseOfSharon-600 hover:bg-roseOfSharon-700 rounded-full py-2 px-4" type="submit">Search by image</button>
    </form>
    <p class="text-white" id="statusMessage"></p>
</div>

<script>
    document.getElementById('image').addEventListener('change', function(event) {
        const file = event.target.files[0];
        if (file) {
            const imageLabel = document.getElementById('imageLabel');
            const imageIcon = document.getElementById('imageIcon');
            const imageText = document.getElementById('imageText');

            const reader = new FileReader();
            reader.onload = function(e) {
                imageIcon.outerHTML = `<img src="${e.target.result}" alt="Thumbnail" class="h-6 w-6 rounded-full">`;
            };
            reader.readAsDataURL(file);

            imageText.textContent = file.name;
        }
    });
</script>

{{-- <div class="relative max-w-lg mx-auto mt-10">
    
    <div
        class="flex items-center bg-white rounded-full px-4 py-2 shadow-md border border-gray-300 focus-within:border-orange-500">
        <input id="search-input" type="text" placeholder="Search for products..."
            class="flex-grow bg-transparent text-black focus:outline-none focus:placeholder-gray-500 border-none" />
        <label for="image-upload" class="cursor-pointer">
            <svg class="h-6 w-6 text-orange-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 5h4l2-2h6l2 2h4v14H3V5zm3 7a4 4 0 118 0 4 4 0 01-8 0z" />
            </svg>
        </label>
        <input id="image-upload" type="file" accept="image/*" class="hidden" />
    </div>
</div> --}}

<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<script>
    document.getElementById('imageUploadForm').addEventListener('submit', async function(event) {
    event.preventDefault();

    const formData = new FormData(this);
    const statusMessage = document.getElementById('statusMessage');
    const productsSection = document.getElementById('products-section');

    statusMessage.textContent = 'Uploading...';

    try {
        const response = await axios.post(this.action, formData, {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                'Content-Type': 'multipart/form-data'
            }
        });

        const data = response.data;
        const predictedClass = data.result.predicted_classes[0];
        statusMessage.textContent = `Search completed! Predicted Class: ${predictedClass}`;

        if (data.products.length > 0) {
            let productsHtml = '<h2 class="text-white">Recommended Products:</h2><div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">';
            data.products.forEach(product => {
                productsHtml += 
                    `<div class="bg-white rounded-lg shadow-lg p-6">
                        <a href="/products/${product.id}" class="block">
                            <img src="/images/${product.featured_image}" alt="${product.name}" class="h-32 w-full object-cover rounded mb-2">
                            <h3 class="text-lg font-semibold leading-tight text-gray-900 hover:underline dark:text-white mb-2">${product.name}</h3>
                        </a>
                        <p class="text-2xl font-extrabold leading-tight text-roseOfSharon-950 dark:text-white mb-2">Price: $${product.price}</p>
                        <button type="button" class="w-full flex items-center justify-center rounded-lg bg-roseOfSharon-500 px-5 py-2.5 text-sm font-medium text-white hover:bg-roseOfSharon-800 focus:outline-none dark:bg-roseOfSharon-600 dark:hover:bg-roseOfSharon-700" onclick="Livewire.dispatch('addToCart', ${product.id}, 1)">
                            <svg class="-ms-2 me-2 h-5 w-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4h1.5L8 16m0 0h8m-8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm8 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm.75-3H7.5M11 7H6.312M17 4v6m-3-3h6"></path>
                            </svg>
                            Add to cart
                        </button>
                    </div>`;
            });
            productsHtml += '</div>';
            productsSection.innerHTML = productsHtml;
        } else {
            productsSection.innerHTML = '<p class="text-white text-center">No products found for this tag.</p>';
        }
    } catch (error) {
        console.error(error);
        statusMessage.textContent = 'Error: ' + (error.response?.data?.error || 'Unexpected error occurred.');
    }
});

</script>
{{-- </script>
    document.getElementById('imageUploadForm').addEventListener('submit', async function(event) {
        event.preventDefault(); // Prevent default form submission

        const formData = new FormData(this);
        const statusMessage = document.getElementById('statusMessage');

        statusMessage.textContent = 'Uploading...';

        try {
            const response = await axios.post(this.action, formData, {
                headers: {
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                    'Content-Type': 'multipart/form-data'
                }
            });

            statusMessage.textContent = 'Search completed! Results: ' + JSON.stringify(response.data);
        } catch (error) {
            statusMessage.textContent = 'Error: ' + error.response?.data?.message || error.message;
        }
    });
</script> --}}


<div id="products-section" class="container mx-auto px-4 py-4 bg-black min-h-[300px]">
    <!-- This section will be dynamically populated with search results -->
</div>

<div class="container px-auto px-4 py-4 bg-black relative left-1/2 -translate-x-1/2" id="products-section">
    @include('components.products_section', ['products' => $latestProducts])
</div>

<div class="container mx-auto px-4 my-4">
    <h2>Special Offers</h2>
    <!-- Special offers content goes here -->
</div>
@endsection
