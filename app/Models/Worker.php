<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use HasFactory,
        SoftDeletes;

    protected $fillable = [
        'name',
        'email',
        'cellphone',
        'passworld',
        'interval',
    ];

    //------------------------------------------------------------------
    // Relationships
    //------------------------------------------------------------------
    public function workShifts(): BelongsTo
    {
        return $this->belongsTo(WorkShift::class);
    }

    public function shedules(): BelongsTo
    {
        return $this->belongsTo(Schedule::class);
    }

    public function services()
    {
        return $this->belongsToMany(Service::class, 'workers_has_service', 'worker_id', 'service_id');
    }

    public function companies()
    {
        return $this->belongsToMany(Company::class, 'companies_has_workers', 'worker_id', 'service_id');
    }
}
