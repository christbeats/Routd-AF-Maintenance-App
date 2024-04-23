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
        Schema::create('diagnostics', function (Blueprint $table) {
            $table->id();
            $table->date('datedebut');
            $table->longText('commentaire')->nullable();
            $table->string('situation');
            $table->string('file_path')->nullable();
            $table->timestamps();

            $table->foreignIdFor(Anomalie::class);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('diagnostics');
    }
};
