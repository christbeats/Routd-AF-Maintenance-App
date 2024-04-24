<?php

use App\Models\Category;
use App\Models\Employee;
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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('numParc');
            // $table->string('type');
            $table->string('marque')->nullable();
            $table->string('modele')->nullable();
            $table->string('immatriculation');
            $table->string('numChassis')->nullable();
            $table->date('dateAquisition');
            $table->string('etatAquisition')->default('neuf');
            $table->timestamps();

            $table->foreignIdFor(Category::class)->nullable();
            $table->foreignIdFor(Employee::class)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('materials');
    }
};
