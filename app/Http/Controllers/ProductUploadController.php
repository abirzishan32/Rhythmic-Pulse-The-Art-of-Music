<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductUploadController extends Controller
{
    public function storeProduct(Product $merch_product, Request $request)
    {
        $incomingFields = $request->validate([
            'band_name' => 'required|string|max:255',
            'type' => 'required|string|max:255',
            'price' => 'required',
            'image' => 'required|image',
            'recommended' => 'required|string|max:255',
        ]);

        $incomingFields['band_name'] = strip_tags($incomingFields['band_name']);
        $incomingFields['type'] = strip_tags($incomingFields['type']);
        $incomingFields['recommended'] = strip_tags($incomingFields['recommended']);


        $imagePath = $request->file('image')->store('public/products');
        $incomingFields['image'] = $imagePath;
        $merch_product->create($incomingFields);
        return redirect('/admin/merch-product')->with('success', 'Event created successfully!');
    }

    public function index1()
    {
        $merch_product = Product::all();
        $recommended_products = Product::where('recommended', 'yes')->get();
        return view('/admin/merch-product', compact('merch_product', 'recommended_products'));
    }

    public function index2()
    {
        $merch_product = Product::all();
        $recommended_products = Product::where('recommended', 'yes')->get();
        return view('/merch', compact('merch_product', 'recommended_products'));
    }


  

    public function delete($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect('/admin/merch-product')->with('success', 'Product deleted successfully');
    }

    public function search(Request $request)
    {
        $search = $request->get('query');
        $merch_product = Product::where('band_name', 'like', '%' . $search . '%')->with('band_name')->get();
        return view('admin.merch-product', compact('merch_product'));
    }


}
