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
        Schema::create('wedding_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('invitation_id')->references("id")->on("invitations")
                ->cascadeOnDelete()
                ->cascadeOnUpdate();
            $table->string("groom_name", 70);
            $table->string("bride_name", 70);
            $table->string("parent_groom", 70);
            $table->string("parent_bride", 70);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wedding_details');
    }
};
