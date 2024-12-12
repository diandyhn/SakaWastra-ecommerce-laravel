<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\BrowsingHistory;
use App\Services\RecommendationService;
use App\Models\ProductCategory; 
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;
use Illuminate\Support\Facades\Http;

class ProductController extends Controller
{
    protected $recommendationService;

    public function __construct(RecommendationService $recommendationService)
    {
        $this->recommendationService = $recommendationService;
    }

    public function index(Request $request)
    {
        // Ambil semua kategori dan tag dari database
        $categories = ProductCategory::all();
        $tags = Tag::all();

        // Query produk dengan filter sorting, category, dan tag
        $products = QueryBuilder::for(Product::class)
            ->allowedFilters([
                'name',
                'price',
                'created_at',
                AllowedFilter::scope('price_min'),
                AllowedFilter::scope('price_max'),
            ])
            ->allowedSorts(['name', 'price', 'created_at'])
            ->when($request->category, function ($query, $categoryId) {
                return $query->where('category_id', $categoryId); // Filter berdasarkan category
            })
            ->when($request->tag, function ($query, $tagId) {
                return $query->whereHas('tags', function ($q) use ($tagId) {
                    $q->where('tags.id', $tagId); // Perjelas dengan menyebutkan tabel `tags`
                });
            })
            ->paginate(config('pagination.per_page'))
            ->appends($request->query());

        // Kirim data category dan tag ke view
        return view('products.index', compact('products', 'categories', 'tags'));
    }


    public function show(Product $product)
    {
        // // Track browsing history
        // if (auth()->check()) {
        //     BrowsingHistory::create([
        //         'user_id' => auth()->id(),
        //         'product_id' => $product->id,
        //     ]);
        // }

        // // Get recommendations
        // $recommendations = [];
        // if (auth()->check()) {
        //     $recommendations = $this->recommendationService->getRecommendations(auth()->user());
        // }

        // $metaTitle = $product->meta_title ?? $product->name;
        // $metaDescription = $product->meta_description ?? $product->short_description;
        // $metaKeywords = $product->meta_keywords;
        // $canonicalUrl = route('products.show', ['category' => $category, 'product' => $product->slug]);

        return view('products.show', compact('product'));
    }

//     public function imageSearch(Request $request)
// {
//     // Validate image
//     $request->validate([
//         'image' => 'required|image|max:2048', // Max 2MB image size
//     ]);

//     $file = $request->file('image');
//     $response = Http::withHeaders([
//         'Authorization' => 'z64VlnGxCBmSoCvmyuzJ', // Ensure the token is correct
//     ])
//     ->attach(
//         'file', file_get_contents($file->getRealPath()), $file->getClientOriginalName()
//     )
//     ->post('https://detect.roboflow.com/batik-classification-9983a-frndb/3'); // Verify this endpoint

//     // Check if the API response is valid
//     if ($response->failed()) {
//         return response()->json(['error' => 'Failed to process image with Roboflow API'], 500);
//     }

//     // Parse the result from Roboflow API
//     $results = $response->json();
//     if (!isset($results['predictions'])) {
//         return response()->json(['error' => 'Unexpected API response format'], 500);
//     }

//     // Get the labels from predictions and find matching products
//     $keywords = collect($results['predictions'])->pluck('label');
//     $products = Product::whereIn('name', $keywords)->get();

//     // Return search results
//     return view('search_results', compact('products'));
// }


    // public function create(Request $request)
    // {
    //     // Handle Product File Upload
    //     if ($request->hasFile('product_file')) {
    //         $file = $request->file('product_file');
    //         $filePath = $file->store('public/downloadable_products');
    //         $fileUrl = Storage::url($filePath);
    //     } else {
    //         $fileUrl = null;
    //     }

    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:255',
    //         'description' => 'required|string',
    //         'price' => 'required|numeric',
    //         'category' => 'required|string|max:255',
    //         'inventory_count' => 'required|integer',
    //         // Include download limit in validation
    //         'download_limit' => 'integer|nullable',
    //     ]);

    //     $product = Product::create($validatedData);

    //     // Create an initial inventory log entry
    //     $product->inventoryLogs()->create([
    //         'quantity_change' => $validatedData['inventory_count'],
    //         'reason' => 'Initial stock setup',
    //     ]);

    //     return response()->json($product, Response::HTTP_CREATED);
    // }

    // public function update(Request $request, $id)
    // {
    //     $product = Product::find($id);

    //     if (!$product) {
    //         return response()->json(['message' => 'Product not found'], Response::HTTP_NOT_FOUND);
    //     }

    //     $validatedData = $request->validate([
    //         'name' => 'string|max:255',
    //         'description' => 'string',
    //         'price' => 'numeric',
    //         'category' => 'string|max:255',
    //         'inventory_count' => 'integer',
    //     ]);

    //     // Handle Product File Upload for Update
    //     if ($request->hasFile('product_file')) {
    //         $file = $request->file('product_file');
    //         $filePath = $file->store('public/downloadable_products');
    //         $fileUrl = Storage::url($filePath);
    //         // Update Downloadable Product entry
    //         $product->downloadable()->updateOrCreate(['product_id' => $product->id], ['file_url' => $fileUrl, 'download_limit' => $request->download_limit]);
    //     }

    //     $product->update($validatedData);

    //     return response()->json($product);
    // }

    // public function delete($id)
    // {
    //     $product = Product::find($id);

    //     if (!$product) {
    //         return response()->json(['message' => 'Product not found'], Response::HTTP_NOT_FOUND);
    //     }

    //     $product->delete();

    //     return response()->json(['message' => 'Product deleted successfully']);
    // }

    // public function addToCompare(Request $request, $id)
    // {
    //     $product = Product::findOrFail($id);
    //     $compareList = Session::get('compare_list', []);

    //     if (!in_array($id, $compareList) && count($compareList) < 4) {
    //         $compareList[] = $id;
    //         Session::put('compare_list', $compareList);
    //         return redirect()->back()->with('success', 'Product added to comparison.');
    //     } elseif (in_array($id, $compareList)) {
    //         return redirect()->back()->with('info', 'Product is already in the comparison list.');
    //     } else {
    //         return redirect()->back()->with('error', 'You can compare up to 4 products at a time.');
    //     }
    // }

    // public function compare()
    // {
    //     $compareList = Session::get('compare_list', []);
    //     $products = Product::whereIn('id', $compareList)->get();

    //     return view('products.compare', compact('products'));
    // }

    // public function removeFromCompare($id)
    // {
    //     $compareList = Session::get('compare_list', []);
    //     $compareList = array_diff($compareList, [$id]);
    //     Session::put('compare_list', $compareList);

    //     return redirect()->back()->with('success', 'Product removed from comparison.');
    // }

    // public function clearCompare()
    // {
    //     Session::forget('compare_list');
    //     return redirect()->route('products.list')->with('success', 'Comparison list cleared.');
    // }
}
