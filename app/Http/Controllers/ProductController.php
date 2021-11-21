<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('product.index', [
            'title' => 'Product', 
            'products'=> Product::all()
          ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (auth()->user()->role == 'admin') {
            return view('product.create', [
                'title' => 'Product',
                'categories'=>Category::orderBy('name', 'asc')->get()
            ]);
        }else{
            return back();
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $product_data = $request->validate([
            'name'=>['required'],
            'price'=>['required'],
            'category_id'=>['required'],
            'image'=>['file' , 'max: 1000'],
            'description'=>['required'],
        ]);
        $product_data['image']=$request->file('image')->store('product_image');
        Product::create($product_data);
        return redirect('/product'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('product.show', [
            'title' => 'Product',
            'product' => Product::where('id', $id)->first(),
        ]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if (auth()->user()->role == 'admin') {
            return view('product.edit', [
                'title' => 'Product',
                'product' => Product::where('id', $id)->first(),
                'categories'=>Category::orderBy('name', 'asc')->get()
            ]);
        }else{
            return back();
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $product_data = $request->validate([
            'name'=>['required'],
            'price'=>['required'],
            'category_id'=>['required'],
            'image'=>['file' , 'max: 1000'],
            'description'=>['required'],
        ]);
        if($request->old_image) {
            Storage::delete("/$request->old_image");
        }
        $product_data['image']=$request->file('image')->store('product_image');
        Product::where('id', $id)->update($product_data);
        return redirect('/product'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if (auth()->user()->role == 'admin'){
            $product=Product::find($id);
            if ($product->image) {
                Storage::delete("/$product->image");
            }
            $product->delete();
            return back();
        }else{
            return back();
        }
    }
}
