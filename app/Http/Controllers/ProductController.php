<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::paginate(10);
        return view('index', compact('products'));
    }

    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required|unique:products',
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'stock' => 'integer|nullable',
        ]);
        if ($request->image == null) {
            $image = "https://fastly.picsum.photos/id/0/5000/3333.jpg?hmac=_j6ghY5fCfSD6tvtcV74zXivkJSPIfR9B8w34XeQmvU";
        } else {
            $image = $request->image;
        }
        Product::create([
            'product_id' => $validated['product_id'],
            'name' => $validated['name'],
            'description' => $request->description,
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'image' => $image
        ]);
        return redirect()->route('products');
    }

    public function sortByName()
    {
        $products = Product::orderBy('name')->paginate(10);
        return view('index', compact('products'));
    }

    public function sortByPrice()
    {
        $products = Product::orderBy('price')->paginate(10);
        return view('index', compact('products'));
    }

    public function search(Request $request)
    {
        $products = Product::where('product_id', 'like', '%' . $request->search . '%')->paginate(10);
        return view('index', compact('products'));
    }

    public function show(Request $request)
    {
        $product = Product::find($request->id);
        return view('show', compact('product'));
    }

    public function edit(Request $request)
    {
        $product = Product::find($request->id);
        return view('edit', compact('product'));
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'required',
            'name' => 'required|max:255',
            'price' => 'required|numeric',
            'stock' => 'integer|nullable',
        ]);
        if ($request->image == null) {
            $image = "https://fastly.picsum.photos/id/0/5000/3333.jpg?hmac=_j6ghY5fCfSD6tvtcV74zXivkJSPIfR9B8w34XeQmvU";
        } else {
            $image = $request->image;
        }
        $product = Product::find($request->id);
        $product->update([
            'product_id' => $validated['product_id'],
            'name' => $validated['name'],
            'description' => $request->description,
            'price' => $validated['price'],
            'stock' => $validated['stock'],
            'image' => $image
        ]);
        return redirect()->route('products');
    }

    public function delete(Request $request)
    {
        $product = Product::find($request->id);
        $product->delete();
        return redirect()->route('products');
    }


}
