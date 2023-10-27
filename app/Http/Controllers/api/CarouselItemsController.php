<?php

namespace App\Http\Controllers\api;

use Illuminate\Http\Request;
use App\Models\CarouselItems;
use App\Http\Controllers\Controller;

class CarouselItemsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return CarouselItems::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         
        $carouselItem = CarouselItems::create([
            'carousel_name' =>$request ->carousel_name,
            'image_path'    =>$request ->image_path,
            'description'   =>$request ->description,
            'user_id'       =>$request ->user_id,
        ]);


    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return CarouselItems::findorfail($id);

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
        $carouselItem = CarouselItems::findorfail($id);
 
        $carouselItem->delete();
        return $carouselItem;
    }
}
