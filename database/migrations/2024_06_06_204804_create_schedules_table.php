<?php

use App\Models\Customer;
use App\Models\Worker;
use App\Models\ScheduleStatuses;
use App\Models\Service;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('start_time');
            $table->time('end_time');
            $table->foreignIdFor(ScheduleStatuses::class)->nullable()->unsigned()->constrained()->nullOnDelete();
            $table->foreignIdFor(Customer::class)->unsigned()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Worker::class)->unsigned()->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Service::class)->unsigned()->constrained()->cascadeOnDelete();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
