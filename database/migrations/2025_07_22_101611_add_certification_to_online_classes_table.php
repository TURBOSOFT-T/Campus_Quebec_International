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
        Schema::table('documents', function (Blueprint $table) {
             $table->unsignedBigInteger('formation_id')->nullable()->default(null);
              $table->unsignedBigInteger('certification_id')->nullable()->default(null);
            $table->unsignedBigInteger('event_id')->nullable()->default(null);
            $table->enum("type",["formation","event","certification"])->default("event");
            $table->foreignId('user_id')->references('id')->on('users')->onDelete('cascade');
          
            $table->string('titre')->nullable();
             $table->boolean('active')->default(true);
              $table->string('filename'); 
             $table->text('description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('documents', function (Blueprint $table) {
            //
        });
    }
};
