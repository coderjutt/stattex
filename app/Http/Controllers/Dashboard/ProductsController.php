<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Storage;
class ProductsController extends Controller
{
    public function index()
    {

        $product = Products::all();
        return view('dashboard.product.index', compact('product'));
    }

    public function create()
    {

        return view('dashboard.product.create');

    }

    public function store(Request $request)
    {
    //    dd($request); 
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,svg,webp', 'max:2048'],
            'description' => ['nullable', 'string'],
        ]);


        $imagePath = null;

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Products::create([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
        ]);

        return redirect()->route('admin_products')->with('success', 'product created successfully.');
    }
    public function edit(Request $request,$productId){
        $product=Products::find($productId);
        // dd(vars: $product);
        return view('dashboard.product.edit',compact('product'));
    }
     public function update(Request $request, $productId)
    {
       $product = Products::findOrFail($productId);
       
       $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'mimes:jpeg,png,jpg,svg,webp', 'max:2048'],
            'description' => ['nullable', 'string'],
        ]);
        if ($request->hasFile('image')) {
          
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }
            $imagePath = $request->file('image')->store('services', 'public');
        } else {
          
            $imagePath = $product->image;
        }
        $product->update([
            'name' => $request->name,
            'image' => $imagePath,
            'description' => $request->description,
        ]);
        return redirect()->route('admin_products')->with('success', 'Service updated successfully.');
    }
    public function destroy($productId)
    {
       
        $product = Products::find($productId);

        if ($product->image && Storage::disk('public')->exists($product->image)) {
            Storage::disk('public')->delete($product->image);
        }
             
        $product->delete();
                
        return redirect()->route('admin_products')->with('success','Product successfully deleted');
    } 



  
}
