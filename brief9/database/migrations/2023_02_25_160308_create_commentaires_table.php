<?php

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
        Schema::create('commentaires', function (Blueprint $table) {
            $table->id();
            $table->foreignId('c_user_id')->constrained('users')->onUpdate('cascade')->onDelete('cascade');
            $table->foreignId('c_livre_id')->constrained('livres')->onUpdate('cascade')->onDelete('cascade');
            $table->string('text');
            $table->foreignId('c_groupe_id')->constrained('groupes')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commentaires');
    }
};
