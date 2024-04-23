<?php


use App\Models\Employee;
use App\Models\Material;
use App\Models\Anomalie;
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
        Schema::create('test', function (Blueprint $table) {
            $table->id();
            $table->date('datedebut');
            $table->string('result');
            $table->longText('commentaire')->nullable();
            $table->date('datefin');
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
        Schema::dropIfExists('test');
    }
};
