<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;
use PHPUnit\Util\Json;

class DishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dish = Dish::all();
        return response()->json($dish);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return response()->json('dishes.create', 201);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'dish'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);
        $dish = Dish::create([
            'dish'=> $request->dish,
            'description'=>$request->description,
            'price'=>$request->price
        ]);
    
        
        return response()->json($dish, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function show(Dish $dish)
    {
        return response()->json($dish->all());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function edit(Dish $dish, $id)
    {
        $dish = Dish::find($id);
        return redirect(route('editDish'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'dish'=>'required',
            'description'=>'required',
            'price'=>'required'
        ]);

        $dish = Dish::find($id);

        $dish->update($request->all());

        return response()->json($dish, 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dish  $dish
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dish = Dish::find($id);
        $dish->delete();
        return response()->json([], 204);
    }
}
