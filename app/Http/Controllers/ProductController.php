<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Validator;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::with('category')->paginate(15);
         return view('backend.products.index')->with(['categories'=> Category::all(),'products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.products.create')->with(['categories'=> Category::All()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $rules = [
            'title' => 'required|string|max:255',
            'image' => 'required|file',
            'description' => 'required|string',
            'category' => 'required',

        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all(), 'status' => 'error']);
        }
        DB::beginTransaction();
        try {

            $path =  $request->file('image')->store('public/products');
            $product = new Product;
            $product->title = $request->title;
            $product->description = $request->description;
            $product->image = str_replace('public', 'storage', $path);
            $product->category_id = $request->category;
            $product->save();

            DB::commit();
        } catch (Exception $ex) {
            DB::rollback();
            return response()->json(['db_errors' => $ex->getMessage(), 'status' => 'fail'], 500);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
         return view('backend.products.details')->with(['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {

        return view('backend.products.edit')->with(['product'=>$product->load('category'),'categories'=>Category::all()]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $rules = [
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'category' => 'required',
        ];



        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all(), 'status' => 'error']);
        }

        DB::beginTransaction();

        try {
            if ($request->file('image')) {
                $path =  $request->file('image')->store('public/products');
            }


            if ($request->file('image')) {
                $productImage = str_replace('public', 'storage', $path);
            } else {
                $productImage = $product->image;
            }

            $product->title = $request->title;
            $product->description = $request->description;
            $product->image =     $productImage;
            $product->category_id = $request->category;
            $product->save();

            DB::commit();
        } catch (Exception $ex) {
            DB::rollback();
            return response()->json(['db_errors' => $ex->getMessage(), 'status' => 'fail'], 500);

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
         $product->delete();
    }
    public function advertise(product $product)
    {
        $previously_advertised_product =  Product::where('is_advertised',1)->first();

        if($previously_advertised_product){
        $previously_advertised_product->is_advertised = 0;
        $previously_advertised_product->save();
        }


        $product->is_advertised = 1;
        $product->save();

    }
}
