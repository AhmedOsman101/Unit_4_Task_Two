<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void {
        Schema::create('event_participants', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("score")->default(0);
            $table->enum("type", ["individual", "team"])
                ->nullable();
            $table->foreignId("user_id");
            $table->foreignId("event_id");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('event_participants');
    }
};
