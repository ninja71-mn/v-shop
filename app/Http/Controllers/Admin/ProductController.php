<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Inertia\Inertia;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return Inertia::render('Admin/Product/Index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = new Product();
        $product->title = $request->title;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->description = $request->description;
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->created_by = Auth::user()->id;

        $product->save();

        //check if product has images

        if ($request->hasFile('product_images')) {
            foreach ($request->file('product_images') as $image) {
                $productImage = new ProductImage();
                $uniqueName = time() . '_' . Str::random(10) . $image->getClientOriginalName();
                $image->move(public_path('uploads/product_images'), $uniqueName);

                ProductImage::create([
                    'product_id' => $product->id,
                    'image'=> 'uploads/product_images/' . $uniqueName,
                ]);
            }
        }

        return Redirect::route('admin.products.index')->with('success', 'محصول ' . $product->title .' با موفقیت ساخته شد.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
