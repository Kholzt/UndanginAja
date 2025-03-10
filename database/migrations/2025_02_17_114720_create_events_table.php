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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->references("id")->on("invitations")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string("title", 100);
            $table->dateTime("event_date_start");
            $table->dateTime("event_date_end")->nullable();
            $table->string("address");
            $table->string("map_address");
            $table->text("map_address_preview");
            $table->tinyInteger("isPrimary")->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
