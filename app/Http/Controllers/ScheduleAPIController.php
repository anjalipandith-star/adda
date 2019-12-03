<?php

namespace App\Http\Controllers;

use App\Schedule;
use App\Http\Resources\ScheduleCollection;
use App\Http\Resources\ScheduleResource;
 
class ScheduleAPIController extends Controller
{
    public function index()
    {
        return new ScheduleCollection(Schedule::paginate());
    }
 
    public function show(Schedule $schedule)
    {
        return new ScheduleResource($schedule->load(['works']));
    }

    public function store(Request $request)
    {
        return new ScheduleResource(Schedule::create($request->all()));
    }

    public function update(Request $request, Schedule $schedule)
    {
        $schedule->update($request->all());

        return new ScheduleResource($schedule);
    }

    public function destroy(Request $request, Schedule $schedule)
    {
        $schedule->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}