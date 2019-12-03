<?php

namespace App\Http\Controllers;

use App\Worker;
use App\Http\Resources\WorkerCollection;
use App\Http\Resources\WorkerResource;
 
class WorkerAPIController extends Controller
{
    public function index()
    {
        return new WorkerCollection(Worker::paginate());
    }
 
    public function show(Worker $worker)
    {
        return new WorkerResource($worker->load(['works']));
    }

    public function store(Request $request)
    {
        return new WorkerResource(Worker::create($request->all()));
    }

    public function update(Request $request, Worker $worker)
    {
        $worker->update($request->all());

        return new WorkerResource($worker);
    }

    public function destroy(Request $request, Worker $worker)
    {
        $worker->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}