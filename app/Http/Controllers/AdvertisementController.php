<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use Illuminate\Http\Request;
use Validator;
use DB;
class AdvertisementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.advertisements.create');
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
            'image' => 'required|file',
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()->all(), 'status' => 'error']);
        }

         DB::beginTransaction();
        try {
            $path =  $request->file('image')->store('public/ads');
            $advertisement = new Advertisement;
            $advertisement->image = str_replace('public', 'storage', $path);
            $advertisement->save();
            DB::commit();
        }
        catch (Exception $ex) {
            DB::rollback();
            return response()->json(['db_errors' => $ex->getMessage(), 'status' => 'fail'], 500);
        }
    }

}
