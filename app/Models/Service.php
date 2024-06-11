<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'duration'
    ];

    ////////////////////////////////
    /// Relationships
    ////////////////////////////////
    public function schedules(): HasMany {
        return $this->hasMany(Schedule::class);
    }

    public function workers(): BelongsToMany
    {
        return $this->belongsToMany(Worker::class);
    }

}
