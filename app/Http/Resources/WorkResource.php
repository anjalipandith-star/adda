<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WorkResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'geolocation' => $this->geolocation,
            'date' => $this->date,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'workers' => new WorkerCollection($this->whenLoaded('workers')),
            'schedules' => new ScheduleCollection($this->whenLoaded('schedules')),
            'heads' => new HeadCollection($this->whenLoaded('heads'))
        ];
    }
}