<?php

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
        Schema::create('anomalies', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('datedebut');
            // $table->string('materiel');
            // $table->string('chauffeur');
            $table->string('compteurKilometrique')->nullable();
            $table->string('compteurHoraire')->nullable();
            $table->longText('commentaire')->nullable();
            $table->string('file_path')->nullable();
            $table->string('datefin')->nullable();
            $table->timestamps();

            $table->foreignIdFor(Material::class);
            $table->foreignIdFor(Employee::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anomalies');
    }
};
