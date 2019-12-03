<?php

namespace App\Http\Controllers;

use App\Head;
use App\Http\Resources\HeadCollection;
use App\Http\Resources\HeadResource;
 
class HeadAPIController extends Controller
{
    public function index()
    {
        return new HeadCollection(Head::paginate());
    }
 
    public function show(Head $head)
    {
        return new HeadResource($head->load(['works']));
    }

    public function store(Request $request)
    {
        return new HeadResource(Head::create($request->all()));
    }

    public function update(Request $request, Head $head)
    {
        $head->update($request->all());

        return new HeadResource($head);
    }

    public function destroy(Request $request, Head $head)
    {
        $head->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}