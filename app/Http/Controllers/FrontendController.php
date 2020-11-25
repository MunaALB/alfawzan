<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Product;
use App\Models\Category;
use App\Models\Job;
use Illuminate\Http\Request;
use Validator;
use DB;
class FrontendController extends Controller
{
    public function products()
    {
        $products = Product::with('category')->paginate(15);
         return view('frontend.products')->with(['categories'=> Category::all(),'products'=>$products]);
    }

    public function index()
    {
        $products = Product::with('category')->limit(5)->get();
        $advertised_product = Product::where('is_advertised',1)->first();
        $advertisement_image = Advertisement::latest()->first();

        return view('frontend.index')->with(['products'=>$products,'advertised_product'=>$advertised_product,'advertisement_image'=>$advertisement_image]);
    }

    public function details(Product $product)
    {
         return view('frontend.product-details')->with(['product'=>$product]);
    }

    public function applyToJob(Request $request){
        $rules = [
            'applicant_name' => 'required|string|max:255',
            'applicant_email' => 'required|email',
            'applicant_cv' => 'required|file',
        ];
         $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all(), 'status' => 'error']);
        }

        DB::beginTransaction();
        try {

            $path =  $request->file('applicant_cv')->store('public/cv');
            $application = new Job();
            $application->applicant_name = $request->applicant_name;
            $application->applicant_email = $request->applicant_email;
            $application->applicant_cv = str_replace('public', 'storage', $path);
            $application->save();

            DB::commit();
        } catch (Exception $ex) {
            DB::rollback();
            return response()->json(['db_errors' => $ex->getMessage(), 'status' => 'fail'], 500);
        }
    }
}
