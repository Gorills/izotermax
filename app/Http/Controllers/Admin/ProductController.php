<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;
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
        return view('admin.products.index', [

            'products' => Product::orderBy('created_at', 'desc')->paginate(10)

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create', [
            'product'    => [],
            'categories' => Category::with('children')->where('parent_id', 0)->get(),
            'delimiter'  => ''


        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $path = $request->file('image')->store('products');
        $params = $request->all();
        $params['image'] = $path;


        $product = Product::create($params);

        // Categories
        if ($request->input('categories')) :
            $product->categories()->attach($request->input('categories'));

        endif;

        return redirect()->route('admin.product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', [

            'product' => $product,
            'categories'=>Category::with('children')->where('parent_id', 0)->get(),
            'delimiter' => ''
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        Storage::delete($product->image);
        $path = $request->file('image')->store('products');
        $params = $request->all();
        $params['image'] = $path;


        $product->update($params);
        $product->categories()->detach();

        if ($request->input('categories')) :
            $product->categories()->attach($request->input('categories'));

        endif;

        return redirect()->route('admin.product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        Storage::delete($product->image);

        $product->categories()->detach();
        $product->delete();

        return redirect()->route('admin.product.index');
    }


}
