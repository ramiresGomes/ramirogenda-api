<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScheduleStatuses extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name'
    ];

    //------------------------------------------------------------------
    // Relationships
    //------------------------------------------------------------------
    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'schedule_statuses_id');
    }

}
