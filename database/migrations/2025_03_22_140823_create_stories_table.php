<?php

use App\Constants\StoryDirection;
use App\Constants\StoryRating;
use App\Constants\StorySize;
use App\Constants\StoryStatus;
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
            $table->foreignId('fandom_id')->constrained();
            $table->string('name');
            $table->text('description');
            $table->enum('status', [
                StoryStatus::COMPLETED,
                StoryStatus::IN_PROCESS,
                StoryStatus::FROZEN,
            ])->default(StoryStatus::IN_PROCESS);
            $table->enum('direction', [
                StoryDirection::GET,
                StoryDirection::GEN,
                StoryDirection::SLASH,
            ]);
            $table->enum('rating', [
                StoryRating::RATING_G,
                StoryRating::RATING_PG12,
                StoryRating::RATING_PG16,
                StoryRating::RATING_PG18,
            ]);
            $table->integer('pages')->default(1);
            $table->enum('size', [
                StorySize::MINI,
                StorySize::MIDI,
                StorySize::MAXI,
            ]);
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
