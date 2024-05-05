<?php

namespace App\Http\Controllers;

use App\Http\Requests\PlantRequest;
use App\Models\Plant;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Http\Requests\UpdatePlantRequest;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Plant::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlantRequest $request)
    {
        $plant = Plant::create  ($request->all());
        return response()->json(['plant' => $plant], Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(Plant $plant)
    {
        return response()->json(['plant' => $plant], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePlantRequest $request, Plant $plant)
    {
        $plant->update($request->all());
        return response()->json(['plant' => $plant], Response::HTTP_OK);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plant $plant)
    {
        $plant->delete();
        return response()->json(['plant' => $plant], Response::HTTP_ACCEPTED);
    }
}
