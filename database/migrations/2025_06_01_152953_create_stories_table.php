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
        Schema::create('stories', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('fandom_id')->nullable()->constrained()->cascadeOnDelete();
            $table->string('type', 4);
            $table->string('name');
            $table->text('description');
            $table->string('status', 2);
            $table->string('direction', '8');
            $table->string('rating', 4);
            $table->string('size', 4);
            $table->string('cover', 400)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stories');
    }
};
