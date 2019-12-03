<?php

namespace App\Http\Controllers;

use App\Work;
use App\Http\Resources\WorkCollection;
use App\Http\Resources\WorkResource;
 
class WorkAPIController extends Controller
{
    public function index()
    {
        return new WorkCollection(Work::paginate());
    }
 
    public function show(Work $work)
    {
        return new WorkResource($work->load(['workers', 'schedules', 'heads']));
    }

    public function store(Request $request)
    {
        return new WorkResource(Work::create($request->all()));
    }

    public function update(Request $request, Work $work)
    {
        $work->update($request->all());

        return new WorkResource($work);
    }

    public function destroy(Request $request, Work $work)
    {
        $work->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}