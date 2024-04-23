<?php

use App\Models\Anomalie;
use App\Models\Employee;
use App\Models\Material;
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
        Schema::create('service', function (Blueprint $table) {
            $table->id();
            $table->date('datesortie');
            $table->string('state');
            $table->timestamps();


            $table->foreignIdFor(Anomalie::class);
            $table->foreignIdFor(Material::class);
            $table->foreignIdFor(Employee::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service');
    }
};
