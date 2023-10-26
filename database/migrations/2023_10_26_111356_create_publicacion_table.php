<?php

use App\Models\materia;
use App\Models\usuario;
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
        Schema::create('publicacion', function (Blueprint $table) {
            $table->id();
            $table->string('nombrePublicacion')->unique();
            $table->string('descripcion')->nullable();

            $table->foreignIdFor(usuario::class,'profesor_ID');
            $table->foreignIdFor(materia::class,'materia_ID');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publicacion');
    }
};
