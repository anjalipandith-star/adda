<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Work extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id', 'geolocation'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['date', 'created_at', 'updated_at'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        //
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        //
    ];

    /**
     * Get the Workers for the Work.
     */
    public function workers()
    {
        return $this->belongsToMany(\App\Worker::class);
    }

    /**
     * Get the Schedules for the Work.
     */
    public function schedules()
    {
        return $this->belongsToMany(\App\Schedule::class);
    }

    /**
     * Get the Heads for the Work.
     */
    public function heads()
    {
        return $this->belongsToMany(\App\Head::class);
    }

}