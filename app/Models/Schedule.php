<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Schedule extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'date',
        'start_time',
        'end_time',
        'schedule_statuses_id',
        'customers_id',
        'workers_id',
        'services_id'
    ];

    //------------------------------------------------------------------
    // Relationships
    //------------------------------------------------------------------
    public function scheduleStatus()
    {
        return $this->belongsTo(ScheduleStatuses::class, 'schedule_statuses_id');
    }
}
