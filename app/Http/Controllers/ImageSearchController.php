<?php

namespace App\Http\Controllers;

use App\Services\RoboflowService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Product;
use Illuminate\Support\Facades\Log;

class ImageSearchController extends Controller
{
    protected $roboflowService;

    public function __construct(RoboflowService $roboflowService)
    {
        $this->roboflowService = $roboflowService;
    }

    public function search(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:10240',
        ]);

        try {
            $imagePath = $request->file('image')->store('images');
            $result = $this->roboflowService->searchImage(storage_path('app/' . $imagePath));

            // Get predicted class(es)
            $predictedClasses = $result['predicted_classes'];

            // Fetch products matching the predicted tags
            $products = Product::withTagNames($predictedClasses)->get();

            return response()->json([
                'result' => $result,
                'products' => $products,
            ], 200);
        } catch (\Exception $e) {
           // \Log::error('Image Search Error: ' . $e->getMessage());
            return response()->json(['error' => 'Unable to process the image. Please try again later.'], 500);
        }
    }


}